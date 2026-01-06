@extends('layout.layout')


@section('title')

@endsection

@section('content')
<h3>{{$character->name}}</h3>
<p>ID: {{$character->id}}</p>
<p>Año: {{$character->age}}</p>
<p>Genero: {{$character->gender}}</p>
<p>Rol: {{$character->role}}</p>
<p>Descripcion: {{$character->description}}</p>

@endsection


