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

$routes->get("/vista/usuario-server","Usuarioserver::index");
$routes->post("/vista/usuario-server","Usuarioserver::guardar");

$routes->get('/vista/usuario', 'Usuario::usuariovista');
$routes->get('/vista/administrador', 'Usuario::administradorvista');

$routes->get('/vista/error', 'Login::usuariovista');
$routes->get('/general/precios', 'Precios::index');

$routes->get("/login/eliminar/(:num)","Usuario::eliminar/$1");
$routes->get("/usuario/eliminar/(:num)","Administrador::eliminar/$1");

$routes->get('/vista/administrador-usuarios', 'Administrador::index');

$routes->get("/vista/editar-server/(:num)","Usuario::editar/$1");
$routes->post("/server/actualizar/(:num)","Usuario::actualizar/$1");

$routes->get('/vista/panel-control/(:num)', 'Usuario::panelcontrol/$1');

$routes->get("/administrador/exportar_servidor","Administrador::exportar_servidor");
$routes->get("/administrador/exportar_usuarios","Administrador::exportar_usuarios");