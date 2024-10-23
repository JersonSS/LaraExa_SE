<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MascotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/villa/home',[HomeController::class,'home_GET'])->name('route-home');
Route::get('/villa/about',[HomeController::class,'about_GET'])->name('route-about');
Route::get('/villa/contact',[HomeController::class,'contact_GET'])->name('route-contact');

Route::get('/mascota',[MascotaController::class,'mascota_GET'])->name('route-mascota');
Route::get('/mascota/dueño',[MascotaController::class,'dato_GET'])->name('route-dato');
Route::get('/mascota/registro',[MascotaController::class,'registro_GET'])->name('route-registro');
Route::get('/mascota/editar',[MascotaController::class,'editar_GET'])->name('route-editar');


