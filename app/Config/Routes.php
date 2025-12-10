<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// === Pagina principal ===
$routes -> get("/", "Home::index");
 
// === Registrarse, Inicio de sesion y Destruir la session ===
$routes -> get("/login/crearcuenta", "CrearCuenta::index"); // Pagina para registrarse
$routes -> post("/login/crearcuenta", "CrearCuenta::guardar");
$routes -> post("/login/verificar", "Login::verificar");
$routes -> get("/login/login", "Login::index"); // Pagina de inicio de session
$routes -> get("/logout", "Login::logout"); // Destruir la session actual
 
// === Dashboard ===
$routes -> get("/vista/usuario-server", "Usuarioserver::index"); // Dashboard
$routes -> post("/vista/usuario-server", "Usuarioserver::guardar"); // Guardar los servidores
 
// === Vistas para el usuario y el administrador ===
$routes -> get("/vista/usuario", "Usuario::usuariovista"); // Usuario 
$routes -> get("/vista/administrador", "Administrador::administradorvista"); // Administrador
$routes -> get("/vista/administrador-usuarios", "Administrador::index"); // Administrador

// === Eliminar cuentas y servidores (Administrador) ===
$routes -> get("/usuario/eliminar/(:num)",  "Administrador::eliminar_usuario/$1"); // Eliminar usuario
$routes -> get("/servidor/eliminar/(:num)", "Administrador::eliminar_servidor/$1"); // Eliminar servidor

// Panel de control, editar servidor y actualizar datos del servidor
$routes -> get("/vista/editar-server/(:num)", "Usuarioserver::editar_server/$1"); // Editar servidor
$routes -> post("/server/actualizar/(:num)", "Usuarioserver::actualizar_server/$1"); // Actualizar los datos del servidor
$routes -> get("/vista/panel-control/(:num)", "Usuarioserver::panelcontrol/$1"); // vista panel de control

// === Exportar a excel ===
$routes -> get("/administrador/exportar_servidor", "Administrador::exportar_servidor"); // Exportar excel de los servidores
$routes -> post("/administrador/exportar_servidor", "Administrador::exportar_servidor");
$routes -> get("/administrador/exportar_usuarios", "Administrador::exportar_usuarios"); // Exportar excel de los usuarios
$routes -> post("/administrador/exportar_usuarios", "Administrador::exportar_usuarios");

// === Editar y actualizar datos del usuario ===
$routes -> get("/vista/editar-usuario/(:num)", "Usuario::editar_usuario/$1"); // Editar usaurio
$routes -> post("/usuario/actualizar/(:num)", "Usuario::actualizar_usuario/$1"); // Actualizar datos del usuario

$routes -> get("general/token/(:num)", "Usuarioserver::general_token/$1");
$routes -> get("usuario/panelcontrol/(:num)", "Usuarioserver::panelcontrol/$1");

$routes -> get("/server/eliminar/(:num)",  "Usuarioserver::eliminar_servidor/$1"); // Eliminar tunnel
