<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_clientes', 'ClientesController::index');
$routes->get('ver_lineas_Telefonicas', 'LineasTelefonicasController::index');

$routes->get('agregar_linea_telefonica', 'LineasTelefonicasController::nuevaLineaTelefonica');
$routes->post('agregar_linea_telefonica', 'LineasTelefonicasController::agregarLineaTelefonica');

$routes->get('ver_planes', 'PlanesController::index');
$routes->get('Nuevo_plan', 'PlanesController::nuevoPlan');
$routes->post('agregar_plan', 'PlanesController::agregar_plan');


$routes->post('agregar_cliente', 'ClientesController::agregarCliente');
$routes->get('agregar_cliente', 'ClientesController::nuevoCliente');