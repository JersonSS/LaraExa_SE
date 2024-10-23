<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home_GET()
    {
        return view('home');
    }

    public function about_GET()
    {
        return view('about');
    }


    public function contact_GET()
    {
        return view('contact');
    }


}
