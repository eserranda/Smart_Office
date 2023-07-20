<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/csrf_token', function () {
    return csrf_token();
});
// Route::post('/data_endpoint', 'DataController@handleData');

// Route::controller(DataController::class)->group(function () {
//     Route::get('/data_endpoint', 'handleData');
// });

// Route::post('data_endpoint', [DataController::class, 'handleData']);

// Route::get('/dashboards', function () {
//     return view('dashboard.index');
// });

// Route::get('/ruangan', function () {
//     return view('ruangan.data_ruangan');
// });
Route::get('/rfid', function () {
    return view('rfid.data_rfid');
});

Route::get('/add_rfid', function () {
    return view('rfid.add_rfid');
});

Route::get('/add_user', function () {
    return view('user.add_user');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboards', 'index');
    // Route::get('user/add_user', 'add_pengguna');
    // Route::get('user/user_save', 'store');
    // Route::get('user/user-delete/{id}', 'delete');
});

Route::controller(PenggunaController::class)->group(function () {
    Route::get('user/data_user', 'index');
    Route::get('user/add_user', 'add_pengguna');
    Route::get('user/user_save', 'store');
    Route::get('user/user-delete/{id}', 'delete');
});

Route::controller(RuanganController::class)->group(function () {
    Route::get('ruangan/data_ruangan', 'index');
    Route::get('ruangan/add_ruangan', 'create');
    Route::get('ruangan/ruangan_save', 'store');
    Route::get('ruangan/ruangan-delete/{id}', 'delete');
});