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

Route::get('/', function () {
    return view('welcome');
});

// Surat Masuk
Route::get('/suratmasuk','SuratMasukController@Index');
Route::post('/suratmasuk/create','SuratMasukController@Create');
Route::get('/suratmasuk/{mail_id_surat_masuk}/edit','SuratMasukController@Edit');
Route::post('/suratmasuk/{mail_id_surat_masuk}/update','SuratMasukController@Update');
Route::get('/suratmasuk/{mail_id_surat_masuk}/delete','SuratMasukController@Delete');
