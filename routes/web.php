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

Route::get('/', 'HomeController@home');
Route::get('/feed', 'HomeController@index');

Route::resource('user', 'UserController');
Route::get('/profile', 'UserController@show');
Route::post('/user/{user}/follows/{follows}', 'UserController@createFollowing');

Route::resource('picture', 'PictureController');


