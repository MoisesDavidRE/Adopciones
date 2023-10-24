<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  Mascota 

$routes->get('/', 'InicioController::index');
$routes->get('/mascota/mostrar', 'MascotaController::mostrar');
$routes->get('/mascota/editar/(:num)', 'MascotaController::editar/$1');
$routes->get('/mascota/agregar', 'MascotaController::agregar');
$routes->get('/mascota/delete/(:num)','MascotaController::delete/$1');
$routes->get('/mascota/buscar','MascotaController::buscar');


// Adopciones 
$routes->get('/adopcion/mostrar', 'AdopcionesController::mostrar');


// Adoptador
$routes->get('/adoptador/mostrar', 'AdoptadorController::mostrar');


