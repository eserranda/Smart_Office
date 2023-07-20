<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function handleData(Request $request)
    {
        // Mendapatkan nilai parameter dari permintaan
        // $param1 = $request->input('uid');
        $apiKey = $request->input('apiKey');
        // Melakukan verifikasi API key
        if ($apiKey === 'R001') {

            // Lakukan operasi yang diinginkan dengan data yang diterima
            // Misalnya, menyimpan data ke database atau melakukan tindakan lainnya

            // Contoh: Menyimpan data ke database
            // ModelData adalah model Eloquent yang mewakili tabel data
            $data = new Data();
            $data->data = $apiKey;
            $data->save();

            // Memberikan respons berhasil kepada ESP32
            return response()->json(['status' => 'success']);
        } else {
            // Memberikan respons gagal kepada ESP32
            return response()->json(['status' => 'error', 'message' => 'Invalid API key']);
        }
    }
}
