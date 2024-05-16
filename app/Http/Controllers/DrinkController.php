<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class DrinkController
{
    public function listAll(): mixed
    {
        $drink = new class {
            public string $name = 'Ypioca';
            public string $type = 'Cachaça';

            public function getName(): string
            {
                return $this->name;
            }
        };

        $dados = [
            $drink,
            $drink,
        ];
        
        return view('drink/listAll', [
            'data' => $dados,
        ]);
    }

    public function add(): void
    {
        echo "Novo";
    }

    public function delete(string $id): void
    {
        echo "Excluindo {$id}";
    }

    public function edit(string $id): void
    {
        echo "Editando {$id}";
    }
}