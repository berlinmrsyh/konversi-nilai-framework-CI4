<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'NilaiController::index'); // Mengarahkan langsung ke aksi index NilaiController
$routes->get('/nilai', 'NilaiController::index'); // Menambahkan rute untuk aksi index NilaiController
$routes->post('/hitung', 'NilaiController::hitung'); // Menambahkan rute untuk aksi hitung NilaiController
