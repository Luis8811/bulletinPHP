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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('common/index');
});

Route::get('/sign_up', function () {
    return view('user/adduser');
});

Route::get('/users', 'UserController@getUsers');

Route::post('/sign_up_OK', 'UserController@addUser');



