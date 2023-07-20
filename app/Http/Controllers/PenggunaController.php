<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenggunaController extends Controller
{
    public function index()
    {
        $user = Pengguna::all();
        return view('user.data_user', ['userList' => $user]);
    }

    public function add_pengguna()
    {
        return view('user.add_user');
    }

    public function store(Request $request)
    {
        $save_user = Pengguna::create($request->all());

        if ($save_user) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data berhasil Ditambah!');
        }
        return redirect('user/data_user');
    }

    public function delete($id)
    {
        $delete_user = Pengguna::findOrFail($id);
        $delete_user->delete();
        if ($delete_user) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data berhasil Dihapus!');
        }
        return redirect('user/data_user');
    }
}