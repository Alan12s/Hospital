<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::checkAuth'); // Verifica si el usuario está logueado

$routes->get('/login', 'AuthController::login');
$routes->post('/auth', 'AuthController::auth');

$routes->get('/index', 'HomeController::index', ['filter' => 'authGuard']);

$routes->get('/logout', 'AuthController::logout');

$routes->get('/insumos', 'InsumosController::index');
$routes->get('/insumos/create', 'InsumosController::create');
$routes->post('/insumos/store', 'InsumosController::store');
$routes->get('/insumos/edit/(:num)', 'InsumosController::edit/$1');
$routes->post('/insumos/update/(:num)', 'InsumosController::update/$1');
$routes->post('insumos/edit/(:num)', 'InsumosController::edit/$1');
$routes->post('insumos/delete/(:num)', 'InsumosController::delete/$1');


$routes->get('/cirugias', 'CirugiasController::index');
$routes->get('/cirugias/create', 'CirugiasController::create');
$routes->post('/cirugias/store', 'CirugiasController::store');
$routes->get('/cirugias/edit/(:num)', 'CirugiasController::edit/$1');
$routes->post('/cirugias/update/(:num)', 'CirugiasController::update/$1');
$routes->get('/cirugias/delete/(:num)', 'CirugiasController::delete/$1');

// Agrega rutas adicionales para cirugías, trazabilidad y reportes.






// Agrega rutas adicionales para cirugías, trazabilidad y reportes.
