<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <a href="{{route('subjects.index')}}">Principal</a>
        <a href="{{route('subjects.show',33)}}">Ver asignaturas</a>
        <a href="{{route('subjects.show',33)}}">Ver asignaturas 33</a>
        <a href="{{route('subjects.create')}}">Añadir asignaturas</a>

        <a href="{{route('anime.index')}}">Anime</a>
        <a href="{{route('character.index')}}">Character</a>
    </nav>
    @yield('content')

    <footer>
        <a href="cookies">Politica de cookies</a>
        <a href="privacy">Privacidad</a>
    </footer>
</body>
</html>
