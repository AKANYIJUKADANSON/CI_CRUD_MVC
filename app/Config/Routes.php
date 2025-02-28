<?php

use App\Controllers\NewsController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\ServicesController;
use App\Controllers\ProductsController;
use App\Controllers\FormController;
use App\Controllers\EDMSController;
use App\Controllers\UsersController;

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


// FormValidate route rule
// $routes->get('forms/signup', [FormController::class,'signup']);

$routes->get('forms/signup', 'FormController::signup');
$routes->post('forms/signup', 'FormController::signup');

$routes->get('forms/login', 'FormController::login');
$routes->post('forms/authenticate', 'FormController::authenticate');

/**
 * ------------------------------------------------------------
 * ----------------- EDMS -------------------------------------
 * ------------------------------------------------------------
 */
// $routes->get('edms/dashboard', [FormController::class,'dashboard']);
$routes->get('edms/dashboard', [EDMSController::class,'dashboard']);

// ----------------- departments
$routes->get('edms/departments', [EDMSController::class,'departments']);
$routes->post('/edms/departments', [EDMSController::class,'addDepartments']);

$routes->get('/edms/update_deptmt/(:segment)', [EDMSController::class,'edit']);
$routes->put('/edms/update_deptmt/(:segment)', [EDMSController::class,'updateDepartment']);

$routes->get('/edms/activate/(:segment)', [EDMSController::class,'activateButton']);
$routes->get('/edms/deactivate/(:segment)', [EDMSController::class,'deactivateButton']);
$routes->get('/edms/delete_dept/(:segment)', [EDMSController::class,'deleteDepartment']);



// ----------------  Users
$routes->get('edms/auth', [UsersController::class,'users']);
// $routes->post('/edms/auth', [UsersController::class,'users']);
$routes->post('/edms/create_user', [UsersController::class,'createUser']);
// Updating
$routes->get('/edms/update/(:segment)', [UsersController::class,'edit']);
$routes->put('/edms/update/(:segment)', [UsersController::class,'updateUser']);
$routes->get('/edms/delete/(:segment)', [UsersController::class,'deleteUser']);