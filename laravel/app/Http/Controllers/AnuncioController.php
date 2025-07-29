<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Anuncio;

class AnuncioController extends Controller
{
    public function index(): mixed
    {
        return Anuncio::all(); // SELECT * FROM anuncios;
    }
}

// php artisan migrate
