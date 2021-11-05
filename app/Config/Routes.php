<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/productos/registro', 'Productos::index'); 
$routes -> get('/productos/ingreso', 'Animales::index');
$routes -> get('/productos/listado', 'Productos::buscar');
$routes -> get('/productos/listado/animales', 'Animales::buscar');


$routes -> post('/productos/registro/nuevo', 'Productos::registrar'); // ruta que me llevara la funcion registrar
$routes -> post('/productos/ingreso/animales', 'Animales::ingreso');// ruta que me llevara a la funcion ingresar
$routes -> delete('/productos/eliminar/(:num)', 'Productos::eliminar/$1');// lo que le digo a codeignater es que va a llevar cualquier numero, el 1 es porque estoy diciendo que eliminar lleva un dato
$routes -> post('/productos/editar/(:num)', 'Productos::editar/$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
