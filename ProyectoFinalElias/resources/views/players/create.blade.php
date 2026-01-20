@extends('layout.layout')



@section('title')
    formulario
@endsection

@section('content')

<form action="{{route('players.store')}}" method="post">

    @csrf

    <label for="name">Nombrer</label>
    <input type="text" name="name">

    <label for="twitter">twitter</label>
    <input type="text" name="twitter">

    <label for="instagram">Instagram</label>
    <input type="text" name="instagram">

     <label for="twitch">Twitch</label>
    <input type="text" name="twitch">

     <label for="photo">Photo</label>
    <input type="text" name="photo">

     <label for="visible">Visible</label>
    <input type="text" name="visible">

    <input type="submit" value="Guardar">



</form>












   </form>
@endsection
