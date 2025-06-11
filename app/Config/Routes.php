<?php

namespace Config;

use App\Controllers\Registrasi;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Web');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//akses awal
$routes->get('/', 'Web::index');
$routes->get('/home', 'Menu::home');
$routes->get('/homeuser', 'Menu::homeuser');
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/cek_login', 'Auth::cek_login');
$routes->get('/auth/logout', 'Auth::logout');
$routes->get('/profil', 'TabelUser::profil');

//daftar
$routes->get('daftar/formdaftar', 'Registrasi::formcreate');
$routes->post('daftar/formstore', 'Registrasi::formstore');
$routes->get('daftar/getusername', 'Registrasi::getusername');
// $routes->get('daftar/dokdaftar', 'Registrasi::dokcreate');
// $routes->post('daftar/dokstore', 'Registrasi::dokstore');
// $routes->post('daftar/userstore', 'Registrasi::userstore');  

//akses halaman
$routes->get('/menu/dashboard', 'Menu::dashboard');

// ADMIN
// =================================

//tabel data siswa
$routes->get('datasiswa/index', 'DataSiswa::index');
$routes->post('datasiswa/hapus', 'DataSiswa::hapus');
$routes->post('datasiswa/edit', 'DataSiswa::edit');
$routes->post('datasiswa/update', 'DataSiswa::update');
    // $routes->get('datasiswa/tambah', 'DataSiswa::formtambah');
    // $routes->post('datasiswa/store', 'DataSiswa::store');

//tabel user & akses
$routes->get('tabeluser/index', 'TabelUser::index');
$routes->post('tabeluser/edit', 'TabelUser::edit');
$routes->post('tabeluser/update', 'TabelUser::update');
    // $routes->get('tabeluser/tambah', 'TabelUser::formtambah');
    // $routes->post('tabeluser/store', 'TabelUser::store');
    // $routes->post('tabeluser/hapus', 'TabelUser::hapus');

//tabel dokumen siswa 
$routes->get('dokumensiswa/index', 'DokumenSiswa::index');
$routes->get('dokumensiswa/lihat/(:num)', 'DokumenSiswa::lihat/$1');
$routes->post('dokumensiswa/update', 'DokumenSiswa::update');
$routes->post('dokumensiswa/valid', 'DokumenSiswa::valid');
    // $routes->get('dokumensiswa/tambah', 'DokumenSiswa::formtambah');
    // $routes->post('dokumensiswa/store', 'DokumenSiswa::store');
    // $routes->post('dokumensiswa/hapus', 'DokumenSiswa::hapus');
    // $routes->post('dokumensiswa/edit', 'DokumenSiswa::edit');
    
//tabel sertifikat
$routes->get('sertifikat/index', 'Sertifikat::index');
$routes->get('sertifikat/lihat/(:num)', 'Sertifikat::lihat/$1');
$routes->post('sertifikat/update', 'Sertifikat::update');
$routes->post('sertifikat/valid', 'Sertifikat::valid');
    // $routes->get('sertifikat/tambah', 'Sertifikat::formtambah');
    // $routes->post('sertifikat/store', 'Sertifikat::store');
    // $routes->post('sertifikat/hapus', 'Sertifikat::hapus');
    // $routes->post('sertifikat/edit', 'Sertifikat::edit');
    
//master validasi pendaftar
$routes->get('pendaftar/tabel', 'ValidasiPendaftar::index');
$routes->get('pendaftar/lihat/(:num)', 'ValidasiPendaftar::lihat/$1');
$routes->get('pendaftar/dokumen/(:num)', 'ValidasiPendaftar::dokumen/$1');

$routes->get('pendaftar/bayar/(:num)', 'ValidasiPendaftar::bayar/$1');
$routes->post('pendaftar/storeall', 'ValidasiPendaftar::storeAll');
$routes->get('pendaftar/cetak/(:num)', 'Cetak::print/$1');
$routes->get('pendaftar/cetak_bmt/(:num)', 'Cetak::print_bmt/$1');

$routes->post('pendaftar/valid', 'ValidasiPendaftar::valid');
$routes->post('pendaftar/terima', 'ValidasiPendaftar::terima');


//tabel pembayaran
$routes->get('pembayaran/index', 'Pembayaran::index');
$routes->get('pembayaran/lihat/(:num)', 'Pembayaran::lihat/$1');
$routes->get('pembayaran/tambah', 'Pembayaran::formtambah');
$routes->get('pembayaran/tambahpaket', 'Pembayaran::formtambahpaket');
// $routes->post('pembayaran/storepersatu', 'Pembayaran::storeEach');
$routes->post('pembayaran/storeall', 'Pembayaran::storeAll');
$routes->get('pembayaran/hapus/(:num)', 'Pembayaran::hapus/$1');
$routes->get('pembayaran/edit/(:any)', 'Pembayaran::edit/$1');
$routes->post('pembayaran/update', 'Pembayaran::update');

$routes->get('pembayaran/cetak/(:num)', 'Pembayaran::print_pembiayaan/$1');

// PENDAFTAR
// ==========================

$routes->get('user/data/lihat', 'UserController::data');
$routes->post('user/data/edit', 'UserController::editdata');

$routes->get('user/dokumen/lihat', 'UserController::dokumen');
$routes->get('user/dokumen/tambah', 'UserController::tambahdok');
$routes->post('user/dokumen/store', 'DokumenSiswa::store');
$routes->post('user/dokumen/edit', 'UserController::editdokumen');
$routes->post('user/dokumen/update', 'DokumenSiswa::update');

$routes->get('user/bayar/lihat', 'UserController::pembayaran');

$routes->get('user/sertifikat/lihat', 'UserController::sertifikat');
$routes->get('user/sertifikat/tambah', 'UserController::tambahdok');
$routes->post('user/sertifikat/store', 'SertifikatSiswa::store');
$routes->post('user/sertifikat/edit', 'UserController::editsertifikat');
$routes->post('user/sertifikat/update', 'SertifikatSiswa::update');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
