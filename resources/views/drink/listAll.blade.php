@extends('_templates/blank')

@section('title', 'Titulo da Pagina')

@section('content')
    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>#ID</th>
                <th>Nome</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }} </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->type }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


