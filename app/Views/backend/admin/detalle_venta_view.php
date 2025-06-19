<div class="container my-5">
    <a href="<?= base_url('ver_compra') ?>" class="btn btn-secondary mb-4"><i class="fa fa-arrow-left"></i> Volver</a>

    <div class="card shadow p-4">
        <h2 class="card-title mb-4">Detalle de la Venta</h2>

        <div class="row">
            <!-- Datos del cliente -->
            <div class="col-md-6">
                <h5>Datos del Cliente</h5>
                <ul class="list-group mb-3">
                    <li class="list-group-item"><strong>Nombre:</strong> <?= esc($cliente['apellido'] . ', ' . $cliente['nombre']) ?></li>
                    <li class="list-group-item"><strong>Email:</strong> <?= esc($cliente['mail']) ?></li>
                </ul>
            </div>

            <!-- Datos generales de la venta -->
            <div class="col-md-6">
                <h5>Información de la Venta</h5>
                <ul class="list-group mb-3">
                    <li class="list-group-item"><strong>Fecha:</strong> <?= esc($venta['fecha_venta']) ?></li>
                    <li class="list-group-item"><strong>Forma de Pago:</strong> <?= esc(ucfirst($venta['forma_pago'])) ?></li>
                    <li class="list-group-item"><strong>Forma de Envío:</strong> <?= esc(ucfirst($venta['forma_envio'])) ?></li>
                </ul>
            </div>
        </div>

        <!-- Datos de envío si corresponde -->
        <?php if ($venta['forma_envio'] === 'domicilio' && $envio): ?>
            <h5>Datos de Envío</h5>
            <ul class="list-group mb-4">
                <li class="list-group-item"><strong>Dirección:</strong> <?= esc($envio['direccion']) ?></li>
                <li class="list-group-item"><strong>Localidad:</strong> <?= esc($envio['localidad']) ?></li>
                <li class="list-group-item"><strong>Provincia:</strong> <?= esc($envio['provincia']) ?></li>
                <li class="list-group-item"><strong>Código Postal:</strong> <?= esc($envio['cp']) ?></li>
            </ul>
        <?php endif; ?>

        <!-- Productos comprados -->
        <h5>Productos Comprados</h5>
        <div class="table-responsive">
            <table class="table table-bordered table-striped mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $total = 0;
                    foreach ($detalles as $item): 
                        $subtotal = $item['detalle_precio'] * $item['detalle_cantidad'];
                        $total += $subtotal;
                    ?>
                        <tr>
                            <td><?= esc($item['nombre_producto']) ?></td>
                            <td><?= esc($item['detalle_cantidad']) ?></td>
                            <td>$<?= number_format($item['detalle_precio'], 2) ?></td>
                            <td>$<?= number_format($subtotal, 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">Total:</th>
                        <th>$<?= number_format($total, 2) ?></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
