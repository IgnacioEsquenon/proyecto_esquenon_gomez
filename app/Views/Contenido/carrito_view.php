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
    <td><a href="<?php echo base_url("borrar_carrito"); ?>" class="btn btn-danger">Vaciar Carrito</a></td>
    
    <td><a href="<?php echo base_url("registrar_venta"); ?>" class="btn btn-success" role="button">Completar Compra</a></td>
    <?php endif; ?>
    </table>