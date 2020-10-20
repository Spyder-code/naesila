<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes(['register' => false]);
// Auth::routes();

// User
Route::get('/', 'UserController@index')->middleware('user');
Route::get('/daftar-mobil', 'UserController@daftarMobile');
Route::get('/kontak-kami', 'UserController@kontak');
Route::get('/tentang-kami', 'UserController@tentang');
Route::get('/mobil/{nama}', 'UserController@detailMobil');

//Admin
Route::get('/admin/dashboard', 'HomeController@index');
Route::get('/admin/profile', 'HomeController@profile');
Route::get('/admin/mobil', 'HomeController@mobil');
Route::get('/admin/tambah', 'HomeController@mobilTambah');
Route::get('/admin/mobil/detail/{id}', 'HomeController@detailmobil');
Route::get('/admin/mobil/ubah/{id}', 'HomeController@ubahMobil');
Route::get('/admin/kotak-masuk', 'HomeController@pesan');
Route::get('/admin/transaksi', 'HomeController@transaksi');
Route::get('/logout', 'Auth\LoginController@logout');

Route::post('changeImageUser', 'HomeController@updateProfilImage');
Route::post('updatePassword', 'HomeController@updatePassword');
Route::post('updateUsername', 'HomeController@updateUsername');
Route::post('addMobil', 'HomeController@addMobil');
Route::post('deleteMobil', 'HomeController@deleteMobil');
Route::post('deletePesan', 'HomeController@deletePesan');
Route::post('updateMobil', 'HomeController@updateMobil');
Route::post('updateLogo', 'HomeController@updateLogo');
Route::post('addPesan', 'UserController@addPesan');



