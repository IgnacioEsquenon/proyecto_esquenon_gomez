<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::Principal');
$routes->get('principal', 'Home::Principal');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('catalogo', 'Home::catalogo');
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('terminos_y_condiciones', 'Home::ter_y_cond');
$routes->get('contacto', 'Home::contacto');
$routes->get('inicio_sesion', 'Home::inicio_sesion');
$routes->get('Registro', 'Home::registro');
$routes->get('Perfil', 'Home::perfil', ['filter' => 'Auth']);

// $routes->post('consulta', 'UsuariosController::add_consulta');

$routes->post('registro', 'UsuariosController::add_usuario');
$routes->post('Contacto', 'UsuariosController::add_mensaje', ['filter' => 'Auth']);
$routes->post('Ingreso', 'LoginController::auth');
$routes->get('cerrar_sesion', 'LoginController::logout');
//Rutas Administrador


//$routes->get('admin/modificar/(:num)', 'AdminController::modificar/$1');
//$routes->get('admin/eliminar/(:num)', 'AdminController::eliminar/$1')
$routes->get('listarProductos', 'AdminController::lista', ['filter' => 'AuthAdmin']); 
$routes->get('altaProductos', 'AdminController::alta', ['filter' => 'AuthAdmin']);
$routes->get('listadoProductos', 'AdminController::listaCompleta', ['filter' => 'AuthAdmin']);


//Ruta para guardar un producto
$routes->post('guardar_producto', 'AdminController::guardar_producto', ['filter' => 'AuthAdmin']);

//Rutas para editar productos
$routes->get('/modificar/(:num)', 'AdminController::mostrar_producto/$1', ['filter' => 'AuthAdmin']);
$routes->post('actualizar/(:num)', 'AdminController::modificar/$1', ['filter' => 'AuthAdmin']); 

//Rutas para eliminar productos 
$routes->get('eliminar/(:num)', 'AdminController::eliminarproducto/$1', ['filter' => 'AuthAdmin']);
$routes->get('verEliminados', 'AdminController::eliminados', ['filter' => 'AuthAdmin']);
$routes->get('activar/(:num)', 'AdminController::activarProducto/$1', ['filter' => 'AuthAdmin']);




