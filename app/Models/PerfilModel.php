<?php

namespace App\Models;

use CodeIgniter\Model;

class PerfilModel extends Model {
    protected $table      = 'perfil';
    protected $primaryKey = 'id_perfil';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['perfil_descripcion'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    
    protected $useTimestamps = false;

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}