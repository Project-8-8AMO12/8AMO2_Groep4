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

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');
Route::get('/cursus', 'PageController@cursus');

Route::get('register', 'UserController@registerView');
Route::post('register', 'UserController@registerUser');

Route::get('/users', 'UserController@showUsers');
Route::get('editUser/{id}', 'UserController@showUserDetails');
Route::post('editUser/{id}', 'UserController@editUser');
Route::get('deleteUser/{id}', 'UserController@deleteUser');

Route::get('/login', 'UserController@loginView');
Route::post('/login', 'UserController@loginUser');
Route::get('/logout', 'UserController@logout');
