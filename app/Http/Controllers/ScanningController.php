<?php

namespace App\Http\Controllers;

use App\Models\Rfid;
use App\Models\Scanning;
use Illuminate\Http\Request;

class ScanningController extends Controller
{

    public function ambil_data()
    {
        $data = Scanning::pluck('mode_daftar');
        return response()->json(['data' => $data]);
    }

    public function data_scanning(Request $request)
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

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Scanning $scanning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scanning $scanning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scanning $scanning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scanning $scanning)
    {
        //
    }
}