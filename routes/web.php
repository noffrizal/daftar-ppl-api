<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard.index');
});

Route::get('/peserta/daftar', function () {
    return view('dashboard.peserta.daftar');
})->name('peserta.daftar');

Route::get('/peserta/kelompok', function () {
    return view('dashboard.peserta.kelompok');
})->name('peserta.kelompok');
