<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    public function index(): mixed
    {
        return view('anuncio.list', [
            'anuncios' => Anuncio::all()
        ]); 
    }

    public function create(): mixed
    {
        return view('anuncio.add'); 
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descricao' => ['nullable', 'string'],
            'preco' => ['required', 'numeric', 'min:0'],
        ]);

        $anuncio = Anuncio::create($dados);

        return redirect()
            ->route('anuncios.index')
            ->with('success', 'anuncio criado com sucesso!');
    }

    public function edit(Anuncio $anuncio)
    {
        return view('anuncio.edit', compact('anuncio'));
    }

    public function update(Request $request, Anuncio $anuncio)
    {
        $dados = $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descricao' => ['nullable', 'string'],
            'preco' => ['required', 'numeric', 'min:0'],
        ]);

        $anuncio->update($dados);

        return redirect()
            ->route('anuncios.index')
            ->with('success', 'anuncio atualizado com sucesso!');
    }

    public function destroy(Anuncio $anuncio)
    {
        $anuncio->delete();

        return redirect()
            ->route('anuncios.index')
            ->with('success', 'anuncio removido com sucesso!');
    }
        
}

