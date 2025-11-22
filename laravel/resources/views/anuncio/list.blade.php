@extends('components.layout')

@section('conteudo')

    @include('components.actionButton', [
        'href' => route('anuncios.create'),
        'text' => 'Novo Anuncio'
    ])

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
@endsection