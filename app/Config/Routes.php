<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\RESTful\ResourceController;
// use App\Controllers\FrontController;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'FrontController::dashboard');


$routes->get('/daftarkader', 'FrontController::daftarkader');

$routes->get('/eventRutin', 'FrontController::eventRutin');
$routes->get('/eventSpesial', 'FrontController::eventSpesial');

$routes->get('/news', 'FrontController::news');
$routes->get('/artikel', 'FrontController::artikel');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::doLogin');
$routes->get('/logout', 'AuthController::logout');


$routes->resource('kader', ['controller' => 'KaderProfileController']);


