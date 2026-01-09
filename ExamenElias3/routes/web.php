<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\legalsController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\subjectsController;
use Illuminate\Support\Facades\Route;

//Controlador de varias acciones
Route::get('/', [indexController::class, 'index']);
Route::get('cookies', [legalsController::class, 'cookies'])->name('cookies');
Route::get('privacy', [legalsController::class, 'privacy'])->name('privacy');


//Controlador tipo recurso

Route::resource('subjects', subjectsController::class)->except('edit', 'update');

Route::resource('studio', StudioController::class);
Route::resource('anime', AnimeController::class);
Route::resource('character', CharacterController::class);
