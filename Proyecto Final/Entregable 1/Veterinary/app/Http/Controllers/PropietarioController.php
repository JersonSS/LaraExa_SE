<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    public function index_GET() {
        $listaPropietarios = Propietario::all();
        return view('Propietario.indexP',compact('listaPropietarios'));
    }
}
