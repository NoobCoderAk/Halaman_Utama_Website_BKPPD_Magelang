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

$routes->get('kategori', 'Admin\KategoriController::index');
$routes->get('carousel', 'Admin\CarouselController::index');
$routes->get('egov', 'Admin\EgovController::index');
$routes->get('berita-utama', 'Admin\KategoriController::beritaView');
$routes->get('galeri', 'Admin\GaleriController::index');
$routes->get('pengumuman', 'Admin\PengumumanController::index');
$routes->get('artikel', 'Admin\ArtikelController::index');
$routes->get('agenda', 'Admin\KategoriController::agendaView');
$routes->get('jadwal', 'Admin\KategoriController::jadwalView');
$routes->get('map', 'Admin\KategoriController::mapView');
$routes->get('survei-kepuasan', 'Admin\KategoriController::surveiView');

// Admin POST
$routes->post('kategori/tambah', 'Admin\KategoriController::storeKategori');
$routes->post('carousel/tambah', 'Admin\CarouselController::storeCarousel');
$routes->post('egov/tambah', 'Admin\EgovController::storeEgov');

$routes->post('galeri/tambah', 'Admin\GaleriController::storeGaleri');
$routes->post('pengumuman/tambah', 'Admin\PengumumanController::storePengumuman');
$routes->post('artikel/tambah', 'Admin\ArtikelController::storeArtikel');



// Admin UPDATE
$routes->put('kategori/edit/(:num)', 'Admin\KategoriController::updateKategori/$1');
$routes->put('carousel/edit/(:num)', 'Admin\CarouselController::updateCarousel/$1');
$routes->put('egov/edit/(:num)', 'Admin\EgovController::updateEgov/$1');

$routes->put('galeri/edit/(:num)', 'Admin\GaleriController::updateGaleri/$1');
$routes->put('pengumuman/edit/(:num)', 'Admin\PengumumanController::updatePengumuman/$1');
$routes->put('artikel/edit/(:num)', 'Admin\ArtikelController::updateArtikel/$1');


// Admin DELETE
$routes->delete('kategori/hapus/(:num)', 'Admin\KategoriController::deleteKategori/$1');
$routes->delete('carousel/hapus/(:num)', 'Admin\CarouselController::deleteCarousel/$1');
$routes->delete('egov/hapus/(:num)', 'Admin\EgovController::deleteEgov/$1');

$routes->delete('galeri/hapus/(:num)', 'Admin\GaleriController::deleteGaleri/$1');
$routes->delete('pengumuman/hapus/(:num)', 'Admin\PengumumanController::deletePengumuman/$1');
$routes->delete('artikel/hapus/(:num)', 'Admin\ArtikelController::deleteArtikel/$1');
