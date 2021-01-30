@extends('layout.main')
@section('title', 'Product service')
@section('content')

@if($id != null)
<p>Exibindo pordutos id: {{ $id }} </p>
@endif

<a href="/"> Voltar para home</a>

@endsection
