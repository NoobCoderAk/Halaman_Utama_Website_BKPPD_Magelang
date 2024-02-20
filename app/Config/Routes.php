<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Users GET
$routes->get('/', 'Users\Home::index');
$routes->get('/interaktif', 'Users\Home::interaktif');


// Admin GET
$routes->get('dashboard', 'Admin\DashboardController::index');

$routes->get('carousel', 'Admin\CarouselController::index');
$routes->get('egov', 'Admin\EgovController::index');
$routes->get('galeri', 'Admin\GaleriController::index');
$routes->get('pengumuman', 'Admin\PengumumanController::index');
$routes->get('artikel', 'Admin\ArtikelController::index');
$routes->get('agenda', 'Admin\AgendaController::index');
$routes->get('jadwal', 'Admin\JadwalController::index');
$routes->get('maps', 'Admin\MapsController::index');
$routes->get('survei-kepuasan', 'Admin\KategoriController::surveiView');

// Admin POST
$routes->post('carousel/tambah', 'Admin\CarouselController::storeCarousel');
$routes->post('egov/tambah', 'Admin\EgovController::storeEgov');
$routes->post('galeri/tambah', 'Admin\GaleriController::storeGaleri');
$routes->post('pengumuman/tambah', 'Admin\PengumumanController::storePengumuman');
$routes->post('artikel/tambah', 'Admin\ArtikelController::storeArtikel');
$routes->post('agenda/tambah', 'Admin\AgendaController::storeAgenda');
$routes->post('jadwal/tambah', 'Admin\JadwalController::storeJadwal');
$routes->post('maps/tambah', 'Admin\MapsController::storeMaps');



// Admin UPDATE
$routes->put('carousel/edit/(:num)', 'Admin\CarouselController::updateCarousel/$1');
$routes->put('egov/edit/(:num)', 'Admin\EgovController::updateEgov/$1');
$routes->put('galeri/edit/(:num)', 'Admin\GaleriController::updateGaleri/$1');
$routes->put('pengumuman/edit/(:num)', 'Admin\PengumumanController::updatePengumuman/$1');
$routes->put('artikel/edit/(:num)', 'Admin\ArtikelController::updateArtikel/$1');
$routes->put('agenda/edit/(:num)', 'Admin\AgendaController::updateAgenda/$1');
$routes->put('jadwal/edit/(:num)', 'Admin\JadwalController::updateJadwal/$1');
$routes->put('maps/edit/(:num)', 'Admin\MapsController::updateMaps/$1');


// Admin DELETE
$routes->delete('carousel/hapus/(:num)', 'Admin\CarouselController::deleteCarousel/$1');
$routes->delete('egov/hapus/(:num)', 'Admin\EgovController::deleteEgov/$1');
$routes->delete('galeri/hapus/(:num)', 'Admin\GaleriController::deleteGaleri/$1');
$routes->delete('pengumuman/hapus/(:num)', 'Admin\PengumumanController::deletePengumuman/$1');
$routes->delete('artikel/hapus/(:num)', 'Admin\ArtikelController::deleteArtikel/$1');
$routes->delete('agenda/hapus/(:num)', 'Admin\AgendaController::deleteAgenda/$1');
$routes->delete('jadwal/hapus/(:num)', 'Admin\JadwalController::deleteJadwal/$1');
$routes->delete('maps/hapus/(:num)', 'Admin\MapsController::deleteMaps/$1');
