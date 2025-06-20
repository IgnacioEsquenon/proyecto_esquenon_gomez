<link rel="stylesheet" href="<?php echo base_url('assets/css/contacto_style.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/carrito_style.css')?>">
<?php $cart = \Config\Services::cart(); ?>

<h1 class="text-center Titulo">Carrito de Compras</h1>
<div class="container my-3 mb-0"><a href="listadoProductos" class="btn btn-success mb-2">Hacer otra compra</a></div>


<?php if ($cart->contents() == NULL): ?>
    <h2 class="text-center alert alert-danger">El Carrito está vacío</h2>
<?php else: ?>
    
    <!-- TABLA DE PRODUCTOS -->
    <div class="card p-3 mb-4">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                foreach ($cart->contents() as $item):
                    $total += $item['subtotal']; ?>
                    <tr>
                        <td><?= $item['name']; ?></td>
                        <td>$<?= number_format($item['price'], 2); ?></td>
                        <td><?= $item['qty']; ?></td>
                        <td>$<?= number_format($item['subtotal'], 2); ?></td>
                        <td>
                            <a href="<?= base_url("vaciar_carrito/" . $item['rowid']); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h4 class="text-end mt-3">Total Compra: $<?= number_format($total, 2); ?></h4>
    </div>

    <!-- MENSAJE DE ERROR SI HAY -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger text-center"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <!-- FORMAS DE PAGO -->
    <div class="card p-3 mb-4">
        <form action="<?= base_url('registrar_venta') ?>" method="post">
            <div class="mb-3">
                <label class="form-label">Forma de pago</label>
                <div style="display:flex; gap:20px;">
                    <?php
                    $pagos = [
                        'efectivo' => 'efectivo.png',
                        'tarjeta' => 'tarjeta.png',
                        'transferencia' => 'billeteraV.png'
                    ];
                    foreach ($pagos as $metodo => $img): ?>
                        <label class="forma-pago-label" >
                            <input type="radio" name="forma_pago" value="<?= $metodo ?>" required style="display:none;">
                            <img src="assets/img/<?= $img ?>" alt="<?= ucfirst($metodo) ?>" style="width:80px; border:2px solid transparent; border-radius:8px;">
                            <div><?= ucfirst($metodo) ?></div>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- FORMAS DE ENVÍO -->
            <div class="mb-3">
                <label for="forma_envio" class="form-label">Forma de envío</label>
                <select name="forma_envio" id="forma_envio" class="form-control" onchange="toggleEnvio()" required>
                    <option value="retiro">Retiro en local</option>
                    <option value="domicilio">Envío a domicilio</option>
                </select>
            </div>

            <!-- DATOS DE ENVÍO (opcionales) -->
            <div id="datos_envio" style="display: none;">
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" name="direccion" class="form-control">
                </div>
                <div class="form-group">
                    <label>Localidad</label>
                    <input type="text" name="localidad" class="form-control">
                </div>
                <div class="form-group">
                    <label>Provincia</label>
                    <input type="text" name="provincia" class="form-control">
                </div>
                <div class="form-group">
                    <label>Código Postal</label>
                    <input type="text" name="cp" class="form-control">
                </div>
            </div>

            <!-- BOTONES -->
            <div class="d-flex justify-content-between mt-4">
                <a href="<?= base_url('borrar_carrito') ?>" class="btn btn-danger">Vaciar Carrito</a>
                <button type="submit" class="btn btn-success">Completar Compra</button>
            </div>
        </form>
    </div>

<?php endif; ?>

<hr>
<script>
  function toggleEnvio() {
    const tipo = document.getElementById("forma_envio").value;
    document.getElementById("datos_envio").style.display = (tipo === "domicilio") ? "block" : "none";
  }
 const labels = document.querySelectorAll('.forma-pago-label');
  labels.forEach(label => {
    label.addEventListener('click', () => {
      labels.forEach(l => l.classList.remove('selected'));
      label.classList.add('selected');
    });
  });
</script>
    </table>
