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
Auth::routes();

Route::get('/', 'CartridgeController@index')->name('cartridges.search');
Route::get('/cartridge/register', 'CartridgeController@create')->name('cartridges.register');

Route::post('/submit', 'CartridgeController@search')->name('cartridge.lookup');

Route::get('/home', 'HomeController@index')->name('home');