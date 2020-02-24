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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home.index');
Route::post('/store', 'HomeController@store')->name('home.store');
Route::get('/list', 'HomeController@list')->name('home.list');
Route::get('/destroy/{id}', 'HomeController@destroy')->name('home.destroy');
Route::get('/edit/{id}', 'HomeController@edit')->name('home.edit');
Route::post('/update/{id}', 'HomeController@update')->name('home.update');

/*----------------------------- API ---------------------------------*/

Route::get('/get', 'ApiController@get');
