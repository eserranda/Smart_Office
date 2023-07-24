<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function handleData(Request $request)
    {
        // Mendapatkan nilai parameter dari permintaan 
        $uid = $request->input('uid');
        $apiKey = $request->input('apiKey');
        // Melakukan verifikasi API key
        if ($apiKey === 'R001') {
            $data = new Data();
            $data->data = $apiKey;
            $data->uid = $uid;
            $data->save();
            // Memberikan respons berhasil kepada ESP32
            return response()->json(['status' => 'success']);
        } else {
            // Memberikan respons gagal kepada ESP32
            return response()->json(['status' => 'error', 'message' => 'Invalid API key']);
        }
    }
}
