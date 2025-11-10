<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login/crearcuenta', 'CrearCuenta::index');
$routes->post('/login/crearcuenta', 'CrearCuenta::index');

$routes->get('/login/login', 'Login::index');
$routes->post('/login/login', 'Login::index');

$routes->get('/general/precios', 'Precios::index');