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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth/facebook' => 'Auth\FacebookAuthController',
	'auth/google' => 'Auth\GoogleAuthController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'confirmation' => 'Auth\ConfirmationController',
]);

Route::get('/file', function(){
	Storage::disk('s3')->delete('file.txt');
	return 'done';
});