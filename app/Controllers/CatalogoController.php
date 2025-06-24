<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\CategoriasModel;
use App\Models\SubCategoriasModel;
use CodeIgniter\Controller;

class CatalogoController extends BaseController
{
    public function listaCompleta(){
        $data['titulo'] = 'Listado Completo de Productos';

        $productoModel = new ProductoModel();
        $data['productos'] = $productoModel->findAll();

        echo view('plantillas/header_view', $data);
        echo view('backend/admin/listadoProductos', $data);
        echo view('plantillas/footer_view', $data);
    }
    
    public function index()
{
    $productoModel = new ProductoModel();
    $categoriaModel = new CategoriasModel();
    $subCategoriaModel = new SubCategoriasModel();

    $nombre = $this->request->getGet('nombre');
    $categoria = $this->request->getGet('categoria_id');
    $subcategoria = $this->request->getGet('subcategoria_id');

    // Aplicar filtros al modelo directamente
    if (!empty($nombre)) {
        $productoModel->like('productos.nombre_producto', $nombre);
    }
    if (!empty($categoria)) {
        $productoModel->where('productos.categoria_id', $categoria);
    }
    if (!empty($subcategoria)) {
        $productoModel->where('productos.subcategoria_id', $subcategoria);
    }

    $productoModel->select('productos.*, categorias.nombre as categoria_nombre, sub_categorias.nombre as subcategoria_nombre')
                  ->join('categorias', 'categorias.id = productos.categoria_id', 'left')
                  ->join('sub_categorias', 'sub_categorias.id = productos.subcategoria_id', 'left')
                  ->where('productos.eliminado', 0);

    // PAGINACIÓN: 9 por página
    $productos = $productoModel->paginate(9);
    $pager = $productoModel->pager;

    $data = [
        'titulo' => 'Catálogo',
        'productos' => $productos,
        'categorias' => $categoriaModel->findAll(),
        'subcategorias' => $subCategoriaModel->findAll(),
        'pager' => $pager,
    ];

    return view('plantillas/header_view', $data)
         . view('backend/admin/listadoProductos', $data)
         . view('plantillas/footer_view', $data);
}

     public function eliminados(){
        $productoModel = new ProductoModel();
        $categoriaModel = new CategoriasModel();
         $subCategoriaModel = new SubCategoriasModel();
        $data['productos'] = $productoModel->where('eliminado', 'SI')->findAll();
        

        $productoModel->select('productos.*, categorias.nombre as categoria_nombre, sub_categorias.nombre as subcategoria_nombre')
                  ->join('categorias', 'categorias.id = productos.categoria_id', 'left')
                  ->join('sub_categorias', 'sub_categorias.id = productos.subcategoria_id', 'left')
                  ->where('productos.eliminado', 0);
        $productos = $productoModel;

        $data = [
        "titulo" => 'Productos Eliminados',
        'productos' => $productos->where('eliminado', 'SI')->findAll(),
        'categorias' => $categoriaModel->findAll(),
        'subcategorias' => $subCategoriaModel->findAll(),
    ]; 

        echo view('plantillas/header_view', $data);
        echo view('backend/admin/verEliminados', $data);
        echo view('plantillas/footer_view', $data);
    }
}