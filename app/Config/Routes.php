<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
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

// menuju ke controller home dengan memanggil function atau method  index
$routes->get('/', 'Home::index');
$routes->get('/adminDashboard', 'AdminController::index');
$routes->get('/adminProposal', 'AdminController::proposal');
$routes->get('/daftarDosen', 'AdminController::daftarDosen');
$routes->get('/adminPengumuman', 'AdminController::adminPengumuman');
$routes->get('/pengumumanMahasiswa', 'AdminController::pengumumanMahasiswa');
$routes->get('/kaprodiDosen', 'AdminController::kaprodiDosen');
$routes->get('/adminMahasiswa', 'AdminController::adminMahasiswa');
$routes->get('/kaprodiMahasiswa', 'AdminController::kaprodiMahasiswa');
$routes->get('/kaprodiProposal', 'AdminController::kaprodiProposal');
$routes->get('/kaprodiHasil', 'AdminController::kaprodiHasil');
$routes->get('/kaprodiTutup', 'AdminController::kaprodiTutup');
$routes->get('/adminHasil', 'AdminController::hasil');
$routes->get('/dosenProposal', 'DosenController::proposal');
$routes->get('/dosenHasil', 'DosenController::hasil');
$routes->get('/dosenTutup', 'DosenController::tutup');
$routes->get('/adminTutup', 'AdminController::tutup');
$routes->get('/mahasiswaDashboard', 'DosenController::index');
$routes->get('/mahasiswaDashboard2', 'MahasiswaController::index2');
$routes->get('/chatKaprodiAdmin', 'MahasiswaController::index4');
$routes->get('/chatAdminKaprodi', 'MahasiswaController::index5');
$routes->get('/chatDosenMhs/(:any)', function ($id) {
    // return ($id);
    session()->set('id_chat', $id);
    return redirect()->to(base_url() . 'chatDosenMhs');
});

$routes->get('/cetakMhs', 'AdminController::cetakMhs');
$routes->get('/cetakMhsACCProposal', 'AdminController::cetakMhsACCProposal');
$routes->get('/cetakMhsBelumACCProposal', 'AdminController::cetakMhsBelumACCProposal');
$routes->get('/cetakMhsACCHasil', 'AdminController::cetakMhsACCHasil');
$routes->get('/cetakMhsBelumACCHasil', 'AdminController::cetakMhsBelumACCHasil');
$routes->get('/cetakMhsACCTutup', 'AdminController::cetakMhsACCTutup');
$routes->get('/cetakMhsBelumACCTutup', 'AdminController::cetakMhsBelumACCTutup');

$routes->get('/chatDosen', 'DosenController::index');
$routes->get('/chatAdmin', 'AdminController::index');
$routes->get('/chatKaprodi', 'KaprodiController::index');
$routes->get('/chatDosenMhs', 'DosenController::index3');
$routes->post('/tambahChatDariMhs', 'DosenController::tambahChatDariMhs');
$routes->post('/tambahChatDariKaprodi', 'DosenController::tambahChatDariKaprodi');
$routes->post('/tambahChatDariAdmin', 'DosenController::tambahChatDariAdmin');
$routes->post('/tambahChatDariDosen1', 'DosenController::tambahChatDariDosen1');
$routes->post('/tambahChatDariDosen2', 'DosenController::tambahChatDariDosen2');
$routes->post('/tambahChatDariMhs2', 'DosenController::tambahChatDariMhs2');
$routes->post('/tambahMahasiswa', 'AdminController::tambahMahasiswa');
$routes->post('/editmhs', 'AdminController::editmhs');
$routes->post('/tambahDosen', 'AdminController::tambahDosen');
$routes->post('/tambahPengumuman', 'AdminController::tambahPengumuman');
$routes->post('/pindahKeTutup/(:num)', 'AdminController::pindahKeTutup/$1');
$routes->post('/pindahKeHasil/(:num)', 'AdminController::pindahKeHasil/$1');
$routes->post('/ubahStatusAccProposal/(:num)', 'DosenController::ubahStatusAccProposal/$1');
$routes->get('/ubahStatusAccKaprodiProposal/(:num)', 'DosenController::ubahStatusAccKaprodiProposal/$1');
$routes->get('/ubahStatusAccKaprodiHasil/(:num)', 'DosenController::ubahStatusAccKaprodiHasil/$1');
$routes->get('/ubahStatusAccKaprodiTutup/(:num)', 'DosenController::ubahStatusAccKaprodiTutup/$1');
$routes->post('/ubahStatusAccHasil/(:num)', 'DosenController::ubahStatusAccHasil/$1');
$routes->post('/ubahStatusAccTutup/(:num)', 'DosenController::ubahStatusAccTutup/$1');
$routes->get('/deleteMahasiswaProposal/(:num)', 'AdminController::deleteMahasiswaProposal/$1');
$routes->get('/deleteDosen/(:num)', 'AdminController::deleteDosen/$1');
$routes->get('/deletePengumuman/(:num)', 'AdminController::deletePengumuman/$1');
$routes->get('/deleteMahasiswaHasil/(:num)', 'AdminController::deleteMahasiswaHasil/$1');
$routes->get('/deleteMahasiswaTutup/(:num)', 'AdminController::deleteMahasiswaTutup/$1');
$routes->post('/lampirkanFile/save', 'DosenController::lampirkanFileMhs');
$routes->post('/lampirkanFile2/save', 'DosenController::lampirkanFileMhs2');
$routes->post('/lampirkanFileDosen1/save', 'DosenController::lampirkanFileDosen1');
$routes->post('/lampirkanFileDosen2/save', 'DosenController::lampirkanFileDosen2');
$routes->post('/lampirkanFileKaprodi/save', 'DosenController::lampirkanFileKaprodi');
$routes->post('/lampirkanFileAdmin/save', 'DosenController::lampirkanFileAdmin');
$routes->post('/login/cekJabatanLogin', 'LoginController::cekLogin');
$routes->post('/DosenController/delete/(:num)', 'DosenController::update/$1');
$routes->post('/deleteChatKaprodi/(:num)', 'DosenController::update5/$1');
$routes->post('/deleteChatAdmin/(:num)', 'DosenController::update6/$1');
$routes->post('/DosenController/delete2/(:num)', 'DosenController::update2/$1');
$routes->post('/DosenController/deleteChat1/(:num)', 'DosenController::update3/$1');
$routes->post('/DosenController/deleteChat2/(:num)', 'DosenController::update4/$1');
$routes->post('/DosenController/deletePermanen/(:num)', 'DosenController::deletePermanen/$1');
$routes->post('/deletePermanenChatKaprodi/(:num)', 'DosenController::deletePermanenChatKaprodi/$1');
$routes->post('/deletePermanenChatAdmin/(:num)', 'DosenController::deletePermanenChatAdmin/$1');
$routes->post('/DosenController/deletePermanen2/(:num)', 'DosenController::deletePermanen2/$1');
$routes->post('/DosenController/deletePermanenDosen1/(:num)', 'DosenController::deletePermanenDosen1/$1');

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
