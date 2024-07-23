<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//regiones
$routes->get('ver_regiones', 'RegionesController::index');
$routes->get('crearRegion', 'RegionesController::nuevaRegion');
$routes->post('crearRegion', 'RegionesController::agregarRegion');
$routes->get('eliminar_Region/(:num)', 'RegionesController::eliminarRegion/$1');

//niveles academicos
$routes->get('ver_nivelesacademicos', 'NivelesAcademicosController::index');
$routes->get('crearNivelAcademico', 'NivelesAcademicosController::nuevoNivelAcademico');
$routes->post('crearNivelAcademico', 'NivelesAcademicosController::agregarNivelAcademico');
$routes->get('eliminar_NivelAcademico/(:num)', 'NivelesAcademicosController::eliminarNivelAcademico/$1');

//ciudadanos
$routes->get('ver_ciudadanos', 'CiudadanosController::index');
$routes->get('crearCiudadano', 'CiudadanosController::nuevosCiudadanos');
$routes->post('crearCiudadano', 'CiudadanosController::agregarCiudadano');
$routes->get('eliminar_ciudadano/(:num)', 'CiudadanosController::eliminarCiudadano/$1');

//departamentos
$routes->get('ver_departamentos', 'DepartamentosController::index');
$routes->get('crearDepartamento', 'DepartamentosController::nuevosDepartamentos');
$routes->post('crearDepartamento', 'DepartamentosController::agregarDepartamentos');
$routes->get('eliminar_departamentos/(:num)', 'DepartamentosControlle::eliminarDepartamento/$1');

//municipios
$routes->get('ver_municipios', 'MunicipiosController::index');
$routes->get('crearMunicipio', 'MunicipiosController::nuevosMunicipios');
$routes->post('crearMunicipio', 'MunicipiosController::agregarMunicipio');
$routes->get('eliminar_municipios/(:num)', 'MunicipiosController::eliminarMunicipio/$1');

