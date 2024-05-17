<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Drink;
use Illuminate\Support\Facades\Validator;

class DrinkController
{
    public function listAll(): mixed
    {
        // $dados = DB::select('SELECT * FROM drinks');
        $dados = Drink::all();

        return view('drink/listAll', [
            'data' => $dados,
        ]);
    }

    public function add(Request $request): mixed
    {
        //TODO: fazer do jeito certo
        if ($_POST) {
            $validated = Validator::make($request->all(), [
                'name' => 'required',
                'price' => 'required|decimal:2',
                'quantity' => 'required',
            ]);


            if ($validated->fails()) {
                return view('drink.add', [
                    'errors' => $validated->errors()->getMessages()
                ]);
            }

            $drink = new Drink();
            // $drink->fill($_POST); //isso é perigoso

            $drink->name = $request->input('name');
            $drink->type = $request->input('type');
            $drink->price = $request->input('price');
            $drink->description = $request->input('description');
            $drink->quantity = $request->input('quantity');

            $drink->save();

            return redirect('/bebidas');
        }

        return view('drink.add');
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