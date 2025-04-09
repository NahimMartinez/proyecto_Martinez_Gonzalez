<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('principal');
    }
    public function sobre_Nosotros(): string
    {
        return view('sobreNosotros');
    }
    
}
