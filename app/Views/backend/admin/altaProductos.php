<h1><?= $titulo ?></h1>

<div class="container mt-5 text-light">
    <form method="post" action="<?= base_url('backend/admin/guardar_producto') ?>" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nombre_producto" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
        </div>
        <div class="mb-3">
            <label for="imagen_producto" class="form-label">Imagen del Producto</label>
            <input type="file" class="form-control" id="imagen_producto" name="imagen_producto" accept=".jpg, .jpeg, .png" required>
        </div>
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoría</label>
            <select class="form-select" id="categoria_id" name="categoria_id" required>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca">
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Producto</button>
    </form>