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
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/','Crud@index');
Route::get('/view','Crud@view');


Route::post('/save-student','Crud@saveStudent');

Route::get('/delete/{id}', 'Crud@delete');
Route::get('/edit/{id}', 'Crud@edit');

Route::post('/update-student', 'Crud@updateStudent');


