<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembeliController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
})->middleware('auth');

Route::get('/login', function () {
    return view('layouts.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    // manajemen jurusan
    Route::get('/pemesanan', [PemesananController::class, 'index']);
    Route::get('/pemesanan/form', [PemesananController::class, 'create']);
    Route::post('/pemesanan', [PemesananController::class, 'store']);
});