<link rel="stylesheet" href="<?php echo base_url('assets/css/registro_style.css') ?>">

<section class="registro fade-scroll">
    <div>
        <h2 class="titulo-seccion">Formulario de Registro</h2>
        <form action="ruta_al_servidor" method="post">
            <label for="nombre">Nombre de Usuario:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="contra">Contraseña:</label>
            <input type="password" name="contra" id="contra" required>

            <label for="codPostal">Código Postal:</label>
            <input type="number" name="codPostal" id="codPostal" required>

            <label for="calle">Calle:</label>
            <input type="text" name="calle" id="calle" required>

            <label for="numeroCalle">Número de calle:</label>
            <input type="number" name="numeroCalle" id="numeroCalle" required>

            <input type="submit" value="Registrarse">
        </form>
    </div>
</section>