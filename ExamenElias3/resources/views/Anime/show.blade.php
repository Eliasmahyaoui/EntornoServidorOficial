@extends('layout.layout')

@section('content')

    <h3>{{$anime->title }}</h3>
    <p>{{ $anime->id }}</p>
    <p>{{ $anime->release_year }}</p>
    <p>{{ $anime->episodes }}</p>
    <p>{{ $anime->rating }}</p>
    <p>{{ $anime->synopsis }}</p>

    <a href="{{route('anime.index')}}">Volver a la lista de animes</a>
@endsection
