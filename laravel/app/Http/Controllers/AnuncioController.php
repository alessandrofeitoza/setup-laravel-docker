<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Anuncio;

class AnuncioController extends Controller
{
    public function index(): mixed
    {
        return view('anuncio.list', [
            'anuncios' => Anuncio::all()
        ]); 
    }
}

// php artisan migrate
