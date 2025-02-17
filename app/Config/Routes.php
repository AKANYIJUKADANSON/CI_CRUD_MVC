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

// Posting form
$routes->get('news/new', [NewsController::class,'new']);
// Rule to load the post to be edited

/**
 * ------------------------------------------------------------------------
 * --------------------- Updating a record --------------------------------
 * ------------------------------------------------------------------------
 */

 // Rule to load the form with data values for the specified record to be updated
$routes->get('news/update/(:segment)', [NewsController::class, 'loadItemToUpdate']);


// Rule to update the data after update button clicked
/**
 * ------------ /news/updatedata/(:segment) ---- Explained ---------
 * /news/dataUpdate =>>> is and should be the same way it appears in the action part of the form
 * /(:segment) =>>> is the other part that may come after such as the id to update
 */
$routes->post('/news/dataUpdate/(:segment)', [NewsController::class, 'update']);

/**
 * ------------------------------------------------------------------------
 * --------------------- Posting/Adding a record --------------------------------
 * ------------------------------------------------------------------------
 */

// Creating a post route rule
$routes->post('news', [NewsController::class,'create']);
$routes->get('news/(:segment)', [NewsController::class,'show']);


/**
 * ------------------------------------------------------------------------
 * --------------------- Deleting a record --------------------------------
 * ------------------------------------------------------------------------
 */
// Delete route rule
$routes->get('news/delete/(:segment)', [NewsController::class,'delete']);


// Adding the route rules for the pages
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'index']);


