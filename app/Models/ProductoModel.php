<?php namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'productos'; 
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre_producto',
        'imagen_producto',
        'categoria_id',
        'precio',
        'marca',
        'stock',
        'descripcion',
        'eliminado'
    ];

    protected $validationRules = [
        'nombre_producto' => 'required|min_length[3]|max_length[100]',
        'imagen_producto' => 'permit_empty|valid_url',
        'categoria_id' => 'required|integer',
        'precio' => 'required|decimal',
        'marca' => 'permit_empty|max_length[50]',
        'stock' => 'required|integer',
        'descripcion' => 'permit_empty|max_length[500]',
        'eliminado' => 'in_list[0,1]'
    ];

    protected $validationMessages = [
        'nombre_producto' => [
            'required' => 'El nombre del producto es obligatorio.',
            'min_length' => 'El nombre del producto debe tener al menos 3 caracteres.',
            'max_length' => 'El nombre del producto no puede exceder los 100 caracteres.'
        ],
        'imagen_producto' => [
            'valid_url' => 'La imagen debe ser una URL válida.'
        ],
        'categoria_id' => [
            'required' => 'La categoría es obligatoria.',
            'integer' => 'La categoría debe ser un número entero.'
        ],
        'precio' => [
            'required' => 'El precio es obligatorio.',
            'decimal' => 'El precio debe ser un número decimal válido.'
        ],
        'marca' => [
            'max_length' => 'La marca no puede exceder los 50 caracteres.'
        ],
        'stock' => [
            'required' => 'El stock es obligatorio.',
            'integer' => 'El stock debe ser un número entero.'
        ],
        'descripcion' => [
            'max_length' => 'La descripción no puede exceder los 500 caracteres.'
        ],
        'eliminado' => [
            'in_list' => 'El estado eliminado debe ser 0 o 1.'
        ]
    ];

}