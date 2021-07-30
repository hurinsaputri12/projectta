<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// register
Route::get('/register','AuthController@tampilRegister')->name('auth.register');
Route::post('/reg', 'AuthController@register')->name('reg');
// login
Route::get('/login','AuthController@tampilLogin')->name('auth.login');
Route::post('/log', 'AuthController@login')->name('log');
// reset
Route::get('/reset','AuthController@tampilReset')->name('auth.reset');
Route::post('/res', 'AuthController@reset')->name('res');
// logout
Route::get('/logout', 'AuthController@logout')->name('auth.logout');


Route::group(['middleware' => ['auth', 'admin-role']], function(){
    // buku cetak
    Route::get('/tambahadmin','AdminController@tambahAdmin')->name('admin.tambahadmin');
    Route::post('/upadmin', 'AdminController@upAdmin')->name('upadmin');
    Route::get('/admin/beranda','AdminController@beranda')->name('admin.beranda');
    Route::get('/admin/buku/buku','BukuController@index')->name('admin.buku.buku');
    Route::get('/admin/buku/tambahbuku', 'BukuController@create')->name('admin.buku.tambahbuku');
    Route::post('/admin/buku/storebuku','BukuController@store')->name('admin.buku.storebuku');
    Route::get('/admin/buku/editbuku/{id}','BukuController@edit')->name('admin.buku.editbuku');
    Route::post('/admin/buku/updatebuku/{id}','BukuController@update')->name('admin.buku.updatebuku');
    Route::get('/admin/buku/hapusbuku/{id}','BukuController@destroy')->name('admin.buku.hapusbuku');
    // ebook
    Route::get('/admin/ebook/ebook','EbookController@index')->name('admin.ebook.ebook');
    Route::get('/admin/ebook/tambahebook', 'EbookController@create')->name('admin.ebook.tambahebook');
    Route::post('/admin/ebook/storeebook','EbookController@store')->name('admin.ebook.storeebook');
    Route::get('/admin/ebook/editebook/{id}','EbookController@edit')->name('admin.ebook.editebook');
    Route::post('/admin/ebook/updateebook/{id}','EbookController@update')->name('admin.ebook.updateebook');
    Route::get('/admin/buku/hapusebook/{id}','EbookController@destroy')->name('admin.ebook.hapusebook');
    Route::get('/admin/ebook/filepdf/{id}','EbookController@tampilEbook')->name('admin.ebook.filepdf');
    // lapak baca
    Route::get('/admin/lapak/lapak','LapakController@index')->name('admin.lapak.lapak');
    Route::get('/admin/lapak/tambahlapak', 'LapakController@create')->name('admin.lapak.tambahlapak');
    Route::post('/admin/lapak/storelapak','LapakController@store')->name('admin.lapak.storelapak');
    Route::get('/admin/lapak/detaillapak/{id}','LapakController@show')->name('admin.lapak.detaillapak');
    Route::get('/admin/lapak/editlapak/{id}','LapakController@edit')->name('admin.lapak.editlapak');
    Route::post('/admin/lapak/updatelapak/{id}','LapakController@update')->name('admin.lapak.updatelapak');
    Route::get('/admin/lapak/hapuslapak/{id}','LapakController@destroy')->name('admin.lapak.hapuslapak');
    Route::get('/admin/lapak/validasirelawan','LapakController@validasiRelawan')->name('admin.lapak.validasirelawan');
    Route::post('/admin/lapak/upvalidasirelawan/{id}','LapakController@upValidasiRelawan')->name('admin.lapak.upvalidasirelawan');
    Route::get('/admin/lapak/daftarrelawan','LapakController@daftarRelawan')->name('admin.lapak.daftarrelawan');
    Route::get('/admin/lapak/hapusrelawan/{id}','LapakController@hapusRelawan')->name('admin.lapak.hapusrelawan');
    // pengguna
    Route::get('/admin/pengguna/pengguna','PenggunaController@index')->name('admin.pengguna.pengguna');
    // donasi buku
    Route::get('/admin/donasibuku/validasipengajuandonasi','DonasiController@validasiPengajuanDonasiBuku')->name('admin.donasibuku.validasipengajuandonasi');
    Route::post('/admin/donasibuku/upvalidasipengajuandonasi/{id}','DonasiController@upValidasiPengajuanDonasi')->name('admin.donasibuku.upvalidasipengajuandonasi');
    Route::get('/admin/donasibuku/daftardonasi','DonasiController@daftarDonasiBuku')->name('admin.donasibuku.daftardonasi');
    Route::get('/admin/donasibuku/validasidonasi','DonasiController@validasiDonasiBuku')->name('admin.donasibuku.validasidonasi');
    Route::post('/admin/donasibuku/upvalidasidonasi/{id}','DonasiController@upValidasiDonasi')->name('admin.donasibuku.upvalidasidonasi');
    Route::get('/admin/donasibuku/migrasidatabuku/{id}','DonasiController@migrasiDataBuku')->name('admin.donasibuku.migrasidatabuku');
    Route::post('/admin/donasi/upmigrasidatabuku/{id}','DonasiController@upMigrasiDataBuku')->name('admin.donasi.upmigrasidatabuku');
    // donasi ebook
    Route::get('/admin/donasiebook/validasipengajuandonasiebook','DonasiController@validasiPengajuanDonasiEbook')->name('admin.donasiebook.validasipengajuandonasiebook');
    Route::post('/admin/donasiebook/upvalidasipengajuandonasiebook/{id}','DonasiController@upValidasiPengajuanDonasiEbook')->name('admin.donasiebook.upvalidasipengajuandonasiebook');
    Route::get('/admin/donasiebook/daftardonasiebook','DonasiController@daftarDonasiEbook')->name('admin.donasiebook.daftardonasiebook');
    Route::get('/admin/donasiebook/validasidonasiebook','DonasiController@validasiDonasiEbook')->name('admin.donasiebook.validasidonasiebook');
    Route::post('/admin/donasiebook/upvalidasidonasiebook/{id}','DonasiController@upValidasiDonasiEbook')->name('admin.donasiebook.upvalidasidonasiebook');
    Route::get('/admin/donasiebook/migrasidataebook/{id}','DonasiController@migrasiDataEbook')->name('admin.donasiebook.migrasidataebook');
    Route::post('/admin/donasiebook/upmigrasidatabebook/{id}','DonasiController@upMigrasiDataEbook')->name('admin.donasiebook.upmigrasidataebook');
    Route::get('/admin/donasiebook/filepdf/{id}','DonasiController@tampilEbook')->name('admin.donasiebook.filepdf');
});

