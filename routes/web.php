<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RfidController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataEspController;
use App\Http\Controllers\DataTempController;
use App\Http\Controllers\ScanningController;
use App\Http\Controllers\StatusDataController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/csrf_token', function () {
    return csrf_token();
});
// Route::post('/data_endpoint', 'DataController@handleData');

Route::controller(DataController::class)->group(function () {
    Route::post('/data_endpoint', 'handleData');
});

// Route::post('/data_endpoint', [DataController::class, 'handleData']);

// Route::get('/ruangan', function () {
//     return view('ruangan.data_ruangan');
// });

// Route::get('/rfid', function () {
//     return view('rfid.data_rfid');
// });

// Route::get('/add_rfid', function () {
//     return view('rfid.add_rfid');
// });

Route::get('/add_user', function () {
    return view('user.add_user');
});



Route::controller(StatusDataController::class)->group(function () {
    Route::post('/status_device', 'status_device');
});

Route::controller(DataTempController::class)->group(function () {
    Route::get('/get_dataID', 'get_dataID');
    Route::post('/data_temp', 'data_temp');
});

Route::controller(ScanningController::class)->group(function () {
    Route::get('/ambil_data', 'ambil_data');
    Route::post('/data_scanning', 'data_scanning');
    Route::post('/status_off', 'ubahStatusoff');
});

Route::controller(RfidController::class)->group(function () {
    Route::get('/rfid', 'index');
    Route::post('/scanning', 'scanning');
    Route::get('/add_rfid', 'add_rfid');
    Route::post('/scan_kartu', 'scan_kartu');
    Route::post('/get_data', 'get_data');
    Route::get('/rfid/store', 'store');
    Route::get('/rfid/rfid-delete/{id}', 'destroy');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/dashboards', 'index');
    Route::get('/get_status_device', 'get_status_device');
    Route::post('/status_pintu', 'updateStatusPintu');
    Route::post('/status_sensorPir', 'status_sensorPir');
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
    Route::post('/get_kode_ruangan', 'get_kode_ruangan');
    Route::get('ruangan/data_ruangan', 'index');
    Route::get('ruangan/add_ruangan', 'create');
    Route::get('ruangan/ruangan_save', 'store');
    Route::get('ruangan/ruangan-delete/{id}', 'destroy');
});
