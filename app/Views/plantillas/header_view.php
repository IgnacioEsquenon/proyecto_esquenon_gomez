<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titulo; ?></title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href=<?php echo base_url('assets/css/miestilo.css')?>>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
  </head>
  <body class ="bg-secondary"> 
  <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href=<?php echo base_url("principal")?>><img src=<?php echo base_url("assets/img/logo_sinfondo.png")?> alt="logo" class="logo_nav"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php if (session()->get('perfil_id') === '2' && session()->get('estado' === true)): ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="<?= base_url('listarProductos') ?>"><i class="fa fa-list"></i> Gestionar productos</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('altaProductos') ?>"><i class="fa fa-plus"></i> Agregar producto</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('verEliminados') ?>"><i class="fa fa-trash"></i> Productos Eliminados</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('listadoProductos') ?>"><i class="fa fa-list"></i> Lista de Productos</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('listadoProductos') ?>"><i class="fa fa-shopping-cart"></i> Registro de Ventas</a></li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item nav-user rounded-pill">
                <a class="nav-link" href="<?= base_url("Perfil") ?>"><i class="fas fa-user-circle me-2"></i> <?php echo session()->get('nombre') ?></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('cerrar_sesion') ?>"><i class="fa fa-sign-out-alt"></i> Cerrar sesión</a></li>
          </ul>
        <?php else: ?>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-icons">
        <li class="nav-item rounded-pill">
          <a class="nav-link active" aria-current="page" href=<?php echo base_url("principal")?>> <i class="fa fa-home"></i><span class ="nav-text">Inicio</span></a>
        </li>
        <li class="nav-item rounded-pill">
          <a class="nav-link" href=<?php echo base_url("quienes_somos")?>> <i class="fa fa-address-card"></i><span class ="nav-text"> Nosotros </span></a>
        </li>
        <li class="nav-item rounded-pill">
          <a class="nav-link" href=<?php echo base_url("listadoProductos")?>><i class="fa fa-shopping-cart"></i> <span class ="nav-text">Catálogo </span></a>
        </li>
        <li class="nav-item rounded-pill">
          <a class="nav-link" href=<?php echo base_url("comercializacion")?>><i class="fa fa-credit-card-alt"></i> <span class ="nav-text">Comercialización </span></a>
        </li>
        <li class="nav-item rounded-pill ">
          <a class="nav-link" href=<?php echo base_url("terminos_y_condiciones")?>> <i class="fa fa-exclamation-circle"></i> <span class ="nav-text">Terminos y Condiciones</span></a>
        </li> 
        <li class="nav-item rounded-pill">
          <a class="nav-link" href=<?php echo base_url("contacto")?>> <i class="fa fa-phone"></i><span class ="nav-text"> Contacto </span></a>
        </li>
      </ul> 
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-icons">
        <?php if (session()->get('perfil_id') === '1' && session()->get('logged_in' === true)): ?>
          <li class="nav-item nav-user rounded-pill">
                <a class="nav-link" href="<?= base_url("ver_carrito") ?>"><i class="fa fa-shopping-cart me-2"></i>Carrito</a>
            </li>
            <li class="nav-item nav-user rounded-pill">
                <a class="nav-link" href="<?= base_url("Perfil") ?>"><i class="fas fa-user-circle me-2"></i> Perfil</a>
            </li>
            <li class="nav-item rounded-pill">
                <a class="nav-link" href="<?= base_url("cerrar_sesion") ?>"><i class="fas fa-sign-out-alt me-2"></i> Cerrar Sesión</a>
            </li>
            <?php else: ?>
              <li class="nav-item nav-user rounded-pill">
                <a class="nav-link " href=<?php echo base_url("inicio_sesion")?>><i class="fa fa-user me-2"></i> Iniciar Sesion</span></a>
              </li>
              <li class="nav-item rounded-pill">
                <a class="nav-link" href=<?php echo base_url("Registro")?>><i class="fa fa-user-plus me-2"></i> Registrarse</span></a>
              </li>      
        <?php endif; ?>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</nav> 

