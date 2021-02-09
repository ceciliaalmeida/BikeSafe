@extends('layout.main')
@section('title', $bike->model)
@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/bikes/{{ $bike->image }} " class="img-fluid" alt="{{ $bike->model }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $bike->model }}</h1>

            <p class="bike-city">
                <ion-icon name="location-outline"></ion-icon> {{ $bike->city }}
            </p>
            <p class="bikes-participants">
                <ion-icon name="people-outline"></ion-icon> X participantes
            </p>
            <p class="bike-owner">
                <ion-icon name="star-outline"></ion-icon> Dono do Evento
            </p>

            <a href="#" class="btn btn-primary" id="bike-submit">Foi Vista</a>

        </div>
        <div class="col-md-12" id="description-container">
            <h3>Sobre a Bike:</h3>
            <div class="bike-description"> {{ $bike->description }} </div>
        </div>
    </div>
</div>

@endsection
