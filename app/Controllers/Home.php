<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('plantillas/header_view.php').view('plantillas/inicio_view.php').view('plantillas/footer_view.php');
    }
}
