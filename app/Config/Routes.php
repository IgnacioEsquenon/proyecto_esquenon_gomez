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

// $routes->post('consulta', 'UsuariosController::add_consulta');

$routes->post('registro', 'UsuariosController::add_usuario');
$routes->post('Contacto', 'UsuariosController::add_mensaje');

//Rutas Administrador
$routes->get('listarProductos', 'AdminController::lista'); 
$routes->get('altaProductos', 'AdminController::alta');
$routes->get('listadoProductos', 'AdminController::listaCompleta');


//Ruta para guardar un producto
$routes->post('guardar_producto', 'AdminController::guardar_producto');

//Rutas para editar productos
$routes->get('/modificar/(:num)', 'AdminController::mostrar_producto/$1');
$routes->post('actualizar/(:num)', 'AdminController::modificar/$1'); 

//Rutas para eliminar productos 
$routes->get('eliminar/(:num)', 'AdminController::eliminarproducto/$1');
$routes->get('verEliminados', 'AdminController::eliminados');
$routes->get('activar/(:num)', 'AdminController::activarProducto/$1');




