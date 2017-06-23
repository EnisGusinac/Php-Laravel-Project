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
    if (Route::has('login'))
         return view('welcome');
    else
         return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@profileRoute');
Route::post('profile', 'ProfileController@update_avatar');

Route::get('/profile/{username}', 'ProfileController@profile');

Route::resource('articles', 'ArticlesController');
