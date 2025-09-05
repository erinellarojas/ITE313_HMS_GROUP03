<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');

$routes->get('/login', 'Auth::login');
$routes->post('/auth/attemptLogin', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/patients', 'Patients::index');
$routes->get('/patients/add', 'Patients::add');
$routes->post('/patients/store', 'Patients::store');
$routes->get('/patients/edit/(:num)', 'Patients::edit/$1');
$routes->post('/patients/update/(:num)', 'Patients::update/$1');
$routes->get('/patients/delete/(:num)', 'Patients::delete/$1');

$routes->get('/appointments', 'AppointmentController::index');
$routes->match(['get', 'post'], '/appointments/create', 'AppointmentController::create');
$routes->get('/appointments/delete/(:num)', 'AppointmentController::delete/$1');

$routes->get('/billing', 'BillingController::index');
$routes->get('/billing/create', 'BillingController::create');
$routes->post('/billing/store', 'BillingController::store');
$routes->get('/billing/edit/(:num)', 'BillingController::edit/$1');
$routes->post('/billing/update/(:num)', 'BillingController::update/$1');
$routes->get('/billing/delete/(:num)', 'BillingController::delete/$1');

$routes->get('/doctors', 'DoctorsController::index');
$routes->get('/doctors/create', 'DoctorsController::create');
$routes->post('/doctors/store', 'DoctorsController::store');
$routes->get('/doctors/edit/(:num)', 'DoctorsController::edit/$1');
$routes->post('/doctors/update/(:num)', 'DoctorsController::update/$1');
$routes->get('/doctors/delete/(:num)', 'DoctorsController::delete/$1');

$routes->get('/laboratory', 'LaboratoryController::index');
$routes->get('/laboratory/create', 'LaboratoryController::create');
$routes->post('/laboratory/store', 'LaboratoryController::store');
$routes->get('/laboratory/edit/(:num)', 'LaboratoryController::edit/$1');
$routes->post('/laboratory/update/(:num)', 'LaboratoryController::update/$1');
$routes->get('/laboratory/delete/(:num)', 'LaboratoryController::delete/$1');

$routes->get('/nurses', 'NursesController::index');
$routes->get('/nurses/create', 'NursesController::create');
$routes->post('/nurses/store', 'NursesController::store');
$routes->get('/nurses/edit/(:num)', 'NursesController::edit/$1');
$routes->post('/nurses/update/(:num)', 'NursesController::update/$1');
$routes->get('/nurses/delete/(:num)', 'NursesController::delete/$1');

$routes->get('/pharmacy', 'PharmacyController::index');
$routes->get('/pharmacy/create', 'PharmacyController::create');
$routes->post('/pharmacy/store', 'PharmacyController::store');
$routes->get('/pharmacy/edit/(:num)', 'PharmacyController::edit/$1');
$routes->post('/pharmacy/update/(:num)', 'PharmacyController::update/$1');
$routes->get('/pharmacy/delete/(:num)', 'PharmacyController::delete/$1');

$routes->get('/users', 'Users::index');
$routes->get('/users/add', 'Users::add');
$routes->post('/users/store', 'Users::store');
$routes->get('/users/edit/(:num)', 'Users::edit/$1');
$routes->post('/users/update/(:num)', 'Users::update/$1');
$routes->get('/users/delete/(:num)', 'Users::delete/$1');
