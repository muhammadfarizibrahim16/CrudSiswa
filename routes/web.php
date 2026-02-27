<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::resource('siswa', SiswaController::class);

Route::get('/', function () {
    return view('welcome');
});
