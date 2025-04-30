<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): void
    {
        echo view("front/layouts/header");
        echo view("front/layouts/navbar");
        echo view("front/principal");
        echo view("front/layouts/footer");
    }

    public function sobre_Nosotros(): void
    {
        echo view("front/layouts/header");
        echo view("front/layouts/navbar");
        echo view("front/sobreNosotros");
        echo view("front/layouts/footer");
    }

    public function term_Y_Condiciones(): void
    {
        echo view("front/layouts/header");
        echo view("front/layouts/navbar");
        echo view("front/termYCondiciones");
        echo view("front/layouts/footer");
    }

    public function a_comercializacion(): void
    {
        echo view("front/layouts/header");
        echo view("front/layouts/navbar");
        echo view("front/comercializacion");
        echo view("front/layouts/footer");
    }

    public function a_contacto(): void
    {
        echo view("front/layouts/header");
        echo view("front/layouts/navbar");
        echo view("front/contacto");
        echo view("front/layouts/footer");
    }

    public function a_producto(): void
    {
        echo view("front/layouts/header");
        echo view("front/layouts/navbar");
        echo view("front/producto");
        echo view("front/layouts/footer");
    }
}