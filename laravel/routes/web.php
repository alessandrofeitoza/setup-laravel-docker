<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnuncioController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/anuncios', AnuncioController::class);
