<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// $routes->get('hallo', 'Hallo::index');

$routes->get('/', 'Barang::index');

// home barang
$routes->get('barang', 'Barang::index');
// halaman tambah
$routes->get('barang/tambah', 'Barang::tambah');
// halaman edit
$routes->get('barang/edit/(:any)', 'Barang::edit/$1');
// proses CRUD
// insert
$routes->post('barang/add', 'Barang::add');
// update
$routes->post('barang/update', 'Barang::update');
// hapus
$routes->get('barang/hapus/(:any)', 'Barang::hapus/$1');