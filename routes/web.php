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
Route::post('/user/storeAvatar', 'AvatarController@store')->name('storeAvatar');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
