<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view("header");
        echo view("navbar");
        echo view("principal");
        echo view("footer");
    }
    public function sobre_Nosotros()
    {
        echo view("header");
        echo view("navbar");
        echo view("sobreNosotros");
        echo view("footer");
    }

    public function term_Y_Condiciones(): void
    {
        echo view("header");
        echo view("navbar");
        echo view("termYCondiciones");
        echo view("footer");
    }

    public function a_comercializacion(): void
    {
        echo view("header");
        echo view("navbar");
        echo view("comercializacion");
        echo view("footer");
    }

    public function a_contacto(): void
    {
        echo view("header");
        echo view("navbar");
        echo view("contacto");
        echo view("footer");
    }
    
}
