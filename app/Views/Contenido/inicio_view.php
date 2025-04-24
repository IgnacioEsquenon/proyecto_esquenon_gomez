
<section class="carrusel fade-scroll">
<div id="carouselExampleControls" class="carousel slide justify-content-center" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>  
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/banner-accesorios-auri.png')?>" class="d-block w-100 img-fluid img-slide" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-auriculares.jpg')?>" class="d-block w-100 img-fluid img-slide" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-accesorios-compu.png')?>" class="d-block w-100 img-fluid img-slide" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-gaming.jpg')?>" class="d-block w-100 img-fluid img-slide" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/banner-accesorios-cel.png')?>" class="d-block w-100 img-fluid img-slide" alt="..." >
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
</section>


<section class="destacados py-5 fade-scroll"> 

<h2 class="text-center">Productos Destacados</h2>
<div class="card-group">
  <div class="card backgroundEffect">
    <img src=<?php echo base_url('assets/img/monitor-samsung.jpg')?> class="card-img-top img-size" alt="...">
    <div class="card-body">
      <h5 class="card-title">Monitor Led Samsung LF27T350 27'' FullHD IPS 75hz Freesync Hdmi Color Negro</h5>
      <p class="card-text">Precio Especial: $340.000 ARS</p>
      <button class="btn btn-success">Mas información</button>
    </div>
  </div>
  <div class="card backgroundEffect">
    <img src=<?php echo base_url('assets/img/kit-gaming-4en1.jpg')?> class="card-img-top img-size" alt="...">
    <div class="card-body">
      <h5 class="card-title">Combo Gaming Retroiluminado Usb Noganet NKB-403 Mouse Teclado Auricular y Pad Full Kit</h5>
      <p class="card-text">Precio Especial: $38.000 ARS</p>
      <button class="btn btn-success">Mas información</button>
    </div>
  </div>
  <div class="card backgroundEffect ">
    <img src=<?php echo base_url('assets/img/control-ps5.jpg')?> class="card-img-top img-size" alt="...">
    <div class="card-body">
      <h5 class="card-title">Control inalámbrico DualSense para PS5 Gray Camouflage</h5>
      <p class="card-text">Precio Especial: $147.000 ARS</p>
      <button class="btn btn-success">Mas información</button>
    </div>
  </div>
  <div class="card backgroundEffect">
    <img src=<?php echo base_url('assets/img/Smart-watch.jpg')?> class="card-img-top img-size " alt="...">
    <div class="card-body">
      <h5 class="card-title">Smart Ring R2 Anillo Inteligente Android/IOS</h5>
      <p class="card-text">Precio Especial: $53.000 ARS</p>
      <button class="btn btn-success">Mas información</button>
    </div>
</div>
<div class="card backgroundEffect">
    <img src= <?php echo base_url('assets/img/Auri-bth.jpg')?> class="card-img-top img-size" alt="...">
    <div class="card-body">
      <h5 class="card-title">Auriculares Vincha Inalámbricos Bluetooth Jbl Tune 520bt Negro </h5>
      <p class="card-text">Precio Especial: $60.000 ARS </p>
      <button class="btn btn-success">Mas información</button>
    </div>
</section>

<section class="py-5 bg-light fade-scroll">
  <div class="container">
    <h3 class="text-center mb-5">Explorá por categoría</h3>
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card text-center shadow-sm category-card h-100">
          <div class="card-body">
            <i class="fa fa-headphones fa-3x mb-3 text-primary"></i>
            <h5 class="card-title">Auriculares</h5>
            <p class="card-text">Calidad de sonido, comodidad y estilo.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center shadow-sm category-card h-100">
          <div class="card-body">
            <i class="fa fa-keyboard fa-3x mb-3 text-success"></i>
            <h5 class="card-title">Teclados</h5>
            <p class="card-text">Mecánicos, inalámbricos, para todos los gustos.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card text-center shadow-sm category-card h-100">
          <div class="card-body">
            <i class="fa fa-mobile-alt fa-3x mb-3 text-danger"></i>
            <h5 class="card-title">Celulares</h5>
            <p class="card-text">Personaliza y protege tu dispositivo movil con estilo y seguridad garantizados.</p>
          </div>
        </div>
      </div> 

      <div class="col-md-4">
        <div class="card text-center shadow-sm category-card h-100">
          <div class="card-body">
            <i class="fa fa-gamepad fa-3x mb-3 text-danger"></i>
            <h5 class="card-title">Gaming</h5>
            <p class="card-text">Juga y divertite como los profesionales.</p>
          </div>
        </div>
      </div> 

      <div class="col-md-4">
        <div class="card text-center shadow-sm category-card h-100">
          <div class="card-body">
            <i class="fa fa-briefcase fa-3x mb-3 text-secondary"></i>
            <h5 class="card-title">Trabajo</h5>
            <p class="card-text">Encontra gadgets y accesorios para facilitar tu trabajo dia a dia.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="newsletter-section py-5 fade-scroll">
  <div class="container text-center text-black">
    <h2 class="mb-3">Suscribite a nuestras novedades</h2>
    <p class="mb-4">Enterate antes que nadie de nuevas promos, lanzamientos y descuentos exclusivos.</p>
    <form class="newsletter-form d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
      <input type="email" class="form-control" placeholder="Ingresá tu correo" required>
      <button type="submit" class="btn btn-success">Suscribirme</button>
    </form>
  </div>
</section>






