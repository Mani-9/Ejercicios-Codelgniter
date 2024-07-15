<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_clientes', 'Clientes::index');
$routes->get('ver_lineas_Telefonicas', 'LineasTelefonicas::index');
$routes->get('ver_planes', 'Planes::index');

