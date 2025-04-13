<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Principal(): string
    {
        return view('plantillas/header_view.php').view('Contenido/inicio_view.php').view('plantillas/footer_view.php');
    } 

    public function quienes_somos(): string
    {
        return view('plantillas/header_view.php').view('Contenido/quienes_somos_view.php').view('plantillas/footer_view.php');
    } 

    public function ter_y_cond(): string
    {
        return view('plantillas/header_view.php').view('Contenido/ter_y_cond_view.php').view('plantillas/footer_view.php');
    }
}
