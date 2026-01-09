
@extends('layout.layout')

@section('content')
    @foreach ($animes as $anime )
        <a href="{{route('anime.show',$anime->id)}}">{{$anime->title}}</a>
        <p>Año: {{$anime->release_year}}</p>
        <p>Ranking: {{$anime->rating}}</p>
        <p>Tiene manga? {{$anime->has_manga}}</p>
    @endforeach

@endsection
