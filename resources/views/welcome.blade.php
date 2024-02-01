@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div id="search-container" class="col-md-12 pb-5">
    <h1>Busque um chamado</h1>
    <form action="/" method="GET">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
        <button type="submit" class="btn btn-primary mt-4">Pesquisar</button>
    </form>
</div>

@endsection
