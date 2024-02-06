<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
#$routes->get('/', 'Home::index');

// app/config/Routes.php
$routes->get('/','ArvoreController::index');
$routes->get('arvore', 'ArvoreController::index');
$routes->get('arvore/create', 'ArvoreController::create');
$routes->post('arvore/store', 'ArvoreController::store');
$routes->get('arvore/edit/(:num)', 'ArvoreController::edit/$1');
$routes->post('arvore/update', 'ArvoreController::update');
$routes->get('arvore/delete/(:num)', 'ArvoreController::delete/$1');

