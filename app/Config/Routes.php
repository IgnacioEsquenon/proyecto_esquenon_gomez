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

$routes->get('register', 'UsuariosController::registro');
$routes->post('registro', 'UsuariosController::add_usuario');