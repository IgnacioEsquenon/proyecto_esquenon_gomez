
<link rel="stylesheet" href="<?php echo base_url('assets/css/contacto_style.css')?>">
<section class="contacto fade-scroll">
<h1 class="Titulo"><?= $titulo ?></h1>


<div class="container mt-5 text-light">
     <?php helper('form'); ?>
    <?php echo form_open_multipart('guardar_producto')?>

        <div class="mb-3">
            <label for="nombre_producto">Nombre del Producto</label>
            <?php echo form_input(['name' => 'nombre_producto', 'id' => 'nombre_producto','type' =>'text','class' => 'form-control','value' =>set_value('nombre_producto')]); ?>
             <?php if(isset($validation) && $validation->hasError('nombre_producto')): ?>
                    <div class="text-danger"><?= $validation->getError('nombre_producto') ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="imagen_producto" class="form-label">Imagen del Producto</label>
            <?php echo form_input(['name' => 'imagen_producto', 'id' => 'imagen_producto','type' =>'file', 'class' => 'form-control','value' =>set_value('imagen_producto')]); ?>
            <?php if(isset($validation) && $validation->hasError('imagen_producto')): ?>
                    <div class="text-danger"><?= $validation->getError('imagen_producto') ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoría</label>
            <select class="form-group" id="categoria_id" name="categoria_id" required>
                <option value="">Seleccione una opción</option>
                <option value="1" <?php echo (isset($_POST['categoria_id']) && $_POST['categoria_id'] == '1' ? 'selected' : '') ?>>PC</option>
               <option value="2" <?php echo (isset($_POST['categoria_id']) && $_POST['categoria_id'] == '2' ? 'selected' : '') ?>>Celulares</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="subcategoria_id" class="form-label">Sub-Categoría</label>
            <select class="form-group" id="subcategoria_id" name="subcategoria_id" required>
                <option value="">Seleccione una opción</option>
                <option value="1" <?php echo (isset($_POST['subcategoria_id']) && $_POST['subcategoria_id'] == '1' ? 'selected' : '') ?>>Auriculares</option>
               <option value="2" <?php echo (isset($_POST['subcategoria_id']) && $_POST['subcategoria_id'] == '2' ? 'selected' : '') ?>>Teclado</option>
               <option value="3" <?php echo (isset($_POST['subcategoria_id']) && $_POST['subcategoria_id'] == '3' ? 'selected' : '') ?>>Cargadores</option>
               <option value="4" <?php echo (isset($_POST['subcategoria_id']) && $_POST['subcategoria_id'] == '4' ? 'selected' : '') ?>>Fundas</option>
               <option value="5" <?php echo (isset($_POST['subcategoria_id']) && $_POST['subcategoria_id'] == '5' ? 'selected' : '') ?>>Sillas</option>
               <option value="6" <?php echo (isset($_POST['subcategoria_id']) && $_POST['subcategoria_id'] == '6' ? 'selected' : '') ?>>Parlantes</option>
                <option value="7" <?php echo (isset($_POST['subcategoria_id']) && $_POST['subcategoria_id'] == '7' ? 'selected' : '') ?>>Otros</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <?php echo form_input(['name' => 'precio', 'id' => 'precio','type' =>'number', 'class' => 'form-control','value' =>set_value('precio')]); ?>
             <?php if(isset($validation) && $validation->hasError('precio')): ?>
                    <div class="text-danger"><?= $validation->getError('precio') ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <?php echo form_input(['name' => 'marca', 'id' => 'marca','type' =>'text', 'class' => 'form-control','value' =>set_value('marca')]); ?>
             <?php if(isset($validation) && $validation->hasError('marca')): ?>
                    <div class="text-danger"><?= $validation->getError('marca') ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <?php echo form_input(['name' => 'stock', 'id' => 'stock','type' =>'number', 'class' => 'form-control','value' =>set_value('stock')]); ?>
             <?php if(isset($validation) && $validation->hasError('stock')): ?>
                    <div class="text-danger"><?= $validation->getError('stock') ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <?php echo form_textarea(['name' => 'descripcion', 'id' => 'descripcion', 'class' => 'form-textarea','value' =>set_value('descripcion')]); ?>
             <?php if(isset($validation) && $validation->hasError('descripcion')): ?>
                <div class="text-danger"><?= $validation->getError('descripcion') ?></div>
            <?php endif; ?>
        </div>

        <?php echo form_submit('Guardar Producto', 'Guardar Producto', "class='btn btn-success mt-3'") ?>
        <?php echo form_close(); ?> 

        <?php if(session()->getFlashdata('mensaje')) : ?> 
        <div class="alert alert-success">
        <?= session()->getFlashdata('mensaje') ?>
    </div>
    <?php endif; ?>

<hr>
</section>