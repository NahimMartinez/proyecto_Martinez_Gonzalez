<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class SobreNosotros extends Controller
{
    public function index()
    {
        // Nota: CodeIgniter buscará primero "sobreNosotros.php" antes que "sobreNosotros.html"
        return view('sobreNosotros');
    }
}