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

Route::get('/', function () {
<<<<<<< HEAD
    return view('index');
});


Route::resource('/user','UserController');
Route::resource('/home','HomeController');
Route::resource('/post','PostController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
=======
    return view('home');
});

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
>>>>>>> d24cd28afdd229ae8f66a8a41e0f15aa4fa732f1
]);