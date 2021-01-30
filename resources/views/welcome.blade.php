@extends('layout.main')
@section('title', 'Bike Safe')
@section('content')


<h1>Bike Safe</h1>
<pictures src="/public/pictures/banner.jpg" alt="banner">

    <a href="\contact">Contatos</a>
    <br />
    <a href="\product">Produtos</a>

    @if(10 > 5)
    <p>A condição é true </p>
    @endif

    <p>{{ $nome }}</p>

    @if($nome == "Pedro")
    <p>o nome é Pedro</p>

    @elseif( $nome == "Matheus")
    <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e é {{ $profissao }}</p>

    @else
    <p>O nome não é pedro</p>
    @endif

    @for($i=0; $i < count($array); $i++) <p>{{ $array[$i] }} - {{ $i }}</p>
        @if($i == 2)
        <p>O i é =2</p>
        @endif
        @endfor
        @php
        $name = "Cecília";
        echo $name;
        @endphp
        <! -- teste comentário -->

            {{-- comentário do blade não mostra no f12 --}}

            @foreach($bikes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
            @endforeach
            @endsection
