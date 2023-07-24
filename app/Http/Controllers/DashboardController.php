<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Dashboard;
use App\Models\StatusData;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDashboardRequest;
use App\Http\Requests\UpdateDashboardRequest;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status_device = StatusData::all();
        return view('dashboard/index', ['statusDevice' => $status_device]);
    }

    public function get_status_device()
    {
        $statusDevice = StatusData::with('ruangan')->get();

        return response()->json($statusDevice);
    }

    public function updateStatusPintu(Request $request)
    {
        $apiKey = $request->input('apiKey');
        $status_pintu = $request->input('status_pintu');

        // Ambil data ruangan berdasarkan apiKey
        $ruangan = Ruangan::where('apiKey', $apiKey)->first();

        if ($ruangan) {
            // Ambil data status_data berdasarkan id_ruangan yang sesuai
            $statusData = StatusData::where('id_ruangan', $ruangan->id)->first();

            if ($statusData) {
                // Jika data status_data sudah ada, update status_pintu
                $statusData->update(['status_pintu' => $status_pintu]);
            } else {
                // Jika data status_data belum ada, buat data baru
                StatusData::create([
                    'id_ruangan' => $ruangan->id,
                    'status_pintu' => $status_pintu,
                    // tambahkan atribut lainnya sesuai kebutuhan
                ]);
            }

            return response()->json(['success' => 'Status pintu berhasil diupdate']);
        } else {
            return response()->json(['error' => 'API Key tidak valid']);
        }
    }

    public function status_sensorPir(Request $request)
    {
        $apiKey = $request->input('apiKey');
        $sensor_gerak = $request->input('sensor_gerak');

        // Ambil data ruangan berdasarkan apiKey
        $ruangan = Ruangan::where('apiKey', $apiKey)->first();

        if ($ruangan) {
            // Ambil data status_data berdasarkan id_ruangan yang sesuai
            $statusData = StatusData::where('id_ruangan', $ruangan->id)->first();

            if ($statusData) {
                // Jika data status_data sudah ada, update status_pintu
                $statusData->update(['sensor_gerak' => $sensor_gerak]);
            } else {
                // Jika data status_data belum ada, buat data baru
                StatusData::create([
                    'id_ruangan' => $ruangan->id,
                    'sensor_gerak' => $sensor_gerak,
                    // tambahkan atribut lainnya sesuai kebutuhan
                ]);
            }

            return response()->json(['success' => 'Status Sensor Pir berhasil diupdate']);
        } else {
            return response()->json(['error' => 'API Key tidak valid']);
        }
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
    public function store(StoreDashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDashboardRequest $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}