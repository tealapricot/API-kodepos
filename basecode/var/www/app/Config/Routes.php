<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->group('kodepos', static function ($routes) {
    $routes->get('/', 'KodePos::index');
    $routes->get('(:num)', 'KodePos::kode/$1');
    $routes->get('kota/(:alphanum)', 'KodePos::kota/$1');
    $routes->get('kecamatan/(:alphanum)', 'KodePos::kecamatan/$1');
    $routes->get('desa/(:alphanum)', 'KodePos::desa/$1');
});
