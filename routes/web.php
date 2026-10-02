<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', [LaporanController::class, 'form'])
    ->name('laporan.form');

Route::post('/laporan/kirim', [LaporanController::class, 'kirim'])
    ->name('laporan.kirim');

Route::get('/laporan', [LaporanController::class, 'daftar'])
    ->name('laporan.daftar');