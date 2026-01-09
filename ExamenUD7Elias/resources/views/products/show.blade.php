@extends('layout.layout')

@section('content')

<p>Nombre: {{$product->name}}</p>
<p>Marca: {{$product->brand}}</p>
<p>Descripcion: {{$product->description}}</p>
<p>Precio: {{$product->price}}</p>
<p>Stock: {{$product->stock}}</p>
<p>Disponible: {{$product->disponible}}</p>
<p>Imagen: {{$product->image}}</p>
@endsection
