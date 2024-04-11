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
    $routes->get('/', 'AdminController');
    
    $routes->get('banner', 'BannerController');
    $routes->get('banner/add', 'BannerController::addBanner');
    $routes->post('banner/add', 'BannerController::postBanner');
    $routes->put('banner/edit/(:num)', 'BannerController::editBanner/$1');
    $routes->delete('banner/del/(:num)', 'BannerController::deleteBanner/$1');
    $routes->post('banner/edit/update/(:num)', 'BannerController::updateBanner/$1');

    $routes->get('kk', 'KKController');
});