<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\LegalsController;
use App\Http\Controllers\StudioController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

//Ruta normal generica
Route::get('/', function () {
    return view('index');
})->name('inicio');


//Ruta de varias acciones
Route::get('faq', [LegalsController::class, 'faq'])->name('faq');
Route::get('cookies', [LegalsController::class, 'cookies'])->name('cookies');


//Rutas de varios recursos
Route::resource('studio', StudioController::class);
Route::resource('anime', AnimeController::class);
Route::resource('character', CharacterController::class);
