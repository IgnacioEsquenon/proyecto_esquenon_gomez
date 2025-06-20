<link rel="stylesheet" href=<?php echo base_url('assets/css/catalogo_style.css')?>>

<div class="container mt-5">
    <h1 class="mb-4"><?= $titulo ?></h1>

    <!-- Filtros de búsqueda -->
    <form method="GET" action="<?= base_url('listadoProductos') ?>" class="mb-4">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text" name="nombre" class="form-control" placeholder="Buscar por nombre" value="<?= esc($_GET['nombre'] ?? '') ?>">
            </div>
            <div class="col-md-3">
                <select name="categoria_id" class="form-select">
                    <option value="">Todas las Categorías</option>
                    <?php foreach ($categorias as $cat): ?>
                        <option value="<?= $cat['id'] ?>" <?= isset($_GET['categoria_id']) && $_GET['categoria_id'] == $cat['id'] ? 'selected' : '' ?>>
                            <?= esc($cat['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-3">
                <select name="subcategoria_id" class="form-select">
                    <option value="">Todas las Subcategorías</option>
                    <?php foreach ($subcategorias as $sub): ?>
                        <option value="<?= $sub['id'] ?>" <?= isset($_GET['subcategoria_id']) && $_GET['subcategoria_id'] == $sub['id'] ? 'selected' : '' ?>>
                            <?= esc($sub['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100">Filtrar</button>
            </div>
        </div>
    </form>

    <!-- Productos -->
    <div class="row">
        <?php foreach ($productos as $producto): ?> 
            <?php if($producto["eliminado"]== "NO"): ?> 
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= base_url($producto['imagen_producto']) ?>" class="card-img-top" alt="<?= $producto['nombre_producto'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($producto['nombre_producto']) ?></h5>
                        <p class="card-text"><?= esc($producto['descripcion']) ?></p>
                        <p class="card-text"><strong>Categoría:</strong> <?= esc($producto['categoria_nombre']) ?></p>
                        <p class="card-text"><strong>Subcategoría:</strong> <?= esc($producto['subcategoria_nombre']) ?></p>
                        <p class="card-text"><strong>Precio: $</strong><?= esc($producto['precio']) ?></p>
                        <?php if (session()->get('estado') === true): ?>
                            <?= form_open("add_cart") ?>
                                <?= form_hidden("id", $producto["id"]) ?>
                                <?= form_hidden("nombre", $producto['nombre_producto']) ?>
                                <?= form_hidden("precio", $producto['precio']) ?>
                                <?= form_hidden("stock", $producto['stock']) ?>
                                <?= form_submit("Comprar", "Añadir al carrito", "class='btn btn-success'") ?>
                            <?= form_close() ?>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
   <?php if ($pager->getPageCount() > 1): ?>
    <?php
        $queryParams = $_GET;
        unset($queryParams['page']);
        $queryString = http_build_query($queryParams);
    ?>
    <div class="d-flex justify-content-center mt-4 mb-5">
        <?= $pager->links('default', 'default_full', ['query_string' => $queryString]) ?>
    </div>
<?php endif; ?>
</div>
