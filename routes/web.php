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
Route::get('/contact', 'PageController@contact');
Route::get('/cursus', 'PageController@cursus');
Route::get('/error', 'PageController@error')->name('error');

Route::group(['middleware' => 'checkLogin'], function () {
    Route::get('/adminpanel', 'AdminPanelController@index');
    Route::get('/homeedit/{id}', 'AdminPanelController@showHome');
    Route::post('/homeEdit/{id}', 'AdminPanelController@updateHome');
    Route::get('/aboutedit/{id}', 'AdminPanelController@showAbout');
    Route::post('/aboutEdit/{id}', 'AdminPanelController@updateAbout');
    Route::get('/cursusedit/{id}', 'AdminPanelController@showCursus');
    Route::post('/cursusEdit/{id}', 'AdminPanelController@updateCursus');

    Route::group(['middleware' => 'checkPerms'], function () {
        Route::get('/users', 'UserController@showUsers');
        Route::get('register', 'UserController@registerView');
        Route::post('register', 'UserController@registerUser');
        Route::get('editUser/{id}', 'UserController@showUserDetails');
        Route::post('editUser/{id}', 'UserController@editUser');
        Route::get('deleteUser/{id}', 'UserController@deleteUser');
    });
});

Route::get('/login', 'UserController@loginView');
Route::post('/login', 'UserController@loginUser');
Route::get('/logout', 'UserController@logout');
