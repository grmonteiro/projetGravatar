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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/user/avatars', 'AvatarController@index')->name('avatars');
// Route::get('/public/img/{userId}/{img}', function ($userId, $img) {
    
// });

Route::post('/user/storeAvatar', 'AvatarController@store')->name('storeAvatar');
Route::post('/user/editAvatar', 'AvatarController@edit')->name('editAvatar');
Route::get('/user/deleteAvatar/{avatar}', 'AvatarController@delete')->name('deleteAvatar');

Route::get('avatar','ApiController@getAvatar');

Route::get('user1/{id}','ApiController@getUser');

Route::get('user1','ApiController@getUsers');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
