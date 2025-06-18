<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Paginas::index');
$routes->get('nosotros', 'Paginas::nosotros');
$routes->get('login', 'Paginas::login');
$routes->get('registro', 'Usuario::create');
$routes->post('usuario/guardar', 'Usuario::guardar');
$routes->post('usuario/ingresar', 'Usuario::ingresar');
$routes->get('prueba-sesion', 'Usuario::pruebaSesion');
$routes->get('usuario/cerrar_sesion', 'Usuario::cerrar_sesion');




