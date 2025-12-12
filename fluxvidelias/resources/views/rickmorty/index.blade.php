@extends('layout.layout')

@section('title')
    titulo
@endsection

@section('content')


@foreach ($characters as $character  )

    {{$character->name}}
     <br>
    <img src="{{$character->image}}"alt="Imagen">


@endforeach







@endsection
