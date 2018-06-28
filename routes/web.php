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


Route::get('/demands', 'DemandController@index');
Route::get('/demands/create', 'DemandController@create');
Route::post('/demands/save', 'DemandController@save');
Route::get('/demands/{demand}', 'DemandController@show');

Route::get('/offers', 'OfferController@index');
Route::get('/offers/create', 'OfferController@create');
Route::post('/offers/save', 'OfferController@save');
Route::get('/offers/{offer}', 'OfferController@show');

Route::get('/register', 'UserController@register');
Route::post('/register', 'UserController@save');
Route::get('/login', 'UserController@login')->name('login');
Route::get('/logout', 'UserController@logout')->name('logout');
