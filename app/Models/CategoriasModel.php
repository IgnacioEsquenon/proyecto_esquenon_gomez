<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriasModel extends Model {
    protected $table      = 'categorias';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['descripcion', 'activo'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    
    protected $useTimestamps = false;
    protected $dateFormat    = '';
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}