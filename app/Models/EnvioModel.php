<?php

namespace App\Models;

use CodeIgniter\Model;

class EnvioModel extends Model
{
    protected $table = 'envio'; 
    protected $primaryKey = 'id_envio';

    protected $allowedFields = [
        'venta_id',
        'direccion',
        'localidad',
        'provincia',
        'cp'
    ];

    protected $validationRules = [
        'venta_id'       => 'required|integer',
        'direccion'      => 'required|max_length[255]',
        'localidad'      => 'required|max_length[100]',
        'provincia'      => 'required|max_length[100]',
        'cp'  => 'required|max_length[20]'
    ];

    protected $validationMessages = [
        'venta_id' => [
            'required' => 'La venta es obligatoria.',
            'integer'  => 'ID de venta inválido.'
        ],
        'direccion' => [
            'required'    => 'La dirección es obligatoria.',
            'max_length'  => 'La dirección no puede tener más de 255 caracteres.'
        ],
        'localidad' => [
            'required'    => 'La localidad es obligatoria.',
            'max_length'  => 'La localidad no puede tener más de 100 caracteres.'
        ],
        'provincia' => [
            'required'    => 'La provincia es obligatoria.',
            'max_length'  => 'La provincia no puede tener más de 100 caracteres.'
        ],
        'cp' => [
            'required'    => 'El código postal es obligatorio.',
            'max_length'  => 'El código postal no puede tener más de 20 caracteres.'
        ]
    ];
}
