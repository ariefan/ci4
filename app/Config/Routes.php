<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/peserta', 'Peserta::index');
$routes->get('/peserta/create', 'Peserta::create');
$routes->post('/peserta/store', 'Peserta::store');
$routes->get('/peserta/edit/(:segment)', 'Peserta::edit/$1');
$routes->post('/peserta/update/(:segment)', 'Peserta::update/$1');
$routes->get('/peserta/delete/(:segment)', 'Peserta::delete/$1');
