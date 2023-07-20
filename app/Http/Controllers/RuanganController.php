<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ruangan = Ruangan::all();
        return view('ruangan.data_ruangan', ['ruanganList' => $ruangan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $pengguna = Pengguna::all();
        return view('ruangan.add_ruangan', ['PenggunaList' => $pengguna]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save_ruangan = Ruangan::create($request->all());

        if ($save_ruangan) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data berhasil Ditambah!');
        }
        return redirect('ruangan/data_ruangan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ruangan $ruangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ruangan $ruangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ruangan $ruangan)
    {
        //
    }
}
