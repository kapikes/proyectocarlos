<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class miControlador extends Controller
{
    //Aquí metemos TODOS los controladores....
    
    public function index()
    {
        return view("index");
    }

    public function galeria()
    {
        return view("galeria");
    }

    public function artistas()
    {
        return view("artistas");
    }
    public function contacto()
    {
        return view("contacto");
    }
    public function dondeEstamos()
    {
        return view("dondeEstamos");
    }
    public function enQueConsiste()
    {
        return view("enQueConsiste");
    }
    public function sofia()
    {
        return view("sofia");
    }
    public function sofiaFotos()
    {
        return view("sofiaFotos");
    }
    public function marina()
    {
        return view("marina");
    }
    public function marinaFotos()
    {
        return view("marinaFotos");
    }
    public function carlos()
    {
        return view("carlos");
    }
    public function carlosFotos()
    {
        return view("carlosFotos");
    }
    public function equipo()
    {
        return view("equipo");
    }
}
