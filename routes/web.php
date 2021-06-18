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

Route::get('/register','AuthController@tampilRegister')->name('auth.register');
Route::post('/reg', 'AuthController@register')->name('reg');
Route::get('/login','AuthController@tampilLogin')->name('auth.login');
Route::post('/log', 'AuthController@login')->name('log');
Route::get('/reset','AuthController@tampilReset')->name('auth.reset');
Route::post('/res', 'AuthController@reset')->name('res');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');


Route::group(['middleware' => ['auth', 'admin-role']], function(){
    Route::get('/tambahadmin','AdminController@tambahAdmin')->name('admin.tambahadmin');
    Route::post('/upadmin', 'AdminController@upAdmin')->name('upadmin');
    Route::get('/admin/beranda','AdminController@beranda')->name('admin.beranda');
});

