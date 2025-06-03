<?php

namespace App\Models;

use CodeIgniter\Model;

class MensajesModel extends Model {
    protected $table      = 'mensajes';
    protected $primaryKey = 'id_mensaje';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['usuario', 'motivo', 'consulta'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    
    protected $useTimestamps = false;

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}