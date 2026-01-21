@extends('layout.layout')

@section('title')
    Eventos
@endsection

@section('content')
    <br>


    @foreach ($events as $event)
        <a href=""></a>
        <p>{{ $event->name }}</p>
        <p>{{ $event->description }}</p>
        <p>{{ $event->location }}</p>
        <p>{{ $event->map }}</p>
        <p>{{ $event->date }}</p>
        <p>{{ $event->hour }}</p>
        <p>{{ $event->type }}</p>
        <p>{{ $event->tags }}</p>
        <p>{{ $event->visible }}</p>

        <!--Enlaces para modificar y eliminar el evento SOLO LOGUEADO-ADMIN!-->
        <!-- EDITAR -->
        <a href="{{ route('events.edit', $event) }}">Modificar evento</a>
        <br>


        <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar evento</button>
        </form>

        <!--Enlaces para marcar me gusta o borrar el me gusta SOLO LOS LOGUEADOS!-->
        <a href="#">Marcar me gusta</a>
        <br>
        <a href="#">Borrar me gusta</a>
    @endforeach
    
@endsection
