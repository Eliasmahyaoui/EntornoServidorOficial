<?php

use Illuminate\Support\Facades\Route;

//Ruta normal /generica
Route::get('/', function () {
    return view('index');
});

//rutas de varios recursos suelen ser para lo que tengan que ver con tablas CRUD en este caso SI

