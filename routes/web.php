<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('/dosen', DosenController::class);
Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('/matakuliah', MatakuliahController::class);