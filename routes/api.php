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


    //TEST Route - Signup route only for test.
    Route::group(['middleware' => ['cors']], function () {

        Route::post('signup', 'AuthController@signUp');

        Route::post('login', 'AuthController@logIn');

        Route::group(['middleware' => 'auth:api'], function() {
          //Must login and use access_token to access these route.
          Route::get('logout', 'AuthController@logout');
          Route::get('profile', 'AuthController@user');
        });
    });


