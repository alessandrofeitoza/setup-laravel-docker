<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<div class="m-5 p-5">
    <a href="{{ route('anuncios.create') }}">Adicionar novo</a>
</div>

<table class="table table-hover table-striped">
    <thead class="table-dark">
        <tr>
            <th>#ID</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($anuncios as $cada)
            <tr>
                <td>{{ $cada->id }}</td>
                <td> {{ $cada->titulo }} </td>
                <td>{{ $cada->descricao }}</td>
                <td>
                    <a class="btn btn-outline-warning" href="{{ route('anuncios.edit', ['anuncio' => $cada->id]) }}">Editar</a>


                    <form 
                        style="display: inline;"
                        action="{{ route('anuncios.destroy', $cada->id) }}" 
                        method="POST"
                        onsubmit="return confirm('Tem certeza que deseja excluir este anúncio?')"
                    >
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-outline-danger">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>