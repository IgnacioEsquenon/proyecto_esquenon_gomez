<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::Principal');
$routes->get('principal', 'Home::Principal');
$routes->get('quienes_somos', 'Home::quienes_somos');
/** Ruta de catalogo */
$routes->get('comercializacion', 'Home::comercializacion');
$routes->get('terminos_y_condiciones', 'Home::ter_y_cond');
$routes->get('contacto', 'Home::contacto');