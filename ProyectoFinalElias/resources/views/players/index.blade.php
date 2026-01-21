@extends('layout.layout');

@section('title')
    Players
@endsection


@section('content')
    <h1>Jugadores:</h1>

    @forelse ($players as $player )

            <p>{{$player->}}</p>
            <p></p>


    @empty

    @endforelse



@endsection




