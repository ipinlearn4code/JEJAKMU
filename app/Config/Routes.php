<?php

use CodeIgniter\Router\RouteCollection;
// use App\Controllers\FrontController;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'FrontController::dashboard');


$routes->get('/daftarkader', 'FrontController::daftarkader');

$routes->get('event/(:segment)', 'FrontController::event/$1');

$routes->get('jejakkabar/(:segment)', 'FrontController::jejakkabar/$1');

