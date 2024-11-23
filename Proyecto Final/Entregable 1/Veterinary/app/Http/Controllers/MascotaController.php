<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;

class MascotaController extends Controller
{
    public function index_GET() {
        $listaMascotas = Mascota::all();
        return view('Mascota.indexM',compact('listaMascotas'));
    }
}
