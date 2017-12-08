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

//Home

Route::get('/', 'HomeViewController@index')->name('home');
Route::post('/upload', 'HomeViewController@upload')->name('upload');

//Download

Route::get('/download', 'DownloadViewController@index')->name('download');
Route::get('/downloadsuccess', 'DownloadSuccessViewController@index')->name('downloadsuccess');
