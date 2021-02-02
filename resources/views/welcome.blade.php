@extends('layout.main')
@section('title', 'Bike Safe')
@section('content')

@foreach($bikes as $bike)
<p> {{ $bike-> model }} -- {{ $bike-> description }} -- {{ $bike-> city }} </p>
@endforeach

@endsection
