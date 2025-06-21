<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::attemptRegister');
$routes->post('/login', 'Auth::attemptLogin');
$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Home::index', ['filter' => 'auth']);

$routes->group('admin', ['filter' => 'auth:admin'], function($routes) {
    $routes->get('books', 'Admin\Book::index');
    $routes->get('books/create', 'Admin\Book::create');
    $routes->post('books/store', 'Admin\Book::store');
    $routes->get('books/edit/(:num)', 'Admin\Book::edit/$1');
    $routes->post('books/update/(:num)', 'Admin\Book::update/$1');
    $routes->get('books/delete/(:num)', 'Admin\Book::delete/$1');
});

$routes->get('/borrow', 'Borrow::create', ['filter' => 'auth']);
$routes->post('/borrow/store', 'Borrow::store', ['filter' => 'auth']);

$routes->get('/reports', 'Report::index', ['filter' => 'auth']);