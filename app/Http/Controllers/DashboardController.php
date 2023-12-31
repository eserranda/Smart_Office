<?php

namespace App\Http\Controllers;

use Telegram\Bot\Api;
use App\Models\Ruangan;
use App\Models\Dashboard;
use App\Models\StatusData;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDashboardRequest;
use App\Http\Requests\UpdateDashboardRequest;

class DashboardController extends Controller
{


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

        $ruangan = Ruangan::where('apiKey', $apiKey)->first();

        if ($ruangan) {
            $statusData = StatusData::where('id_ruangan', $ruangan->id)->first();
            if ($statusData) {
                $statusData->update(['status_pintu' => $status_pintu]);
            } else {
                StatusData::create([
                    'id_ruangan' => $ruangan->id,
                    'status_pintu' => $status_pintu,
                ]);
            }

            return response()->json(['success' => 'Status pintu berhasil diupdate']);
        } else {
            return response()->json(['error' => 'API Key tidak valid']);
        }
    }




    public function status_sensorPir(Request $request)
    {
        function sendMessageToTelegram($message, $chat_id)
        {
            $telegram = new Api(config('services.telegram.bot_token'));
            $telegram->sendMessage([
                'chat_id' => $chat_id,
                'text' => $message,
            ]);
        }

        $apiKey = $request->input('apiKey');
        $sensor_gerak = $request->input('sensor_gerak');

        $ruangan = Ruangan::where('apiKey', $apiKey)->first();
        $nama_ruangan = $ruangan->nama;
        // return response()->json(['status' => $sensor_gerak]);
        $sensor_gerak = (int) $sensor_gerak;

        if ($sensor_gerak === 1) {
            $chat_id = "5585458183";
            $message =  "Gerakan Terdeteksi pada " . $nama_ruangan;
            sendMessageToTelegram($message, $chat_id);
        }

        if ($ruangan) {
            $statusData = StatusData::where('id_ruangan', $ruangan->id)->first();

            if ($statusData) {
                $statusData->update(['sensor_gerak' => $sensor_gerak]);
            } else {
                StatusData::create([
                    'id_ruangan' => $ruangan->id,
                    'sensor_gerak' => $sensor_gerak,
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