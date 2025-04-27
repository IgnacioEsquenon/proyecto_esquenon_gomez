<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function Principal(): string
    {
        $data['titulo']="Inicio";
        return view('plantillas/header_view.php', $data).view('Contenido/inicio_view.php').view('plantillas/footer_view.php');
    } 

    public function quienes_somos(): string
    {
        $data['titulo']="Quienes Somos";
        return view('plantillas/header_view.php', $data).view('Contenido/quienes_somos_view.php').view('plantillas/footer_view.php');
    } 

    public function catalogo(): string
    {
        $data['titulo']="Catalogo";
        return view('plantillas/header_view.php', $data).view('Contenido/catalogo_view.php').view('plantillas/footer_view.php');
    } 

    public function comercializacion(): string
    {
        $data['titulo']="Comercializacion";
        return view('plantillas/header_view.php', $data).view('Contenido/comercializacion_view.php').view('plantillas/footer_view.php');
    }

    public function ter_y_cond(): string
    {
        $data['titulo']="Terminos y Condiciones";
        return view('plantillas/header_view.php', $data).view('Contenido/ter_y_cond_view.php').view('plantillas/footer_view.php');
    }

    public function contacto(): string
    {
        $data['titulo']="Contacto";
        return view('plantillas/header_view.php', $data).view('Contenido/contacto_view.php').view('plantillas/footer_view.php');
    }

    public function inicio_sesion(): string
    {
        $data['titulo']="Inicio de Sesion";
        return view('plantillas/header_view.php', $data).view('Contenido/inicio_sesion_view.php').view('plantillas/footer_view.php');
    }

    public function registro(): string
    {
        $data['titulo']="Registro";
        return view('plantillas/header_view.php', $data).view('Contenido/registro_view.php').view('plantillas/footer_view.php');
    }
}
