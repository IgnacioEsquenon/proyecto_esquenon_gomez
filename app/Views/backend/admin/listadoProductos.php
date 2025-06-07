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
                        <p class="card-text"><strong>Precio:</strong> $<?= number_format($producto['precio'], 2) ?></p>
                        <p class="card-text"><strong>Stock:</strong> <?= $producto['stock'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
