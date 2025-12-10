<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\SpaceController;
use Illuminate\Support\Facades\Route;



//RUTA DE TIPO RECURSO
Route::resource('spaces', SpaceController::class);
Route::resource('clients', ClientsController::class);


//ESTO ES PARA SABER SI ME VA EL PUSHHH Y EL PULL OEOEOEOEOEOEOEE



