<?php
namespace App\Controllers;

use App\Models\UsuariosModel;
use App\Models\ProductoModel;
use App\Models\VentasModel;
use App\Models\Detalle_ventasModel;

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

        //Registrar la venta
        $nueva_venta = [
            'id_cliente' =>$session->get('id'),
            'total' => $total,
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

        //Vaciar el carrito
        $cartController->borrar_carrito();
        $session->setFlashdata('success', 'Venta registrada correctamente.');
        return redirect()->to('listadoProductos');
    }
}