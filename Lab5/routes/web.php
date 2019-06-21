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

Route::get('/cars','CarsController@allcars');
Route::get('/car/new','CarsController@newcarform');
Route::post('/car','CarsController@newcar');

Route::resource('reviews','ReviewsController');
Route::post('/search','ReviewsController@search');
