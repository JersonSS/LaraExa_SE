<?php

use App\Http\Controllers\MascotaController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\VeterinarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',function() {
    return view('index');
});

Route::get('/mascotas',[MascotaController::class,'index_GET']);
Route::get('/medicamentos',[MedicamentoController::class,'index_GET']);
Route::get('/propietarios',[PropietarioController::class,'index_GET']);
Route::get('/veterinarios',[VeterinarioController::class,'index_GET']);
