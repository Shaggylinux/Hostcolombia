<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login/crearcuenta', 'CrearCuenta::index');
$routes->post('/login/crearcuenta', 'CrearCuenta::guardar');

$routes->post('/login/verificar', 'Login::verificar');

$routes->get('/login/login', 'Login::index');
$routes->get('/logout', 'Login::logout');

$routes->get('/vista/usuario', 'Login::usuariovista');
$routes->get('/vista/administrador', 'Login::administradorvista');

$routes->get('/vista/error', 'Login::usuariovista');


$routes->get('/general/precios', 'Precios::index');


// Ruta protegida (requiere sesión)
// $routes->get('/panel', 'Panel::index');
