<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function() {
    return view("teste");
});

// Route::get('/bebidas', [DrinkController::class, 'listAll']);

Route::prefix('/bebidas')
    ->controller(DrinkController::class)
    ->group(function () {
        Route::get('/', 'listAll');
        Route::any('/adicionar', 'add');
        Route::get('/editar/{id}', 'edit');
        Route::get('/excluir/{id}', 'delete');
    });