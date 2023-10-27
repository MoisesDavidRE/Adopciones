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
$routes->post('/mascota/agregar', 'MascotaController::agregar');
$routes->post('/mascota/editar/(:num)', 'MascotaController::editar/$1');

// Adopciones 
$routes->get('/adopcion/mostrar', 'AdopcionesController::mostrar');
$routes->get('/adopcion/agregar', 'AdopcionesController::agregar');
$routes->get('/adopcion/buscar','AdopcionesController::buscar');
$routes->post('/adopcion/insertar', 'AdopcionesController::insertar');
$routes->get('/adopcion/delete/(:num)','AdopcionesController::delete/$1');
$routes->get('/adopcion/editar/(:num)', 'AdopcionesController::editar/$1');
$routes->post('/adopcion/update', 'AdopcionesController::update');
$routes->post('/adopcion/agregar', 'AdopcionesController::agregar');


// Adoptador
$routes->get('/adoptador/mostrar', 'AdoptadorController::mostrar');
$routes->get('/adoptador/agregar', 'AdoptadorController::agregar');
$routes->get('/adoptador/buscar', 'AdoptadorController::buscar');
$routes->get('/adoptador/delete/(:num)','AdoptadorController::delete/$1');
$routes->get('/adoptador/editar/(:num)', 'AdoptadorController::editar/$1');
$routes->post('/adoptador/update', 'AdoptadorController::update');
$routes->post('/adoptador/insert', 'AdoptadorController::insertar');
$routes->post('/adoptador/agregar', 'AdoptadorController::agregar');

// Raza

$routes->get('/raza/mostrar', 'RazaController::mostrar');
$routes->get('/raza/agregar', 'RazaController::agregar');
$routes->get('/raza/buscar', 'RazaController::buscar');
$routes->post('/raza/insertar', 'RazaController::insertar');
$routes->get('/raza/editar/(:num)', 'RazaController::editar/$1');
$routes->post('/raza/update', 'RazaController::update');
$routes->get('/raza/delete/(:num)','RazaController::delete/$1');
$routes->post('/raza/agregar', 'RazaController::agregar');

// Dieta
$routes->get('/dieta/mostrar', 'DietaController::mostrar');
$routes->get('/dieta/agregar', 'DietaController::agregar');
$routes->get('/dieta/buscar', 'DietaController::buscar');
$routes->post('/dieta/agregar', 'DietaController::agregar');
$routes->get('/dieta/delete/(:num)','DietaController::delete/$1');
$routes->get('/dieta/editar/(:num)', 'DietaController::editar/$1');
$routes->post('/dieta/update', 'DietaController::update');