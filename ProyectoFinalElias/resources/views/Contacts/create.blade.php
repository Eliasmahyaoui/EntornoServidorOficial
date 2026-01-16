@extends('layout.layout')

@section('title')
    Formulario
@endsection

@section('content')
<h2>FORMULARIO</h2>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        <label for="mensaje">MENSAJE:</label>
        <input type="text" name="mensaje" id="mensaje">
        <br>
    </form>
@endsection
