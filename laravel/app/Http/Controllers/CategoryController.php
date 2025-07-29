<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function getAll(): mixed
    {
        $categorias = [
            [
                'id' => 1,
                'nome' => 'Carros suados',
            ],
        ];

        return $categorias;
    }
}
