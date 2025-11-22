@extends('components.layout')

@section('conteudo')
@include('components.actionButton', [
    'href' => route('anuncios.index'),
    'text' => 'Voltar'
])

<form action="{{ route('anuncios.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input 
            type="text" 
            class="form-control @error('titulo') is-invalid @enderror" 
            id="titulo" 
            name="titulo" 
            value="{{ old('titulo') }}"
        >
        @error('titulo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea 
            class="form-control @error('descricao') is-invalid @enderror" 
            id="descricao" 
            name="descricao" 
            rows="4"
        >{{ old('descricao') }}</textarea>
        @error('descricao')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input 
            type="number" 
            step="0.01" 
            class="form-control @error('preco') is-invalid @enderror" 
            id="preco" 
            name="preco" 
            value="{{ old('preco') }}"
        >
        @error('preco')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>
</form>

@endsection