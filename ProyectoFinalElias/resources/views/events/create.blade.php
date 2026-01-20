@extends('layout.layout');

@section('title')
    Eventos
@endsection

@section('content')
    <form action="{{ route('events.store') }}" method="post">
        @csrf


        <label for="name">Nombre:</label>
        <input type="text" name="name">

        <label for="description">Descripción</label>
        <input type="text" name="description">

        <label for="location">Ubicación:</label>
        <input type="text" name="location">

        <label for="map">Mapa:</label>
        <input type="text" name="map">

        <label for="date">Fecha:</label>
        <input type="date" name="date">

        <label for="hour">Hora:</label>
        <input type="Time" name="hour">

        <label for="type">Tipo:</label>
        <input type="text" name="type">

        <label for="tags">Tags:</label>
        <input type="text" name="tags">

        <label for="visible">Visible:</label>
        <input type="boolean" name="visible">


        <input type="submit" value="Guardar">



    </form>
@endsection
