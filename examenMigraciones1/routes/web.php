<?php

use App\Http\Controllers\StudioController;
use Illuminate\Support\Facades\Route;

//Ruta normal /generica
Route::get('/', function () {
    return view('index');
});

Route::get('inicio', function () {
    return view('peliculas.index');
});






//rutas de varios recursos suelen ser para lo que tengan que ver con tablas CRUD en este caso SI

Route::resource('studio', StudioController::class);


