<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\HomeController2;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;

Route::get('/', function ()
{
    return view('welcome');
});


Route::get('senati/index', function ()
{
    return "<h3> Hello World with PHP laravel</h3>";
});

Route::get('senati/clientes/{nombre}', function ($nombre)
{
    return "<h3> Hola, Bienvenido $nombre</h3>";
});

Route::get('senati/producto/{descuento?}', function ($descuento=10)
// el /{descuento?} si lleva el signo "?" buscara si la variable tiene un valor asignado como en este caso $descuento =10, pero si se añade un valor en la ruta entonces agarrara ese valor
{
    return "<h3> Felicidades su descuento es de $descuento%</h3>";
});

Route::get('senati/restaurante/{consumo}', function ($consumo)
{
    if ($consumo >=100)
    {
        return "<h3>su descuento es del 30%</h3>";
    }
    else {
        return "<h3> su descuento es del 20%</h3>";
    }
});

Route::get('senati/numero/{numero}', function ($numero)
{
    if ($numero%2==0)
    {
        return "<h3>El numero es PAR</h3>";
    }
    else {
        return "<h3>El numero es IMPAR</h3>";
    }
});

Route::get('senati/welcome1',[HomeController1::class,'welcome1_GET']);

Route::get('senati/welcome2',[HomeController2::class,'welcome2_GET']);


Route::get('/villa/home',[HomeController::class,'home_GET']);
Route::get('/cliente/index',[ClienteController::class,'index_GET']);
Route::get('/cliente/create',[ClienteController::class,'create_GET']);
Route::get('/cliente/show/{nombre}',[ClienteController::class,'show_GET']);

Route::get('/cliente/data/{nombre}',[ClienteController::class,'nombre_GET']);
