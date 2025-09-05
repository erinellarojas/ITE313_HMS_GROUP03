<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');

$routes->get('/login', 'Auth::login');
$routes->post('/auth/attemptLogin', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/register', 'Auth::register');
$routes->post('/auth/attemptRegister', 'Auth::attemptRegister');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/patients', 'Patients::index');
$routes->get('/patients/add', 'Patients::add');
$routes->post('/patients/store', 'Patients::store');
$routes->get('/patients/edit/(:num)', 'Patients::edit/$1');
$routes->post('/patients/update/(:num)', 'Patients::update/$1');
$routes->get('/patients/delete/(:num)', 'Patients::delete/$1');

$routes->get('/appointments', 'Appointment::index');
$routes->match(['get', 'post'], '/appointments/create', 'Appointment::create');
$routes->get('/appointments/delete/(:num)', 'Appointment::delete/$1');

$routes->get('/billing', 'Billing::index');
$routes->get('/billing/create', 'Billing::create');
$routes->post('/billing/store', 'Billing::store');
$routes->get('/billing/edit/(:num)', 'Billing::edit/$1');
$routes->post('/billing/update/(:num)', 'Billing::update/$1');
$routes->get('/billing/delete/(:num)', 'Billing::delete/$1');

$routes->get('/doctors', 'Doctor::index');
$routes->get('/doctors/create', 'Doctor::create');
$routes->post('/doctors/store', 'Doctor::store');
$routes->get('/doctors/edit/(:num)', 'Doctor::edit/$1');
$routes->post('/doctors/update/(:num)', 'Doctor::update/$1');
$routes->get('/doctors/delete/(:num)', 'Doctor::delete/$1');

$routes->get('/laboratory', 'Laboratory::index');
$routes->get('/laboratory/create', 'Laboratory::create');
$routes->post('/laboratory/store', 'Laboratory::store');
$routes->get('/laboratory/edit/(:num)', 'Laboratory::edit/$1');
$routes->post('/laboratory/update/(:num)', 'Laboratory::update/$1');
$routes->get('/laboratory/delete/(:num)', 'Laboratory::delete/$1');

$routes->get('/nurses', 'Nurse::index');
$routes->get('/nurses/create', 'Nurse::create');
$routes->post('/nurses/store', 'Nurse::store');
$routes->get('/nurses/edit/(:num)', 'Nurse::edit/$1');
$routes->post('/nurses/update/(:num)', 'Nurse::update/$1');
$routes->get('/nurses/delete/(:num)', 'Nurse::delete/$1');

$routes->get('/pharmacy', 'Pharmacy::index');
$routes->get('/pharmacy/create', 'Pharmacy::create');
$routes->post('/pharmacy/store', 'Pharmacy::store');
$routes->get('/pharmacy/edit/(:num)', 'Pharmacy::edit/$1');
$routes->post('/pharmacy/update/(:num)', 'Pharmacy::update/$1');
$routes->get('/pharmacy/delete/(:num)', 'Pharmacy::delete/$1');

$routes->get('/users', 'Users::index');
$routes->get('/users/add', 'Users::add');
$routes->post('/users/store', 'Users::store');
$routes->get('/users/edit/(:num)', 'Users::edit/$1');
$routes->post('/users/update/(:num)', 'Users::update/$1');
$routes->get('/users/delete/(:num)', 'Users::delete/$1');
