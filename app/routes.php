<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::post('sessions/updateuser', array('as' => 'sessions.updateuser', 'uses' => 'SessionsController@updateinfo'));

Route::resource('sessions', 'SessionsController');

