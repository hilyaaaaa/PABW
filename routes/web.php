<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/laporbanjir', [LaporBanjirController::class, 'form'])
    ->name('laporbanjir.form');

Route::post('/laporbanjir', [LaporBanjirController::class, 'proses'])
    ->name('laporbanjir.proses');