@extends('layout.layout')

@section('content')
    @foreach ($characters as $character)
        <h3> <a href="{{ route('character.show',$character->id) }}">{{ $character->name }}</a></h3>
    @endforeach
@endsection
