<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('article', 'ArticleController');
Route::get('article/news/{id}', 'ArticleController@news');

Route::get('aboutus', 'IndexController@about');
Route::get('history', 'IndexController@history');

Route::get('visualizador', 'IndexController@visualizador');