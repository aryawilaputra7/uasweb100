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
    return view('welcome');
});
Route::resource('rental','AdminController');
Route::resource('Beranda','BerandaController');
Route::resource('Pembeli','PembeliController');
Route::resource('Transaksi','TransaksiController');

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');
