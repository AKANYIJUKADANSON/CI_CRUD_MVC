<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\ServicesController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Services route
$routes->get('services', [ServicesController::class, 'index']);

// Adding the route for the pages
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'index']);
