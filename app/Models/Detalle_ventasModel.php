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

}