<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @auth
        Bienvenido {{ Auth::user()->name }} -
        <a href="{{ route('users.account') }}">Cuenta</a>
        <a href="{{ route('logout') }}">Salir</a>
    @else

        <a href="{{ route('login') }}">Logueate</a>
        <a href="{{ route('signupForm') }}">Registrate</a>

    @endauth
    @auth
    @if (Auth::user()->rol == 'admin')
        <a href="{{route('users.list')}}">Ver usuarios</a>
    @endif
    @endauth
</body>

</html>
