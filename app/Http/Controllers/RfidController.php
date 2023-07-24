<?php

namespace App\Http\Controllers;

use App\Models\Rfid;
use App\Models\Ruangan;
use App\Models\DataTemp;
use App\Models\Pengguna;
use App\Models\Scanning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RfidController extends Controller
{
    public function index()
    {
        $rfidList = Rfid::all();
        return view('rfid.data_rfid', ['rfidList' => $rfidList]);
    }

    public function scanning(Request $request)
    {
        $apiKey      = $request->input('apiKey');
        $nomor_kartu = $request->input('uid');

        if ($apiKey && $nomor_kartu) {

            $rfid = Rfid::where('nomor_kartu', $nomor_kartu)
                ->where('apiKey', $apiKey)
                ->first();

            if ($rfid) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Data received and processed successfully'
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Data Tidak Sama',
                ]);
            }
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Data tidak lengkap',
        ]);
    }

    public function add_rfid()
    {
        DataTemp::truncate();
        $ruangan = Ruangan::all();
        $pengguna = Pengguna::all();
        return view('rfid.add_rfid', ['ruanganList' => $ruangan], ['penggunaList' => $pengguna]);
    }

    public function scan_kartu(Request $request)
    {
        $mode = $request->input('mode'); //data mode = 1

        DataTemp::truncate();

        $scanning = Scanning::first();

        if ($scanning) {
            $scanning->mode_daftar = $mode;
            $scanning->save();

            return response()->json(['status' => $mode]);
        } else {
            return response()->json(['status' => 'Error: Data not found']);
        }
    }

    public function get_data(Request $request)
    {
        $uid    = $request->input('uid');
        $apiKey = $request->input('apiKey');

        $data = [
            'uid' => $uid,
            'apiKey' => $apiKey,
        ];

        return view('rfid.add_rfid', compact('data'));
    }

    public function store(Request $request)
    {
        $data = Rfid::create($request->all());

        DataTemp::truncate('id');

        $id = '1';
        $mode = '0';
        $update_data = Scanning::findOrFail($id);

        $update_data->update([
            'mode_daftar' => $mode
        ]);


        if ($data) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data berhasil Ditambah!');
        }
        return redirect('/rfid');
    }

    public function destroy($id)
    {
        $delete_user = Rfid::findOrFail($id);
        $delete_user->delete();
        if ($delete_user) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data berhasil Dihapus!');
        }
        return redirect('/rfid');
    }
}
