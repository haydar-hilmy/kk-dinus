<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('/login', 'LoginController');
$routes->post('/login/auth', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');


// SUPERADMIN
$routes->get('/superadmin', 'KKController');
$routes->get('/superadmin/banner', 'KKController::banner');

$routes->get('/superadmin/banner/add', 'AdminController::addBanner');
$routes->post('/superadmin/banner/add', 'AdminController::postBanner');
$routes->delete('/superadmin/banner/del/(:num)', 'AdminController::deleteBanner/$1');