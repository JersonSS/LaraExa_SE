<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index_GET()
    {
        return view('clientes.index');
    }

    public function create_GET()
    {
        return view('clientes.create');
    }

    public function show_GET($nombre)
    {
        return view('clientes.show',compact("nombre"));
    }

    public function nombre_GET($nombre)
    {
        return view('clientes.page',compact("nombre"));
    }

}
