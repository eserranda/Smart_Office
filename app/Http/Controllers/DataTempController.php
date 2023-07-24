<?php

namespace App\Http\Controllers;

use App\Models\DataTemp;
use App\Models\Scanning;
use Illuminate\Http\Request;

class DataTempController extends Controller
{

    public function get_dataID()
    {
        $latestData = DataTemp::latest('created_at')->first(['id_card', 'apiKey']);
        return response()->json(['data' => $latestData]);
    }


    public function data_temp(Request $request)
    {
        $apiKey = $request->input('apiKey');
        $id_card = $request->input('uid');

        $id = '1';
        $mode = '0';

        if ($apiKey != '') {
            $data = new DataTemp();
            $data->apiKey = $apiKey;
            $data->id_card = $id_card;
            $data->save();

            $update_data = Scanning::findOrFail($id);
            $update_data->update([
                'mode_daftar' => $mode
            ]);
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Invalid API key']);
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
    public function show(DataTemp $dataTemp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataTemp $dataTemp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataTemp $dataTemp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataTemp $dataTemp)
    {
        //
    }
}