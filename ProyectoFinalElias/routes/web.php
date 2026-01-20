<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DondeEstamosController;
use App\Http\Controllers\StoreController;

//RUTAS DE SOLA UNA ACCION
route::get('/', IndexController::class)->name('Inicio');
route::get('dondeEstamos', DondeEstamosController::class)->name('dondeEstamos');
route::get('tienda', StoreController::class)->name('tienda');




//RuTAS DE VARIOS RECURSOS
Route::resource('events', EventController::class);
Route::resource('players', PlayerController::class);
Route::resource('contacts', ContactController::class);


//ESTAS RUTAS SE PONEN ASI CUANDO HACES UN CONTROLADOR NORMAL PERO TIENES QUE ESPECIFICARLOS
Route::get('legal/privacidad', [LegalController::class, 'privacidad'])->name('legal.privacidad');
Route::get('legal/cookies', [LegalController::class, 'cookies'])->name('legal.cookies');
Route::get('legal/contacto', [LegalController::class, 'contacto'])->name('legal.contacto');
