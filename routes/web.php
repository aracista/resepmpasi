<?php

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
 


Route::get('/', 'BerandaController@index')->name('beranda');
Route::get('/kontak', 'KontakController@index')->name('kontak');
Route::get('/tentang', 'TentangController@index')->name('tentang');
Route::get('/resep', 'BerandaController@resep')->name('resep');
Route::get('/resep/detail/{id}', 'BerandaController@show')->name('detail');


Route::post('/simpan', 'KontakController@simpan');

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
Route::resource('resep','ResepController');
Route::get('kontak/lihat', 'KontakController@showpesan')->name('kontak.lihat');
Route::resource('kategori','KategoriController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
