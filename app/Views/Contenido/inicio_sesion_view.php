<link rel="stylesheet" href="<?php echo base_url('assets/css/registro_style.css') ?>">

<section class="registro fade-scroll">
    <div>
        <h2 class="titulo-seccion">Inicio de Sesión</h2>

        <?php helper('form'); ?>
        <?php echo form_open('Ingreso') ?>
            <?php if (session('error')): ?>
                <div class="alert alert-danger">
                    <?= session('error') ?>
                </div>
            <?php endif; ?>        

            <div class="form-group mt-2">
                <label for="mail">Ingrese Email: </label>
                <?php echo form_input(['name' => 'mail', 'id' => 'mail', 'type' => 'text', 'value' => set_value('mail')]); ?>
            </div>

            <div class="form-group mt-2">
                <label for="pass">Ingrese Contraseña: </label>
                <?php echo form_input(['name' => 'pass', 'id' => 'pass', 'type' => 'password', 'value' => set_value('pass')]); ?>
            </div>

            <?php echo form_submit('Ingresar', 'Ingresar', "class='btn btn-success mt-3'") ?>
        <?php echo form_close(); ?>

        <?php if(session()->getFlashdata('msg')) : ?> 
            <div class= "alert alert-success">
                <?= session()->getFlashdata('msg') ?>
        </div>
            <?php endif; ?>

    </div>
</section>