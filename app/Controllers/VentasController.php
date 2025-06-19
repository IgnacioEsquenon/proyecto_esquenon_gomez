<?php
namespace App\Controllers;

use App\Models\UsuariosModel;
use App\Models\ProductoModel;
use App\Models\VentasModel;
use App\Models\Detalle_ventasModel;
use App\Models\EnvioModel;

class VentasController extends BaseController
{
    public function registrar_venta(){
        $session = session();
        require_once(APPPATH . 'Controllers/Carrito_controller.php');
        $cartController = new Carrito_controller();
        $cartContenido = $cartController->devolver_Carrito(); 

        $productoModel = new ProductoModel();
        $ventasModel = new VentasModel();
        $detalleModel = new Detalle_ventasModel();
        $envioModel = new EnvioModel();

        $productos_validos =[];
        $productos_sinStock = [];
        $total = 0;

        foreach($cartContenido as $item){
            $producto = $productoModel->find($item['id']);
            if($producto && $producto['stock'] >= $item['qty']){
                $productos_validos[] = $item;
                $total += $item['price'] * $item['qty'];
            } else {
                $productos_sinStock[] = $item["name"];
                //eliminar el producto del carrito sin stock 
                $cartController->vaciar_carrito($item['rowid']);
            }
        }

        //Si no hay productos válidos, vuelta al carrito :(
        if(!empty($productos_sinStock)){
            $session->setFlashdata('error', 'Los siguientes productos no tienen stock: ' . implode(', ', $productos_sinStock));
            return redirect()->route('ver_carrito');
        }

        //Si no hay productos válidos, no registrar la venta
        if(empty($productos_validos)){
            $session->setFlashdata('error', 'No hay productos válidos para registrar la venta.');
            return redirect()->route('ver_carrito');
        }

         //Capturar forma de pago y envío del formulario
        $request = \Config\Services::request();
        $forma_pago = $request->getPost('forma_pago');
        $forma_envio = $request->getPost('forma_envio');

        //Registrar la venta
        $nueva_venta = [
            'id_cliente' =>$session->get('id'),
            'total' => $total,
            'fecha_venta' => date('Y-m-d'),
            'forma_pago' => $forma_pago,
            'forma_envio' => $forma_envio,
        ];

        $id_ventas = $ventasModel->insert($nueva_venta);

        //Registrar los detalles de la venta
        foreach($productos_validos as $item){
            $detalle = [
                'venta_id' => $id_ventas,
                'id_producto' => $item['id'],
                'detalle_cantidad' => $item['qty'],
                'detalle_precio' => $item['price'],
            ];
            $detalleModel->insert($detalle);

            //Actualizar el stock del producto
            $producto = $productoModel->find($item['id']);
            $productoModel->update($item['id'], [
                'stock' => $producto['stock'] - $item['qty']
            ]);
        }

        if ($forma_envio === 'domicilio') {
        $envio = [
            'venta_id' => $id_ventas,
            'direccion' => $request->getPost('direccion'),
            'localidad' => $request->getPost('localidad'),
            'provincia' => $request->getPost('provincia'),
            'cp' => $request->getPost('cp'),
        ];
        $envioModel->insert($envio);
    }

        //Vaciar el carrito
        $cartController->borrar_carrito();
        $session->setFlashdata('success', 'Venta registrada correctamente.');
        return redirect()->to('ver_carrito');
    }

    public function ver_compra(){
        $detalle_ventas = new Detalle_ventasModel();
        $venta = $detalle_ventas->detallesProducto();

        $data['venta'] = $venta;
        $data['titulo'] = 'Detalles de la Venta';

        echo view('plantillas/header_view', $data);
        echo view('backend/admin/registroVentas_view', $data);
        echo view('plantillas/footer_view', $data);
    } 

    public function ver_detalles($id_ventas){
        $detalleModel = new \App\Models\Detalle_ventasModel();
        $ventaModel = new \App\Models\VentasModel();
        $usuarioModel = new \App\Models\UsuariosModel();
        $envioModel = new \App\Models\EnvioModel();

    // Buscar la venta
    $venta = $ventaModel->find($id_ventas);

    // Datos del cliente
    $cliente = $usuarioModel->find($venta['id_cliente']);

    // Detalles de productos comprados
    $detalles = $detalleModel->select('detalle_venta.*, productos.nombre_producto')
        ->join('productos', 'productos.id = detalle_venta.id_producto')
        ->where('venta_id', $id_ventas)
        ->findAll();

    // Datos de envío si hay
    $envio = $envioModel->where('venta_id', $id_ventas)->first();

    $data = [
        'titulo' => 'Detalle de la Venta',
        'venta' => $venta,
        'cliente' => $cliente,
        'detalles' => $detalles,
        'envio' => $envio
    ];

    echo view('plantillas/headerAdmin_view', $data);
    echo view('backend/admin/detalle_venta_view', $data);
    echo view('plantillas/footer_view');
    }

}