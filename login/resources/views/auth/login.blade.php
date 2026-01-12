<form action="{{route('login')}}" method="post">
    @csrf
    <h2>LOGUEATE</h2>
    <label for="username">Nombre de usuario:</label><br>
    <input type="text" name="username" id="username" value="{{old('username')}}">

     <label for="password">Contraseña:</label><br>
    <input type="password" name="password" id="password"><br>

    <input type="submit" value="Enviar">


</form>
