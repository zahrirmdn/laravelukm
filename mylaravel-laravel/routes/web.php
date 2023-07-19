<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\LoginController;
use Illuminate\Routing\Routegroup;
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

// Route::get('/logina', function(){
//     return view('logina');
// });

Route::get('/staff', [StaffController::class,'index']);

// Route::get('/event',[EventController::class,'__invoke']);
Route::get('/event',[EventController::class, 'index']);
Route::get('/tambaevent', [EventController::class, 'create']);
Route::post('/tambaevent', [EventController::class, 'store']);
Route::delete('/event/delete', [EventController::class, 'destroy']);
Route::get('/tampildataevent/{id}/edit', [EventController::class, 'edit']);
Route::put('/tampildataevent/{id}', [EventController::class, 'update']);

Route::group(['middleware' => ['auth','CekRole:mahasiswa,admin']], function(){
    Route::get('/pesan', [PemesananController::class, 'create']);
    Route::post('/pesan',[PemesananController::class, 'store']);
    Route::delete('/pesan/delete', [PemesananController::class, 'destroy']);
    Route::get('/tampildatapesan/{id}/edit', [PemesananController::class, 'edit']);
    Route::put('/tampildatapesan/{id}', [PemesananController::class, 'update']);

    Route::get('/tiket', [TiketController::class, 'index']);
    Route::post('/tiket', [TiketController::class, 'store']);
    Route::delete('/tiket/delete', [TiketController::class, 'destroy']);
    Route::get('/tampildatatiket/{id}/edit', [TiketController::class, 'edit']);
    Route::put('/tampildatatiket/{id}', [TiketController::class, 'update']);

    Route::get('/bayar', [PembayaranController::class, 'index']);
    Route::post('/bayar', [PembayaranController::class, 'store']);
    Route::delete('/bayar/delete', [PembayaranController::class, 'destroy']);
    Route::get('/tampildatabayar/{id}/edit', [PembayaranController::class, 'edit']);
    Route::put('/tampildatabayar/{id}', [PembayaranController::class, 'update']);
});


Route::get('register', [RegisController::class, 'create'])->name('register')->middleware('guest');
Route::post('register', [RegisController::class, 'store'])->name('register')->middleware('guest');
// Route::get('registera',[RegisController::class, 'createadmin'])->name('registera');
// Route::post('registera',[RegisController::class, 'storeadmin'])->name('registera');

Route::get('login',[LoginController::class,'create'])->name('login')->middleware('guest');
Route::post('login',[LoginController::class,'store'])->name('login')->middleware('guest');
Route::post('/logout',[LoginController::class, 'logout']);
// Route::get('logina', [LoginController::class, 'createadmin'])->name('logina');
// Route::post('logina', [LoginController::class, 'storeadmin'])->name('logina');


