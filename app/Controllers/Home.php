<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('principal.html');
    }
    public function sobreNosotros(): string
    {
        return view('sobreNosotros.html');
    }
    
}
