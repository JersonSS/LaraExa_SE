<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MascotaController extends Controller
{
      public function mascota_GET()
    {
        return view('Mascota/mascota');
    }

    public function dato_GET()
    {
        return view('Mascota/dato');
    }

    public function registro_GET()
    {
        return view('Mascota/registro');
    }

    public function editar_GET()
    {
        return view('Mascota/editar');
    }

}
