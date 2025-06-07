<link rel="stylesheet" href="<?php echo base_url('assets/css/comercializacion_style.css')?>">

<section class="comercializacion fade-scroll">
    <h2 class="Titulo">Perfil del Usuario</h2>

    <div>
        <h2 class="titulo-seccion">Datos Personales</h2>
        <ul class="lista-contenido">
            <li class="item-principal">
                <span class="titulo-item"><i class="fas fa-user fa-icon"></i> Apellido:</span>
                <span class="descripcion-item"><?php echo session()->get('apellido'); ?></span>
            </li>

            <li class="item-principal">
                <span class="titulo-item"><i class="fas fa-user fa-icon"></i> Nombre:</span>
                <span class="descripcion-item"><?php echo session()->get('nombre'); ?></span>
            </li>

            <li class="item-principal">
                <span class="titulo-item"><i class="fas fa-envelope fa-icon"></i> Email:</span>
                <span class="descripcion-item"><?php echo session()->get('mail'); ?></span>
            </li>
        </ul>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>