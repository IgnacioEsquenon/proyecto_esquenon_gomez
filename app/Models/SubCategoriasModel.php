<?php

namespace App\Models;

use CodeIgniter\Model;

class SubCategoriasModel extends Model {
    protected $table      = 'sub_categorias';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre'];

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