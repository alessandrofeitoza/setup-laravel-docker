<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<form action="{{ route('anuncios.update', ['anuncio' => $anuncio->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input 
            type="text" 
            class="form-control @error('titulo') is-invalid @enderror" 
            id="titulo" 
            name="titulo" 
            value="{{ $anuncio->titulo }}"
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
        >{{ $anuncio->descricao }}</textarea>
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
            value="{{ $anuncio->preco }}"
        >
        @error('preco')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        Salvar
    </button>
</form>
