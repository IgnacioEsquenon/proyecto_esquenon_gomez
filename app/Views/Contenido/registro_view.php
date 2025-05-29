<link rel="stylesheet" href="<?php echo base_url('assets/css/registro_style.css') ?>">


<section class="registro fade-scroll">
    <div>
        <h2 class="titulo-seccion">Formulario de Registro</h2>
        <?php helper('form'); ?>
        <?php echo form_open('registro') ?>
        
            <div class="form-group mt-2">
                <label for="Apellido">Apellido</label>
                <?php echo form_input(['name' => 'apellido', 'id' => 'apellido', 'type' => 'text', 'value' => set_value('apellido')]); ?>
                 <?php if(isset($validation) && $validation->hasError('apellido')): ?>
                    <div class="text-danger"><?= $validation->getError('apellido') ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group mt-2">
                <label for="Nombre">Nombre</label>
                <?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'type' => 'text', 'value' => set_value('nombre')]); ?>
                <?php if(isset($validation) && $validation->hasError('nombre')): ?>
                    <div class="text-danger"><?= $validation->getError('nombre') ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group mt-2">
                <label for="Correo">Correo</label>
                <?php echo form_input(['name' => 'mail', 'id' => 'mail', 'type' => 'email', 'value' => set_value('mail')]); ?>
                <?php if(isset($validation) && $validation->hasError('mail')): ?>
                    <div class="text-danger"><?= $validation->getError('mail') ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group mt-2">
                <label for="pass">Contraseña</label>
                <?php echo form_password(['name' => 'pass', 'id' => 'pass', 'type' => 'password']); ?>
                <?php if(isset($validation) && $validation->hasError('pass')): ?>
                    <div class="text-danger"><?= $validation->getError('pass') ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group mt-2">
                <label for="repass">Repetir contraseña</label>
                <?php echo form_password(['name' => 'repass', 'id' => 'repass', 'type' => 'password']); ?>
                <?php if(isset($validation) && $validation->hasError('repass')): ?>
                    <div class="text-danger"><?= $validation->getError('repass') ?></div>
                <?php endif; ?>
            </div>

            <?php echo form_submit('Registrarme', 'Registrarme', "class='btn btn-success mt-3'") ?>
        <?php echo form_close(); ?> 

        <?php if(session()->getFlashdata('mensaje')) : ?> 
            <div class= "alert alert-success">
                <?= session()->getFlashdata('mensaje') ?>
        </div>
            <?php endif; ?>
    </div>
</section>