<?php
//paquete controller
namespace App\Http\Controllers;

//libreria
use App\Http\Controllers\Controller;

//Clase Controller
Class HomeController1 extends Controller
{
    public function welcome1_GET()
    {
        return "<h3>Welcome LIMA-PERU</h3>";
    }

}
