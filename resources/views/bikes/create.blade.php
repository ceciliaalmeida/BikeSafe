@extends('layout.main')
@section('title', 'Bicicletas')
@section('content')

<h1>Cadastre sua bike: </h1>

<div id="bike-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre sua bike aqui:</h1>
    <form action="/bikes" method="POST">

        {{-- para enviar os dados do formulario para o bb usa o @ csrf --}}

        @csrf

        <div class="form-group">
            <label for="title">Modelo:</label>
            <input type="text" class="form-control" id="model" name="model" placeholder="Modelo da Bike">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição da Bike"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade da Bike cadastrada">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Bike">
    </form>
</div>

<a href="\">Home</a>
@endsection
