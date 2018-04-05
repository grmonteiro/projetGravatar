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


// LOGIN & AUTH
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

// AVATAR
Route::get('/user/avatars', 'AvatarController@index')->name('avatars');
Route::get('/user/addAvatar', 'AvatarController@addAvatar')->name('addAvatar');
Route::post('/user/storeAvatar', 'AvatarController@store')->name('storeAvatar');
Route::get('/user/deleteAvatar/{avatar}', 'AvatarController@delete')->name('deleteAvatar');

// API
Route::get('avatar/{email}','ApiController@getAvatar');