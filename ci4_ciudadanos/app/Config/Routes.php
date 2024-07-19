<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('ver_regiones', 'RegionesController::index');
$routes->get('crearRegion', 'RegionesController::nuevaRegion');
$routes->post('crearRegion', 'RegionesController::agregarRegion');

$routes->get('ver_nivelesacademicos', 'NivelesAcademicosController::index');
$routes->get('crearNivelAcademico', 'NivelesAcademicosController::nuevoNivelAcademico');
$routes->post('crearNivelAcademico', 'NivelesAcademicosController::agregarNivelAcademico');

$routes->get('ver_ciudadanos', 'Ciudadanos::index');

$routes->get('ver_departamentos', 'Departamentos::index');

$routes->get('ver_municipios', 'MunicipiosController::index');
$routes->get('crearMunicipio', 'MunicipiosController::nuevosMunicipios');
$routes->post('crearMunicipio', 'MunicipiosController::agregarMunicipio');

