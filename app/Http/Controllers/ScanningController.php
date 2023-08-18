<?php

namespace App\Http\Controllers;

use App\Models\Rfid;
use App\Models\Status;
use App\Models\Scanning;
use Illuminate\Http\Request;

class ScanningController extends Controller
{

    public function ubahStatusoff(Request $request)
    {
        $apiKey = $request->input('apiKey');
        $status = $request->input('status');

        if ($apiKey == "R000") {
            Status::where('apiKey', 'R000')->update(['status' => 0]);
        }
    }

    public function ambil_data()
    {
        $data = Scanning::pluck('mode_daftar');
        return response()->json(['data' => $data]);
    }

    // public function data_scanning(Request $request)
    // {
    //     $apiKey      = $request->input('apiKey');
    //     $nomor_kartu = $request->input('uid');
    //     $status      = $request->input('status');

    //     if ($apiKey == "R000") {
    //         $rfid = Rfid::where('nomor_kartu', $nomor_kartu)
    //             ->where('apiKey', $apiKey)
    //             ->first();

    //         if ($rfid) {

    //             $updatedRows = Rfid::where('apiKey', 'R000')->update(['status' => 1]);

    //             if ($updatedRows > 0) {
    //                 return response()->json([
    //                     'status' => 'success',
    //                     'message' => 'Updated ' . $updatedRows . ' rows with apiKey R000 to status 1',
    //                 ]);
    //             } else {
    //                 return response()->json([
    //                     'status' => 'error',
    //                     'message' => 'No rows updated with apiKey R000',
    //                 ]);
    //             }

    //             return response()->json([
    //                 'status' => 'success',
    //                 'message' => 'Data received and processed successfully'
    //             ]);
    //         } else {
    //             return response()->json([
    //                 'status' => 'error',
    //                 'message' => 'Data Tidak Sama',
    //             ]);
    //         }
    //     } else if ($apiKey && $nomor_kartu) {
    //         $status = Rfid::where('apiKey', 'R000') // Menggunakan apiKey R000 sebagai patokan
    //             ->where('status', 1) // Menambahkan kondisi status = 1
    //             ->first();

    //         if ($status) {
    //             $rfid = Rfid::where('nomor_kartu', $nomor_kartu)
    //                 ->where('apiKey', $apiKey)
    //                 ->first();

    //             if ($rfid) {
    //                 return response()->json([
    //                     'status' => 'success',
    //                     'message' => 'Data received and processed successfully'
    //                 ]);
    //             } else {
    //                 return response()->json([
    //                     'status' => 'error',
    //                     'message' => 'Data Tidak Sama',
    //                 ]);
    //             }
    //         }
    //     } else {
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Data tidak lengkap',
    //         ]);
    //     }
    // }

    public function data_scanning(Request $request)
    {
        $apiKey = $request->input('apiKey');
        $nomor_kartu = $request->input('uid');

        if (!$apiKey || !$nomor_kartu) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak lengkap',
            ]);
        }

        $rfid = Rfid::where('nomor_kartu', $nomor_kartu)
            ->where('apiKey', $apiKey)
            ->first();

        if (!$rfid) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data Tidak Sama',
            ]);
        }

        if ($apiKey === 'R000') {
            // $rfid->update(['status' => 1]);
            Status::where('apiKey', 'R000')->update(['status' => 1]);
            return response()->json([
                'status' => 'success',
                'message' => 'Data received and processed successfully'
            ]);
        } else {
            $statusR000 = Status::where('apiKey', 'R000')
                ->where('status', 1)
                ->first();

            if (!$statusR000) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid apiKey or status',
                ]);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Data received and processed successfully'
            ]);
        }
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