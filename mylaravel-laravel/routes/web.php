<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

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



Route::get('/login', function(){
    return view('login');
});

Route::get('/', function(){
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/ofice', function(){
    return view('ofice');
});

Route::get('/achv', function(){
    return view('achv');
});

Route::get('/staff', [StaffController::class,'index']);

Route::get('/event',[EventController::class,'__invoke']);

// Route::get('/pesan', function(){
//     return view('pesan');
// });
Route::get('/pesan', [PemesananController::class, 'create']);
Route::post('/pesan',[PemesananController::class, 'store']);
Route::delete('/pesan', [PemesananController::class, 'destroy']);

// Route::post('/pemesanan', [PemesananController::class, 'create']);

// Route::post('/pemesanan', [PemesananController::class, 'store']);

Route::get('/tiket', [TiketController::class, 'index']);
Route::post('/tiket', [TiketController::class, 'store']);
Route::delete('/tiket', [TiketController::class, 'destroy']);

Route::get('/bayar', [PembayaranController::class, 'index']);
Route::post('/bayar', [PembayaranController::class, 'store']);
Route::delete('/bayar', [PembayaranController::class, 'destroy']);


