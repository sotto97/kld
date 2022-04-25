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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", function () {
    return view("top");
});

// 【認証機能】Auth::route(); を分解して書き直すと以下になる。
Route::get("login", "Auth\LoginController@showLoginForm")->name("login");
Route::post("login", "Auth\LoginController@login");
Route::post("logout", "Auth\LoginController@logout")->name("logout");

Route::get("register", "Auth\RegisterController@showRegistrationForm")->name("register");
Route::post("register", "Auth\RegisterController@register");

Route::get("password/reset", "Auth\ForgotPasswordController@showLinkRequestForm")->name("password.request");
Route::post("password/email", "Auth\ForgotPasswordController@sendResetLinkEmail")->name("password.email");
Route::get("password/reset/{token}", "Auth\ResetPasswordController@showResetForm")->name("password.reset");
Route::post("password/reset", "Auth\ResetPasswordController@reset")->name("password.update");
Route::get("/home", "HomeController@index")->name("home");

// 【ナレッジ関連】
Route::group(["prefix" => "article", "middleware" => "auth"], function () {
    Route::get("", "ArticleController@index")->name("article.index");
    Route::get("create", "ArticleController@create")->name("article.create");
    Route::post("store", "ArticleController@store")->name("article.store");
    Route::get("{id}", "ArticleController@show")->name("article.show");
    Route::get("edit/{id}", "ArticleController@edit")->name("article.edit");
    Route::post("update/{id}", "ArticleController@update")->name("article.update");
});

// 【カテゴリ関連】
Route::group(["prefix" => "category", "middleware" => "auth"], function () {
    Route::get("", "CategoryController@index")->name("category.index");
    Route::get("create", "CategoryController@create")->name("category.create");
    Route::post("store", "CategoryController@store")->name("category.store");
    Route::get("{id}", "CategoryController@show")->name("category.show");
    Route::get("edit/{id}", "CategoryController@edit")->name("category.edit");
    Route::post("update/{id}", "CategoryController@update")->name("category.update");
    Route::post("delete/{id}", "CategoryController@destroy")->name("category.delete");
});

// 【クライアント関連】
Route::group(["prefix" => "client", "middleware" => "auth"], function () {
    Route::get("", "ClientController@index")->name("client.index");
    Route::get("create", "ClientController@create")->name("client.create");
    Route::post("store", "ClientController@store")->name("client.store");
    Route::get("{id}", "ClientController@show")->name("client.show");
    Route::get("edit/{id}", "ClientController@edit")->name("client.edit");
    Route::post("update/{id}", "ClientController@update")->name("client.update");
    Route::post("delete/{id}", "ClientController@destroy")->name("client.delete");
});

//【ユーザー管理】
// Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
//     Route::get('', 'UserController@index')->name('user.index');
//     Route::get('{id}', 'UserController@show')->name('name.show');
//     Route::get('edit/{id}', 'UserController@edit')->name('name.edit');
// });