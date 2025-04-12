<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plugit 1</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href=<?php echo base_url('assets/css/miestilo.css')?>>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  </head>
  <body> 
  <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=<?php echo base_url("assets/img/logo_pag.png")?> alt="logo" class="logo_nav"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"> <i class="fa fa-home"></i> Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="fa fa-address-card"></i> Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-shopping-cart"></i>Catalogo
          </a>
          <ul class="dropdown-menu bg-secondary bg-gradient"> 
            <p class="tit-dropmenu">Busca por Dispositivo</p>
            <li><a class="dropdown-item" href="#"><i class="fa fa-laptop"></i> PC</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-mobile-phone"></i> Celulares</a></li>
            <li><hr class="dropdown-divider"></li> 
            <p class="tit-dropmenu">Busca por Interes</p>
            <li><a class="dropdown-item" href="#"> <i class="fa fa-briefcase"></i> Trabajo</a></li>
            <li><a class="dropdown-item" href="#"> <i class="fa fa-gamepad"></i> Gaming</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-credit-card-alt"></i>Comercialización</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="fa fa-exclamation-circle"></i> Terminos y Condiciones</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="fa fa-phone"></i> Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="fa fa-shopping-basket"></i> Tienda</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
<br>