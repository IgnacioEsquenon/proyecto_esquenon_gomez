<link rel="stylesheet" href=<?php echo base_url('assets/css/catalogo_style.css')?>>

<div class="container mt-5">
    <h1 class="mb-4"><?= $titulo ?></h1>
    <div class="row">
        <?php foreach ($productos as $producto): ?> 



            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= base_url($producto['imagen_producto']) ?>" class="card-img-top" alt="<?= $producto['nombre_producto'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $producto['nombre_producto'] ?></h5>
                        <p class="card-text"><?= $producto['descripcion'] ?></p>
                        <p class="card-text"><?= $producto['categoria_id'] ?></p>
                        <p class="card-text"><?= $producto['subcategoria_id'] ?></p> 

                        <?php if (session()->get('estado' === true)){
                            echo form_open("add_cart"); 
                            echo form_hidden("id", $producto["id"]);
                            echo form_hidden("nombre", $producto['nombre_producto']);
                            echo form_hidden("precio", $producto['precio']);
                            echo form_hidden("stock", $producto['stock']);
                            echo form_submit("Comprar","Añadir al carrito", "class='btn btn-success'");
                            echo form_close();
                        }?> 
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
