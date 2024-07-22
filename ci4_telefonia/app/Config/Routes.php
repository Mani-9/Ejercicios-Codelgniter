<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('ver_menu', 'Home::index');

//Lineas Telefonicas
$routes->get('ver_lineas_Telefonicas', 'LineasTelefonicasController::index');
$routes->get('agregar_linea_telefonica', 'LineasTelefonicasController::nuevaLineaTelefonica');
$routes->post('agregar_linea_telefonica', 'LineasTelefonicasController::agregarLineaTelefonica');
$routes->get('eliminar_linea_telefonica/(:num)', 'LineasTelefonicasController::eliminarLineaTelefonica/$1');

//Planes
$routes->get('ver_planes', 'PlanesController::index');
$routes->get('Nuevo_plan', 'PlanesController::nuevoPlan');
$routes->post('agregar_plan', 'PlanesController::agregar_plan');

//Clientes
$routes->get('ver_clientes', 'ClientesController::index');
$routes->post('agregar_cliente', 'ClientesController::agregarCliente');
$routes->get('agregar_cliente', 'ClientesController::nuevoCliente');
$routes->get('eliminar_cliente/(:num)', 'ClientesController::eliminarCliente/$1');