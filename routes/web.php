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

Route::get('/', 'Home\IndexController@index');
Route::get('/about', 'Home\IndexController@about');
Route::get('/help', 'Home\IndexController@help');
Route::get('/contact', 'Home\IndexController@contact');
