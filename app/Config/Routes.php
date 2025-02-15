<?php

use App\Controllers\NewsController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\ServicesController;
use App\Controllers\ProductsController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Services route
$routes->get('services', [ServicesController::class, 'index']);

// Products rout rules
$routes->get('products', [ProductsController::class, 'index']);

/**
 * --------------------------News route rules
 */
// News route rule
$routes->get('news/', [NewsController::class,'index']);
$routes->get('news/(:segment)', [NewsController::class,'show']);


// Adding the route for the pages
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'index']);


