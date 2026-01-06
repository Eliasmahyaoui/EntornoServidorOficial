@extends('layout.layout')

@section('title')
@endsection

@section('content')

    @foreach ($characters as $character)
        <h3><a href="{{route('character.show',$character->id)}}">{{$character->name}}</a></h3>
        <h3>{{$character->name }}</h3>
    @endforeach
@endsection
