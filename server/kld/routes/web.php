<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome2');
});

// Route::get()
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
//     Route::get('', 'UserController@index')->name('user.index');
//     Route::get('{id}', 'UserController@show')->name('name.show');
//     Route::get('edit/{id}', 'UserController@edit')->name('name.edit');
// });

// Route::group(['prefix' => 'article', 'middleware' => 'auth'], function() {
//     Route::get('', 'ArticleController@index')->name('artile.index');
//     Route::get('{id}', 'ArticleController@show')->name('artile.show');
//     Route::get('edit/{id}', 'ArticleController@edit')->name('artile.edit');
// });
