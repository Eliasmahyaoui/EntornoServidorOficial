@extends('layout.layout')



@section('title')
    formulario
@endsection

@section('content')

<form action="{{route('players.store')}}" method="post">

    @csrf

    <label for="name">Nombre del jugador</label>
    <input type="text" name="name">

    <label for="nacionalidad">Nacionalidad</label>
    <input type="text" name="nacinonality">

    <label for="equipo">equipo</label>
    <input type="text" name="equipo">

    <input type="submit" value="Guardar">



</form>












   </form>
@endsection
