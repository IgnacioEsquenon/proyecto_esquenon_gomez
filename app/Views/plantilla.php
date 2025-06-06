<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demov</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin="">
    <link rel="stylesheet" href=<?php echo base_url('assets/css/miestilo.css')?>>
  </head>
  <body> 
  <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Plug-It (iria el logo aca)</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catalogo
          </a>
          <ul class="dropdown-menu bg-secondary bg-gradient"> 
            <p class="tit-dropmenu">Busca por Dispositivo</p>
            <li><a class="dropdown-item" href="#">PC</a></li>
            <li><a class="dropdown-item" href="#">Celulares</a></li>
            <li><hr class="dropdown-divider"></li> 
            <p class="tit-dropmenu">Busca por Interes</p>
            <li><a class="dropdown-item" href="#">Trabajo</a></li>
            <li><a class="dropdown-item" href="#">Gaming</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Comercialización</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Terminos y Condiciones</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
    <br>
  <div class="container">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum illo velit deserunt sed optio expedita quam reiciendis molestias, iste error! Impedit magni ex, eos quae molestias iste odit veritatis quidem.</p> 
    
</div> 
<div id="carouselExampleControls" class="carousel slide justify-content-center" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/algo2.jpg')?>" class="d-block w-100 img-fluid img-slide" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/capy1.jpg')?>" class="d-block w-100 img-fluid img-slide" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/chill3.jpeg')?>" class="d-block w-100 img-fluid img-slide" alt="..." >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<script src=<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>> </script>
  </body> 

  <footer class="bg-body-tertiary text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
      data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © Copyright 2025 - Todos los derechos reservados.
    <a class="text-body" href="#">Plugit.com</a>
  </div>
  <!-- Copyright -->
</footer>
</html>