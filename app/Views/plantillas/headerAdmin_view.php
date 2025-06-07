
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titulo ?></title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/miestilo.css') ?>">
  </head>
  <body class="bg-secondary">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url('backend/admin/dashboard') ?>">
          <img src="<?= base_url('assets/img/logo_sinfondo.png') ?>" alt="logo" class="logo_nav">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="adminNavbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="<?= base_url('backend/admin/listar_productos') ?>"><i class="fa fa-list"></i> Listar productos</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('altaProductos') ?>"><i class="fa fa-plus"></i> Agregar producto</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('backend/admin/modificar_producto') ?>"><i class="fa fa-edit"></i> Modificar producto</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('backend/admin/eliminar_producto') ?>"><i class="fa fa-trash"></i> Eliminar producto</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('backend/admin/listado_productos') ?>"><i class="fa fa-list"></i> Lista de Productos</a></li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="<?= base_url('cerrar_sesion') ?>"><i class="fa fa-sign-out-alt"></i> Cerrar sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
