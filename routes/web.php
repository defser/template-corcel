<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//create menu header
View::creator(['partials.menu_header'], 'App\Http\ViewCreators\MenuCreator');

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/blog', ['as' => 'blog', 'uses' => 'HomeController@index']);
Route::get('/blog/{slug}', ['as' => 'blog', 'uses' => 'HomeController@post']);

Route::get('/contato', ['as' => 'contato', 'uses' => 'ContactController@index']);
Route::post('/send-contact', 'ContactController@sendForm');

Route::get('/notfound', ['as' => 'notfound', 'uses' => 'ErrorsController@pagenotfound']);
Route::get('/internalerror', ['as' => 'error', 'uses' => 'ErrorsController@internalerror']);
