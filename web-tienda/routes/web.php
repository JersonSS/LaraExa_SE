<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos',[ProductoController::class,'index']);

Route::get('/productos/create',[ProductoController::class,'create']);
Route::post('/productos',[ProductoController::class,'store'])->name('productos.store');

Route::get('/productos/{producto}/edit',[ProductoController::class,'edit'])->name('productos.edit');
Route::get('/productos/{producto}',[ProductoController::class,'update'])->name('productos.update');
