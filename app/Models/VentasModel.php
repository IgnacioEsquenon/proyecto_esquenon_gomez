<?php

namespace App\Models;
use CodeIgniter\Model;

class VentasModel extends Model {
    protected $table      = 'venta';
    protected $primaryKey = 'id_ventas';
    protected $useAutoIncrement = true; 
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_ventas', 'id_cliente', 'fecha_venta'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true; 
    protected $useTimestamps = false;
    
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}