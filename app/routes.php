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
Route::group(array('before'=>'auth'), function(){

	Route::get('/', array('as'=>'home','uses'=>'UserController@home'));
});

Route::get('/login', array('as'=>'login', 'uses'=>'UserController@getLogin'));

Route::post('/login', array('as'=>'login-post', 'uses'=>'UserController@postLogin'));

Route::get('/register', array('as'=>'register', 'uses'=>'UserController@getRegister'));

Route::post('/register', array('as'=>'register-post', 'uses'=>'UserController@postRegister'));

Route::get('/logout', array('as'=>'logout','uses'=>'UserController@logout'));