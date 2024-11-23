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


// RUTAS DE MASCOTAS
Route::get('/mascotas',[MascotaController::class,'index']);
Route::get('/mascotas/create',[MascotaController::class,'create']);
Route::post('/mascotas',[MascotaController::class,'store'])->name('mascotas.store');

Route::get('/mascotas/{mascota}/edit',[MascotaController::class,'edit'])->name('mascotas.edit');
Route::put('/mascotas/{mascota}',[MascotaController::class,'update'])->name('mascotas.update');

Route::get('/mascotas/{mascota}/delete',[MascotaController::class,'delete'])->name('mascotas.delete');
Route::delete('/mascotas/{mascota}',[MascotaController::class,'destroy'])->name('mascotas.destroy');

//RUTAS DE MEDICAMENTOS
Route::get('/medicamentos',[MedicamentoController::class,'index']);
Route::get('/medicamentos/create',[MedicamentoController::class,'create']);
Route::post('/medicamentos',[MedicamentoController::class,'store'])->name('medicamentos.store');

Route::get('/medicamentos/{medicamento}/edit',[MedicamentoController::class,'edit'])->name('medicamentos.edit');
Route::put('/medicamentos/{medicamento}',[MedicamentoController::class,'update'])->name('medicamentos.update');

Route::get('/medicamentos/{medicamento}/delete',[MedicamentoController::class,'delete'])->name('medicamentos.delete');
Route::delete('/medicamentos/{medicamento}',[MedicamentoController::class,'destroy'])->name('medicamentos.destroy');

//RUTAS DE PROPIETARIOS
Route::get('/propietarios',[PropietarioController::class,'index']);
Route::get('/propietarios/create',[PropietarioController::class,'create']);
Route::post('/propietarios',[PropietarioController::class,'store'])->name('propietarios.store');

Route::get('/propietarios/{propietario}/edit',[PropietarioController::class,'edit'])->name('propietarios.edit');
Route::put('/propietarios/{propietario}',[PropietarioController::class,'update'])->name('propietarios.update');

Route::get('/propietarios/{propietario}/delete',[PropietarioController::class,'delete'])->name('propietarios.delete');
Route::delete('/propietarios/{propietario}',[PropietarioController::class,'destroy'])->name('propietarios.destroy');

//RUTAS DE VETERINARIOS
Route::get('/veterinarios',[VeterinarioController::class,'index']);
Route::get('/veterinarios/create',[VeterinarioController::class,'create']);
Route::post('/veterinarios',[VeterinarioController::class,'store'])->name('veterinarios.store');

Route::get('/veterinarios/{veterinario}/edit',[VeterinarioController::class,'edit'])->name('veterinarios.edit');
Route::put('/veterinarios/{veterinario}',[VeterinarioController::class,'update'])->name('veterinarios.update');

Route::get('/veterinarios/{veterinario}/delete',[VeterinarioController::class,'delete'])->name('veterinarios.delete');
Route::delete('/veterinarios/{veterinario}',[VeterinarioController::class,'destroy'])->name('veterinarios.destroy');
