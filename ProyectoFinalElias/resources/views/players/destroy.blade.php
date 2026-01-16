<form action="{{route('players.destroy', $player)}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Eliminar">
</form>
