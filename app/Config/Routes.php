<?php

use App\Controllers\AdminController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('/login', 'LoginController');
$routes->post('/login/auth', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');


// SUPERADMIN
$routes->group('superadmin', function ($routes) {
    $routes->get('/', 'KKController');
    $routes->get('banner', 'KKController::banner');
    $routes->get('banner/add', 'AdminController::addBanner');
    $routes->post('banner/add', 'AdminController::postBanner');
    $routes->put('banner/edit/(:num)', 'AdminController::editBanner/$1');
    $routes->delete('banner/del/(:num)', 'AdminController::deleteBanner/$1');
    $routes->post('banner/edit/update/(:num)', 'AdminController::updateBanner/$1');
});

// COBA HILANGKAN UNIK KEY PADA KOLOM IMAGE
