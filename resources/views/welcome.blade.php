@extends('layout.main')
@section('title', 'Bike Safe')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque uma Bike</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="bikes-container" class="cold-md-12">
    <h2>Demais Bikes cadastradas: </h2>
    <p class="subtitle">Veja as bikes cadastradas</p>
    <div id="cards-container" class="row">
        @foreach($bikes as $bike)
        <div class="card col-md-3">
            <img src="/img/bikes/{{$bike->image}}" alt="{{ $bike-> title }}">
            <div class="card-body">
                <p class="card-date">03/02/2021</p>
                <h5 class="card-title">{{ $bike->model }}</h5>
                <p class="card-participants"> x participantes</p>
                <a href="/bikes/{{ $bike->id}}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>


        @endforeach
    </div>
</div>

@endsection
