<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index_GET()
    {
        $baraja = Producto::all();
        return view('productos.index',compact('baraja'));
    }
}
