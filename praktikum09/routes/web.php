<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\Unit_kerjaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/pasien', [AdminController::class, 'index']);
Route::get('/dokter', [AdminController::class, 'index']);
Route::get('/pegawai', [AdminController::class, 'index']);
Route::get('/periksa', [AdminController::class, 'index']);
Route::get('unit_kerja', [AdminController::class, 'index']);






