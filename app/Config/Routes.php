<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes -> get("/", "Home::index");
 
$routes -> get("/login/crearcuenta", "CrearCuenta::index");
$routes -> post("/login/crearcuenta", "CrearCuenta::guardar");
 
$routes -> post("/login/verificar", "Login::verificar");
 
$routes -> get("/login/login", "Login::index");
$routes -> get("/logout", "Login::logout");
 
$routes -> get("/vista/usuario-server", "Usuarioserver::index");
$routes -> post("/vista/usuario-server", "Usuarioserver::guardar");
 
$routes -> get("/vista/usuario", "Usuario::usuariovista");
$routes -> get("/vista/administrador", "Administrador::administradorvista");
 
$routes -> get("/usuario/eliminar/(:num)",  "Administrador::eliminar_usuario/$1");
$routes -> get("/servidor/eliminar/(:num)", "Administrador::eliminar_servidor/$1");
 
$routes -> get("/vista/administrador-usuarios", "Administrador::index");
 
$routes -> get("/vista/editar-server/(:num)", "Usuarioserver::editar_server/$1");
$routes -> post("/server/actualizar/(:num)", "Usuarioserver::actualizar_server/$1");
$routes -> get("/vista/panel-control/(:num)", "Usuarioserver::panelcontrol/$1");

// === Exportar a excel ===
$routes -> get("/administrador/exportar_servidor", "Administrador::exportar_servidor");
$routes -> post("/administrador/exportar_servidor", "Administrador::exportar_servidor");

$routes -> get("/administrador/exportar_usuarios", "Administrador::exportar_usuarios");
$routes -> post("/administrador/exportar_usuarios", "Administrador::exportar_usuarios");
// ========================

$routes -> get("/vista/editar-usuario/(:num)", "Usuario::editar_usuario/$1");
$routes -> post("/usuario/actualizar/(:num)", "Usuario::actualizar_usuario/$1");