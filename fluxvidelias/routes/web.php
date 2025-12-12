<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LegalsController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\RickMortyController;
use Illuminate\Support\Facades\Route;

//Ruta  de una accion
Route::get('/', IndexController::class)->name('inicio');


//Ruta normal
Route::get('getCharacter', [RickMortyController::class,'getCharacter'])->name('getCharacter');


//Ruta de tipo recurso
Route::resource('actors',ActorController::class);

//Ruta de varias acciones
Route::get('faq', [LegalsController::class,'faq'])->name('faq');
Route::get('cookies', [LegalsController::class,'cookies'])->name('cookies');



//Ruta de tipo recurso
Route::resource('movies',MovieController::class);

Route::resource('studios', StudioController::class);
//Route::get('animes/addslug', [AnimeController::class, 'addSlug']);
Route::resource('animes', AnimeController::class);
Route::resource('characters', CharacterController::class);


