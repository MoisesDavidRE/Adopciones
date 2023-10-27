<?php
use App\Controllers\InicioController;
use CodeIgniter\Router\RouteCollection;

// Inicio
$routes->get('/', 'InicioController::index');

//  Mascota 
$routes->get('/mascota/mostrar', 'MascotaController::mostrar');
$routes->get('/mascota/editar/(:num)', 'MascotaController::editar/$1');
$routes->get('/mascota/agregar', 'MascotaController::agregar');
$routes->get('/mascota/delete/(:num)','MascotaController::delete/$1');
$routes->get('/mascota/buscar','MascotaController::buscar');
$routes->post('/mascota/insertar', 'MascotaController::insertar');
$routes->post('/mascota/update', 'MascotaController::update');

// Adopciones 
$routes->get('/adopcion/mostrar', 'AdopcionesController::mostrar');
$routes->get('/adopcion/agregar', 'AdopcionesController::agregar');
$routes->get('/adopcion/buscar','AdopcionesController::buscar');
$routes->post('/adopcion/insertar', 'AdopcionesController::insertar');
$routes->get('/adopcion/delete/(:num)','AdopcionesController::delete/$1');
$routes->get('/adopcion/editar/(:num)', 'AdopcionesController::editar/$1');
$routes->post('/adopcion/update', 'AdopcionesController::update');

// Adoptador
$routes->get('/adoptador/mostrar', 'AdoptadorController::mostrar');
$routes->get('/adoptador/agregar', 'AdoptadorController::agregar');
$routes->get('/adoptador/buscar', 'AdoptadorController::buscar');


// Raza

$routes->get('/raza/mostrar', 'RazaController::mostrar');
$routes->get('/raza/agregar', 'RazaController::agregar');
$routes->get('/raza/buscar', 'RazaController::buscar');

// Dieta
$routes->get('/dieta/mostrar', 'DietaController::mostrar');
$routes->get('/dieta/agregar', 'DietaController::agregar');
$routes->get('/dieta/buscar', 'DietaController::buscar');