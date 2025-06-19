<?php

namespace App\Models;
use CodeIgniter\Model;

class Detalle_ventasModel extends Model {
    protected $table      = 'detalle_venta';
    protected $primaryKey = 'venta_id';

    protected $useAutoIncrement = true; 
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['venta_id', 'id_producto', 'detalle_cantidad', "detalle_precio"];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true; 
    protected $useTimestamps = false;
    
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;


   public function detallesProducto()
{
    return $this->select('detalle_venta.*, productos.nombre_producto, venta.id_cliente, venta.fecha_venta, CONCAT(usuarios.apellido, \' \', usuarios.nombre) AS nombre_completo')
                ->join('productos', 'productos.id = detalle_venta.id_producto')
                ->join('venta', 'venta.id_ventas = detalle_venta.venta_id')
                ->join('usuarios', 'usuarios.id = venta.id_cliente')
                ->findAll();
}

}