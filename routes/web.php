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
Route::post('/user/storeAvatar', 'AvatarController@store')->name('storeAvatar');
Route::post('/user/editAvatar', 'AvatarController@edit')->name('editAvatar');
Route::get('/user/deleteAvatar/{avatar}', 'AvatarController@delete')->name('deleteAvatar');

// API
Route::get('avatar','ApiController@getAvatar');
Route::get('user1/{id}','ApiController@getUser');
Route::get('user1','ApiController@getUsers');