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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\MyRoutes;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

MyRoutes::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/{user}/article', 'UserArticleController@show')->name('article');

Route::get('articles', 'ArticleController@index')->name("articles");
Route::get('websites', 'WebsiteController@index');
