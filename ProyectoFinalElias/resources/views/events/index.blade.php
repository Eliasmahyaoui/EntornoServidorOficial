@extends('layout.layout')

@section('title')
    Eventos
@endsection

@section('content')
    <h1>Mostrara una lista de próximos eventos</h1>
    <h2>{{ $evento->name }}</h2>

    <p>{{ $evento->description }}</p>

    <p>

        {{ $evento->date }} - {{ $evento->hour }} <br>
        {{ $evento->location }} <br>
        {{ $evento->type }}
    </p>


    <br>
    <!--Enlaces para modificar y eliminar el evento SOLO LOGUEADO-ADMIN!-->
    <a href="{{ route('events.edit') }}">Modificar Evento</a>
    <a href="{{ route('events.destroy') }}">Eliminar eventos</a>
    <br>
    <!--Enlaces para marcar me gusta o borrar el me gusta SOLO LOS LOGUEADOS!-->
    <a href="">Marcar me gusta </a>
    <a href="">Borrar me gusta</a>
@endsection
