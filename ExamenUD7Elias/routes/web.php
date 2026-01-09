<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


//Controlador tipo recurso
Route::resource('products', ProductsController::class);

//Controlador de varias acciones 
Route::get('/', [IndexController::class, 'index']);
