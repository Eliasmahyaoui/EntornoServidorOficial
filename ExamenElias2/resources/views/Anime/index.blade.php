@extends('layout.layout')


@section('content')
    @foreach ($animes as $anime)
        <h3><a href="{{route('Anime.show', $anime)}}"></a></h3>
        <h3>Titulo:{{ $anime->title }}</h3>
        <p>Año: {{$anime->release_year }}</p>
        <p>Puntuacion:{{ $anime->rating }}</p>
        <p>Tiene Manga?{{$anime->has_manga }}</p>
    @endforeach
@endsection
