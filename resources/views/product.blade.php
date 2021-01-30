@extends('layout.main')
@section('title', 'Bicicletas')
@section('content')

<h1>Lista de Bikes roubadas: </h1>

@if($busca != '')
<p>O usuário está buscando por {{ $busca }} </p>
@endif

<a href="\contact">Voltar para contatos de bikes roubadas</a>

@endsection
