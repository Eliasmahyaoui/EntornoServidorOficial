<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\SubjectsController;
use Illuminate\Support\Facades\Route;


//Controlador de varias  acciones
Route::get('/', [indexController::class, 'index']);

Route::get('cookies', [LegalController::class,'cookies'])->name('cookies');
Route::get('privacy', [LegalController::class,'privacy'])->name('privacy');


//Controlador de tipo recurso
Route::resource('subjects', SubjectsController::class)->except('edit','update');

Route::resource('Studio', StudioController::class);
Route::resource('Anime', AnimeController::class);
Route::resource('Character', CharacterController::class);



