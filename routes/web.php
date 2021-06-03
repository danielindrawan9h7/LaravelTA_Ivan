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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

// Pesanan
Route::get('/pesanan', 'PesananController@index');
Route::get('/pesanan/tambah', 'PesananController@tambah');
Route::post('/pesanan/simpan', 'PesananController@simpan');
Route::get('/pesanan/edit/{id}', 'PesananController@edit');
Route::post('/pesanan/update', 'PesananController@update');
Route::get('/pesanan/hapus/{id}', 'PesananController@hapus');

//Masakan
Route::get('/masakan', 'MasakanController@index');
Route::get('/masakan/tambah', 'MasakanController@tambah');
Route::post('/masakan/simpan', 'MasakanController@simpan');
Route::get('/masakan/edit/{id}', 'MasakanController@edit');
Route::post('/masakan/update', 'MasakanController@update');
Route::get('/masakan/hapus/{id}', 'MasakanController@hapus');

//Daftar Admin
Route::get('/daftar_admin', 'DaftarAdminController@index');
Route::get('/daftar_admin/hapus/{id}', 'DaftarAdminController@hapus');