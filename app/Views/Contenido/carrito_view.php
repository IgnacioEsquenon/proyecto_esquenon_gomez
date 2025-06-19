<?php $cart = \Config\Services::cart(); ?>

<h1 class= "text-center">Carrito de Compras</h1><a href="listadoProductos" class="btn btn-success " role="button">Hacer otra compra</a> 

<?php if($cart->contents() == NULL){ ?>
    <h2 class="text-center alert alert-danger"> El Carrito esta Vacio </h2>
<?php } ?> 
<table id="mytable" class="table table-bordred table-striped">
<?php if($cart1 = $cart->contents()): ?>
    <thead>
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
        foreach($cart1 as $item): 
            $total += $item['subtotal']; ?>
        <tr>
            <td><?php echo $item['name']; ?></td>
            <td>$<?php echo number_format($item['price'], 2); ?></td>
            <td><?php echo $item['qty']; ?></td>
            <td>$<?php echo number_format($item['subtotal'], 2); ?></td>
            <td><a href="<?php echo base_url("vaciar_carrito/".$item['rowid']); ?>" class="btn btn-danger">Eliminar</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <h3>Total Compra: $<?php echo $total;  ?></h3>

<form action="<?= base_url('registrar_venta') ?>" method="post">
  <div>
    <label>Forma de pago</label>
    <div style="display:flex; gap:20px;">
      <label style="cursor:pointer; text-align:center;">
        <input type="radio" name="forma_pago" value="efectivo" required style="display:none;">
        <img src="assets/img/efectivo.png" alt="Efectivo" style="width:80px; border:2px solid transparent; border-radius:8px;">
        <div>Efectivo</div>
      </label>
      <label style="cursor:pointer; text-align:center;">
        <input type="radio" name="forma_pago" value="tarjeta" required style="display:none;">
        <img src="assets/img/tarjeta.png" alt="Tarjeta" style="width:80px; border:2px solid transparent; border-radius:8px;">
        <div>Tarjeta</div>
      </label>
      <label style="cursor:pointer; text-align:center;">
        <input type="radio" name="forma_pago" value="transferencia" required style="display:none;">
        <img src="assets/img/billeteraV.png" alt="Transferencia" style="width:80px; border:2px solid transparent; border-radius:8px;">
        <div>Transferencia</div>
      </label>
    </div>

  <div class="form-group">
    <label for="forma_envio">Forma de envío</label>
    <select name="forma_envio" id="forma_envio" class="form-control" onchange="toggleEnvio()" required>
      <option value="retiro">Retiro en local</option>
      <option value="domicilio">Envío a domicilio</option>
    </select>
  </div>

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
  <button type="submit" class="btn btn-success">Completar Compra</button>
</form>
<hr>
<script>
  function toggleEnvio() {
    const tipo = document.getElementById("forma_envio").value;
    document.getElementById("datos_envio").style.display = (tipo === "domicilio") ? "block" : "none";
  }
  const radios = document.querySelectorAll('input[name="forma_pago"]');
  radios.forEach(radio => {
    radio.addEventListener('change', () => {
      radios.forEach(r => {
        r.nextElementSibling.style.borderColor = 'transparent';
      });
      radio.nextElementSibling.style.borderColor = '#007bff'; // color borde al seleccionado
    });
  });
</script>
<td><a href="<?php echo base_url("borrar_carrito"); ?>" class="btn btn-danger">Vaciar Carrito</a></td>
<?php endif; ?>
    </table>
