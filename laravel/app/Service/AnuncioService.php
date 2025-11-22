<?php

declare(strict_types=1);

namespace App\Service;

use App\Models\Anuncio;

class AnuncioService
{
    
    public function findAll(): mixed
    {
        return Anuncio::all();
    }

    public function remove(Anuncio $anuncio): void 
    {   
        $anuncio->delete();
    }

    public function save(Anuncio $anuncio): Anuncio
    {
        //log

        $anuncio->save();

        return $anuncio;
    }
}