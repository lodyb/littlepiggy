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
    return redirect('/users');
});
Route::get('/logout', function () {
    return Auth::logout();
});

Route::get('/amiloggedin', function () {
    return dd(Auth::user());
});

Route::get('/login', 'AuthController@login');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/users', [
		'uses' => 'UserController@view',
		'as'   => 'users',
	]);
});