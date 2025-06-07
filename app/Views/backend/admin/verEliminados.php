<div class="container mt-5 text-light">
  <h1><?= $titulo ?></h1>

  <div class="d-flex justify-content-end mt-2">
    <a href="<?= base_url('listarProductos') ?>" class="btn btn-outline-light">
      <i class="fa fa-arrow-left"></i> Volver a activos
    </a>
  </div>

  <table class="table table-striped table-dark mt-4">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Categoría</th>
        <th>Sub Categoría</th>
        <th>Precio</th>
        <th>Marca</th>
        <th>Stock</th>
        <th>Descripción</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($productos as $producto): ?>
        <tr>
          <td><?= $producto['id'] ?></td>
          <td><?= $producto['nombre_producto'] ?></td>
          <td><img src="<?= base_url($producto['imagen_producto']) ?>" width="60" /></td>
          <td><?= $producto['categoria_id'] ?></td>
          <td><?= $producto['subcategoria_id'] ?></td>
          <td>$<?= number_format($producto['precio'], 2) ?></td>
          <td><?= $producto['marca'] ?></td>
          <td><?= $producto['stock'] ?></td>
          <td><?= $producto['descripcion'] ?></td>
          <td>
            <a href="<?= base_url('activar/' . $producto['id']) ?>" class="btn btn-success btn-sm" onclick="return confirm('¿Deseás activar este producto?');">
              <i class="fa fa-check"></i> Activar
            </a>
            <a href="<?= base_url('modificar/' . $producto['id']) ?>" class="btn btn-warning btn-sm mb-1">
              <i class="fa fa-edit"></i> Modificar
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
