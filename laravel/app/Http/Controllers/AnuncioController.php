<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Http\Request;
use App\Service\AnuncioService;

class AnuncioController extends Controller
{
    public function __construct(
        private AnuncioService $anuncioService
    ) {
    }

    public function index(): mixed
    {
        return view('anuncio.list', [
            'anuncios' => $this->anuncioService->findAll()
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

        $anuncio = new Anuncio($dados);

        $this->anuncioService->save($anuncio);

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

        $anuncio->fill($dados);

        $this->anuncioService->save($anuncio);

        return redirect()
            ->route('anuncios.index')
            ->with('success', 'anuncio atualizado com sucesso!');
    }

    public function destroy(Anuncio $anuncio)
    {
        $this->anuncioService->remove($anuncio);

        return redirect()
            ->route('anuncios.index')
            ->with('success', 'anuncio removido com sucesso!');
    }
        
}

