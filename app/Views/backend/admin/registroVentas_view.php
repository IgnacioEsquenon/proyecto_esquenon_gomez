<link rel="stylesheet" href="<?php echo base_url('assets/css/contacto_style.css')?>">
<section class="contacto fade-scroll">
<?php
$session = session(); 
if(empty($venta)) { ?>
<div class="container">
    <div class="alert alert-dark text-center" role="alert"></div>
    <h1 class="alert-heading">No hay compras registradas.</h1>
</div>
<?php }else{ ?>

<div class="container mt-5 text-light">
    <div class="container">
        <div class="col-xl-12 col-xs-10">
            <h1 class="text-center Titulo">Registro de Ventas</h1>
            <div class="table-responsive">
<table class="table table-striped table-dark mt-4 table-bordered ">
    <thead>
        <tr>
            <th>ID Venta</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Fecha de Venta</th>
            <th>Detalles</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $totalGeneral = 0;
        foreach ($venta as $venta): 
            $subtotal = $venta['detalle_precio'] * $venta['detalle_cantidad'];
            $totalGeneral += $subtotal;
        ?>
            <tr>
                <td><?= $venta['venta_id'] ?></td>
                <td><?= $venta['nombre_completo'] ?></td>
                <td><?= $venta['nombre_producto'] ?></td>
                <td><?= $venta['detalle_cantidad'] ?></td>
                <td>$<?= number_format($venta['detalle_precio'], 2) ?></td>
                <td><?= $venta['fecha_venta'] ?></td>
                <td><a href="<?= base_url('ver_detalles/' . $venta['venta_id']) ?>" class="btn btn-info btn-sm">Ver Detalles</a>
                </td>
            </tr> 
            
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Mostrar total general abajo -->
<div class="text-center mt-4">
    <h4 class= "total-ventas">Total general de ventas: $<?= number_format($totalGeneral, 2) ?></h4>
</div>

<?php } ?>
            </div>
        </div>
    </div>
        
</div>

        </section>