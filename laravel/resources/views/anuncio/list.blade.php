<table border="1">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Titulo</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($anuncios as $cada)
            <tr>
                <td>{{ $cada->id }}</td>
                <td> {{ $cada->titulo }} </td>
                <td>{{ $cada->descricao }}</td>
            </tr>
        @endforeach
    </tbody>
</table>