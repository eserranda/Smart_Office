<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\StatusData;
use Illuminate\Http\Request;

class StatusDataController extends Controller
{
    public function status_device(Request $request)
    {
        $apiKey = $request->input('apiKey');

        $id_ruangan = Ruangan::where('apiKey', $apiKey)->first();

        if ($id_ruangan) {
            // Jika data ditemukan, ambil nilai ID ruangan
            $id_ruangan_value = $id_ruangan->id;

            $save_data = StatusData::updateOrCreate(
                ['id_ruangan' => $id_ruangan_value], // Data untuk pencarian (id_ruangan sebagai kriteria)
                [
                    'apiKey'          => $apiKey,
                    'status_pintu'    => request('status_pintu'),
                    'status_lampu'    => request('status_lampu'),
                    'status_ac'       => request('status_ac'),
                    'status_terminal' => request('status_terminal'),
                    'sensor_gerak'    => request('sensor_gerak'),
                ] // Data yang akan diupdate atau dibuat jika tidak ditemukan
            );

            if ($save_data) {
                return response()->json(['success' => 'Data Berhasil Di simpan']);
            } else {
                return response()->json(['error' => 'Failed to save data']);
            }
        } else {
            return response()->json(['error' => 'No data result']);
        }
    }


    // $save_data = StatusData::create([
    //     'id_ruangan'      => $id_ruangan,
    //     'apiKey'          => $apiKey,
    //     'status_pintu'    => request('status_pintu'),
    //     'status_lampu'    => request('status_lampu'),
    //     'status_ac'       => request('status_ac'),
    //     'status_terminal' => request('status_terminal'),
    //     'sensor_gerak'    => request('sensor_gerak'),
    // ]);

    // if ($save_data) {
    //     return response()->json(['success' => $save_data]);
    // } else {
    //     return response()->json(['error' => 'error', 'message' => 'No data result']);
    // }

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
    public function show(StatusData $statusData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StatusData $statusData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StatusData $statusData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StatusData $statusData)
    {
        //
    }
}
