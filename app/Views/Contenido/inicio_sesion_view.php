<link rel="stylesheet" href="<?php echo base_url('assets/css/registro_style.css') ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/registro_style.css') ?>">

<section class="registro fade-scroll">
    <div>
        <h2 class="titulo-seccion">Inicio de Sesión</h2>
        <form action="ruta_al_servidor" method="post">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="contra">Contraseña:</label>
            <input type="password" name="contra" id="contra" required>

            <input type="submit" value="Ingresar">
        </form>
    </div>
</section>