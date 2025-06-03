<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductoModel;

class AdminController extends BaseController
{
    public function lista()
    {
        $data['titulo'] = 'Administración de Productos';

         $productoModel = new ProductoModel();

        
        $data['productos'] = $productoModel->findAll();
        $data['titulo'] = 'Listado de Productos';

    
        echo view('plantillas/headerAdmin_view', $data);
        echo view('backend/admin/listarProductos', $data);
        echo view('plantillas/footer_view', $data);
    } 

    public function alta(){
        $data['titulo'] = 'Alta de Productos';

        echo view('plantillas/headerAdmin_view', $data);
        echo view('backend/admin/altaProductos', $data);
        echo view('plantillas/footer_view', $data);


    }
}
