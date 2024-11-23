<?php

namespace App\Http\Controllers;

use App\Models\Veterinario;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    public function index_GET() {
        $listaVeterinarios = Veterinario::all();
        return view('Veterinario.indexV',compact('listaVeterinarios'));
    }
}
