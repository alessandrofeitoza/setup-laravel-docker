<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PetsApiController;

Route::get('/pets', [PetsApiController::class, 'getList']);
Route::post('/pets', [PetsApiController::class, 'add']);
