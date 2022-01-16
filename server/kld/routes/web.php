<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'article', 'middleware' => 'auth'], function() {
    Route::get('', 'ArticleController@index')->name('article.index');
    Route::get('{id}', 'ArticleController@show')->name('article.show');
    Route::get('create', 'ArticleController@create')->name('article.create');
    Route::post('{id}', 'ArticleController@store')->name('article.store');
    Route::get('edit/{id}', 'ArticleController@edit')->name('article.edit');
});

Route::group(['prefix' => 'category', 'middleware' => 'auth'], function(){
    Route::get('', 'CategoryController@index')->name('category.index');
    Route::get('create', 'CategoryController@create')->name('category.create');
    Route::get('{id}', 'CategoryController@show')->name('category.show');
    Route::post('store', 'CategoryController@store')->name('category.store');
    Route::post('update/{id}', 'CategoryController@update')->name('category.update');
    Route::get('edit/{id}', 'CategoryController@edit')->name('category.edit');
});
