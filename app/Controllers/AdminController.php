<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductoModel;
use App\Models\CategoriasModel;
use App\Models\SubCategoriasModel; 


class AdminController extends BaseController
{
    public function lista()
    {
        $data['titulo'] = 'Administración de Productos';

         $productoModel = new ProductoModel();

        
        $data['productos'] = $productoModel->where("eliminado", "NO")->findAll();
        $data['titulo'] = 'Gestión de Productos';

    
        echo view('plantillas/header_view', $data);
        echo view('backend/admin/listarProductos', $data);
        echo view('plantillas/footer_view', $data);
    } 

    public function alta(){
        $data['titulo'] = 'Alta de Productos';

        $categoriasModel = new CategoriasModel();
        $data['categorias'] = $categoriasModel->findAll(); 

        $subcategoriasModel = new SubCategoriasModel();
        $data['subcategorias'] = $subcategoriasModel->findAll();

        echo view('plantillas/header_view', $data);
        echo view('backend/admin/altaProductos', $data);
        echo view('plantillas/footer_view', $data);


    } 

    public function listaCompleta(){
        $data['titulo'] = 'Listado Completo de Productos';

        $productoModel = new ProductoModel();
        $data['productos'] = $productoModel->findAll();

        echo view('plantillas/header_view', $data);
        echo view('backend/admin/listadoProductos', $data);
        echo view('plantillas/footer_view', $data);
    }

    //Metodo para guardar un producto
    public function guardar_producto()
    {
        $validation = \Config\Services::validation();
        $request = \Config\Services::request();
    
    $validation->setRules(
       ['nombre_producto' => 'required|min_length[3]|max_length[100]',
        'imagen_producto' => 'uploaded[imagen_producto]|is_image[imagen_producto]|mime_in[imagen_producto,image/jpg,image/jpeg,image/png,image/webp]',
        'categoria_id'    => 'required|integer',
        'subcategoria_id' => 'required|integer',
        'precio'          => 'required|decimal',
        'marca'           => 'permit_empty|max_length[100]',
        'stock'           => 'required|integer',
        'descripcion'     => 'permit_empty|max_length[255]',
    ],
    //Errores
    [
        'nombre_producto' => [
            'required' => 'El nombre del producto es obligatorio.',
            'min_length' => 'El nombre del producto debe tener al menos 3 caracteres.',
            'max_length' => 'El nombre del producto no puede exceder los 100 caracteres.'
        ],
        'imagen_producto' => [
            'uploaded' => 'Debes subir una imagen.',
            'is_image' => 'El archivo debe ser una imagen válida.',
            'mime_in'  => 'La imagen debe ser de tipo jpg, jpeg, png o webp.'
        ],
        'categoria_id' => [
            'required' => 'La categoría es obligatoria.',
            'integer'  => 'La categoría debe ser un número entero.'
        ],
        'subcategoria_id' => [
            'required' => 'La subcategoría es obligatoria.',
            'integer'  => 'La subcategoría debe ser un número entero.'
        ],
        'precio' => [
            'required' => 'El precio es obligatorio.',
            'decimal'  => 'El precio debe ser un número decimal válido.'
        ],
        'marca' => [
            'max_length' => 'La marca no puede exceder los 100 caracteres.'
        ],
        'stock' => [
            'required' => 'El stock es obligatorio.',
            'integer'  => 'El stock debe ser un número entero.'
        ],
        'descripcion' => [
            'max_length' => 'La descripción no puede exceder los 255 caracteres.'
        ]
    ]

        );

    // Guardás los datos en la base, usando el modelo ProductoModel

    if($validation->withRequest($request)->run()){

         // Procesar la imagen
        $imagen = $request->getFile('imagen_producto');
        $rutaImagen = null;

        if ($imagen->isValid() && !$imagen->hasMoved()) {
        $nuevoNombre = $imagen->getRandomName();
        $imagen->move(FCPATH . 'assets/img', $nuevoNombre); // Asegurate que esta carpeta exista
        $rutaImagen = 'assets/img/' . $nuevoNombre;
        }


        $data = [
        'nombre_producto' => $request->getPost('nombre_producto'),
        'imagen_producto' => $rutaImagen,
        'categoria_id'    => $request->getPost('categoria_id'),
        'subcategoria_id' => $request->getPost('subcategoria_id'),
        'precio'          => $request->getPost('precio'),
        'marca'           => $request->getPost('marca'),
        'stock'           => $request->getPost('stock'),
        'descripcion'     => $request->getPost('descripcion'),
        "eliminado"       => "NO"
        ];
    

        $nuevoProducto = new ProductoModel();
        $nuevoProducto->insert($data); 
   
    return redirect()->to('listadoProductos')->with('mensaje', 'Producto guardado correctamente');
    } else {
            $data['titulo'] = 'Alta de Productos';
            $data['validation'] = $validation;

            $categoriasModel = new CategoriasModel();
            $subcategoriasModel = new SubCategoriasModel();

            $data['categorias'] = $categoriasModel->findAll();
            $data['subcategorias'] = $subcategoriasModel->findAll();

            echo view('plantillas/header_view', $data);
            echo view('backend/admin/altaProductos', $data);
            echo view('plantillas/footer_view', $data);
        }
}

//Funcion para mostrar un producto (para modificarlo)
    public function mostrar_producto($id = null)
    {
        $productoModel = new ProductoModel();
        $data["producto"] = $productoModel->where("id" ,$id)->first();
        if(empty($data["producto"])) {
            return redirect()->to('listarProductos')->with('mensaje', 'Producto no encontrado');
        }
        //Instanciar el modelo de categorías y subcategorías
        $categoriasModel = new CategoriasModel();
        $data['categorias'] = $categoriasModel->findAll();

        $subcategoriasModel = new SubCategoriasModel();
        $data['subcategorias'] = $subcategoriasModel->findAll();

        $data['titulo'] = 'Modificar Producto';
        echo view('plantillas/header_view', $data);
        echo view('backend/admin/modificarProductos', $data);
        echo view('plantillas/footer_view', $data);
    }

    //Funcion para modificar un producto
    public function modificar($id){
        $productoModel = new ProductoModel();
        $img = $this->request->getFile('imagen_producto');

        //Se verifica si se cargo un archivo valido
        if($img && $img->isValid() && !$img->hasMoved()) {

            $nombre_aleatorio = $img->getRandomName();
            $img->move(FCPATH . 'assets/img', $nombre_aleatorio);
            $nombre_aleatorio = 'assets/img/' . $nombre_aleatorio;

            $data = [
            'nombre_producto' => $this->request->getVar('nombre_producto'),
            'imagen_producto' => $nombre_aleatorio,
            'categoria_id'    => $this->request->getVar('categoria_id'),
            'subcategoria_id' => $this->request->getVar('subcategoria_id'),
            'precio'          => $this->request->getVar('precio'),
            'marca'           => $this->request->getVar('marca'),
            'stock'           => $this->request->getVar('stock'),
            'descripcion'     => $this->request->getVar('descripcion'),
            //'eliminado'       => NO // Por defecto, no eliminado
        ];
        } else{ //No se subió una imagen nueva, se mantiene la imagen actual
            $data = [
            'nombre_producto' => $this->request->getVar('nombre_producto'),
            'categoria_id'    => $this->request->getVar('categoria_id'),
            'subcategoria_id' => $this->request->getVar('subcategoria_id'),
            'precio'          => $this->request->getVar('precio'),
            'marca'           => $this->request->getVar('marca'),
            'stock'           => $this->request->getVar('stock'),
            'descripcion'     => $this->request->getVar('descripcion'),
            //'eliminado'       => NO // Por defecto, no eliminado
        ];
        }

        $producto = $productoModel->find($id);
        $data['eliminado'] = $producto['eliminado']; // mantiene el estado "SI" o "NO"

        $productoModel->update($id, $data);
        return redirect()->to('listarProductos')->with('mensaje', 'Producto modificado correctamente');

    }

    //Funcion para eliminar un producto
    public function eliminarproducto($id){
        $productoModel = new ProductoModel();
        $data['eliminado'] = $productoModel->where('id', $id)->first();
        $data['eliminado'] = "SI";
        $productoModel->update($id, $data);
        return $this->response->redirect(site_url('listarProductos'));
    } 

    public function eliminados(){
        $productoModel = new ProductoModel();
        $data['productos'] = $productoModel->where('eliminado', 'SI')->findAll();
        $data['titulo'] = 'Productos Eliminados';

        echo view('plantillas/header_view', $data);
        echo view('backend/admin/verEliminados', $data);
        echo view('plantillas/footer_view', $data);
    } 

    public function activarProducto($id){
        $productoModel = new ProductoModel();
        $data['eliminado'] = $productoModel->where('id', $id)->first();
        $data['eliminado'] = "NO";
        $productoModel->update($id, $data); 
        session()->setFlashdata('mensaje', 'Producto activado correctamente');
        return $this->response->redirect(site_url('listarProductos'));
    }



}

//Comentario xd