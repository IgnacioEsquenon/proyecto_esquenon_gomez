<div class="container mt-5 text-light">
  <h1><?= $titulo ?></h1>
  <table class="table table-striped table-dark mt-4">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Categoría</th>
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
          <td><img src="<?= base_url('uploads/' . $producto['imagen_producto']) ?>" width="60" /></td>
          <td><?= $producto['categoria_id'] ?></td>
          <td>$<?= number_format($producto['precio'], 2) ?></td>
          <td><?= $producto['marca'] ?></td>
          <td><?= $producto['stock'] ?></td>
          <td><?= $producto['descripcion'] ?></td>
          <td>
            <a href="<?= base_url('admin/modificar/' . $producto['id']) ?>" class="btn btn-warning btn-sm mb-1">
              <i class="fa fa-edit"></i> Modificar
            </a>
            <a href="<?= base_url('admin/eliminar/' . $producto['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este producto?');">
              <i class="fa fa-trash"></i> Quitar
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>





