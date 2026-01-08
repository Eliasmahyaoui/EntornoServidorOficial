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
        <a href="/">Principal</a>
        <a href="{{route('subjects.index')}}">Ver asignaturas</a>
        <a href="{{route('subjects.show',123)}}">Ver asignaturas 123</a>
        <a href="{{route('subjects.create')}}">Añadir asignatura</a>

        <a href="{{route('Anime.index')}}">Ver animes</a>
        <a href="{{route('Character.index')}}">Ver animes</a>


    </nav>

    @yield('content')

    <footer>
        <a href="cookies">Politica de cookies</a>
        <a href="privacy">Privacidad</a>
    </footer>
</body>

</html>
