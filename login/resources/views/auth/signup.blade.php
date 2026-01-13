<form action="{{ route('signup') }}" method="post">
    @csrf
    <h2>REGISTRATE</h2>
    <label for="username">Nombre de usuario:</label><br>
    <input type="text" name="username" id="username" value="{{ old('username') }}"> <br>
    @error('username')
        <br>Error:{{ $message }}
    @enderror
    <label for="name">Nombre completo:</label><br>
    <input type="text" name="name" id="name" value="{{ old('name') }}"> <br>

    @error('name')
        <br>Error:{{ $message }}
    @enderror
    <label for="email">Email:</label><br>
    <input type="text" name="email" id="email" value="{{ old('email') }}"> <br>
    @error('email')
        <br>Error:{{ $message }}
    @enderror

    <label for="password">Contraseña</label><br>
    <input type="password" name="password" id="password"> <br>
    @error('password')
        <br>Error:{{ $message }}
    @enderror

    <label for="password_confirmation">Repite la contraseña:</label><br>
    <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('username') }}"> <br>

    @error('password_confirmation')
        <br>Error:{{ $message }}
    @enderror
    <input type="submit" value="Enviar">

</form>
