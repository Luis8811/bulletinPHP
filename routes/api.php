<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', 'UserController@users');

Route::get('user/{id}', 'UserController@user');

Route::get('females', 'UserController@females');

Route::get('males', 'UserController@males');

Route::post('insert_user', 'UserController@insertUser');



