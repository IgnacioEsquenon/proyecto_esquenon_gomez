<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use App\Models\CategoriasModel;

class Carrito_controller extends BaseController
{
    public function ver_carrito(){
        $cart = \Config\Services::cart();
        $data['titulo'] = 'Carrito de Compras';

        return view ('plantillas/header_view', $data) . 
               view('contenido/carrito_view').  
               view('plantillas/footer_view');
    } 

    public function agregar_carrito(){
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();

        $data = [
            'id' => $request->getPost('id'),
            'name' => $request->getPost('nombre'),
            'qty' => 1,
            'price' => $request->getPost('precio'),
        ];

        $cart->insert($data);
        return redirect()->route('ver_carrito');
    }

    public function vaciar_carrito($rowid){
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return redirect()->route('ver_carrito');
    }

    public function borrar_carrito(){
        $cart = \Config\Services::cart();
        $cart->destroy();
        return redirect()->route('ver_carrito');
    } 

    public function devolver_carrito(){
        $cart = \Config\Services::cart();
        return $cart->contents();
    }
}