@extends('layout.layout')

@section('content')

    <h3>{{$character->name}}</h3>
    <p>id:{{$character->id}}</p>
    <p>Descripcion: {{$character->description}}</p>
    <p>Año: {{$character->age}}</p>
    <p>Genero: {{$character->gender}}</p>
    <p>Rol: {{$character->role}}</p>

    <a href="{{route('character.index')}}">Volver  a la lista de characters</a>


@endsection
