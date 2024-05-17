@extends('_templates/blank')

@section('content')

@if ($errors) 
    <div class="alert alert-danger">
        @foreach ($errors as $field => $error) 
            <strong>{{ $field }}: </strong> {{ $error[0] }}
            <br>
        @endforeach
    </div>
@endif

<form action="" method="post">
    @csrf
    <input name="name" placeholder="Nome" type="text" class="form-control">
    <input name="description" placeholder="Descrição" type="text" class="form-control">
    <input name="type" placeholder="Tipo" type="text" class="form-control">
    <input name="price" placeholder="Preço" type="text" class="form-control">
    <input name="quantity" placeholder="Quantidade" type="text" class="form-control">

    <button class="btn btn-primary">PRONTO</button>
</form>

@endsection()
