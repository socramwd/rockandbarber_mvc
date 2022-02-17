<?php
require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use Controllers\PaginasController;
use MVC\Router;
use Controllers\ServicioController;

$router = new Router;

$router->get('/admin', [ServicioController::class, 'index']);
$router->get('/servicios/crear', [ServicioController::class, 'crear']);
$router->post('/servicios/crear', [ServicioController::class, 'crear']);
$router->get('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/actualizar', [ServicioController::class, 'actualizar']);
$router->post('/servicios/eliminar', [ServicioController::class, 'eliminar']);

$router->get('/', [PaginasController::class, 'index']);
$router->get('/barberia', [PaginasController::class, 'barberia']);
$router->get('/servicios', [PaginasController::class, 'servicios']);
$router->get('/reservas', [PaginasController::class, 'reservas']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);
$router->get('/blog', [PaginasController::class, 'blog']);
$router->get('/entrada', [PaginasController::class, 'entrada']);

$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

$router->comprobarRutas();