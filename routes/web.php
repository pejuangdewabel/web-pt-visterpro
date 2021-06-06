<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/tentang-pt-graha-vister-mandiri', 'HomeController@about')->name('about');
Route::get('/dijual', 'HomeController@dijual')->name('dijual');
Route::get('/dijual/{id}', 'HomeController@dijualDetail')->name('detail-dijual');
Route::get('/disewakan', 'HomeController@disewakan')->name('disewakan');
Route::get('/disewakan/{id}', 'HomeController@disewakanDetail')->name('detail-disewakan');
// Route::post('/cari-property', 'HomeController@pencarian')->name('cari');

Route::get('/cari-property/wilayah/{wilayah?}/jenis/{jenis?}', 'HomeController@pencarian')->name('cari');

// Blog
Route::get('/artikel', 'BlogController@index')->name('artikel');
Route::get('/artikel/{slug}', 'BlogController@detail')->name('artikel-detail');
Route::get('/artikel/semua', 'BlogController@artikelSemua')->name('artikel-all');
Route::get('/artikel/new', 'BlogController@new')->name('new');

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/postlogin', 'Auth\LoginController@postLogin')->name('post-login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');



Route::prefix('dashboard-admin')
    ->middleware([
        'auth:admin',
        'ceklevel:admin'
    ])
    ->namespace('Admin')
    ->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard-admin');

        Route::resource('/data/properti-dijual', 'PropertyController');
        Route::get('/changeStatus/{id}', 'PropertyController@changeStatus')->name('changeStatus');

        Route::resource('/data/foto-banner', 'BannerController');
        Route::resource('/data/blog', 'BlogController');

        Route::resource('/data/legal', 'LegalController');

        Route::resource('/data/pengguna', 'PenggunaController');
        Route::resource('/about', 'AboutController');
        Route::get('/account', 'AccountController@showAccount')->name('show-account');
    });
