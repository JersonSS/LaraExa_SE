<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController2 extends Controller
{
    public function welcome2_GET()
    {
        return "<h3>Bienvenido CUSCO - PERÚ</h3>";
    }
}
