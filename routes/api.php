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
          ////FOR TEST
        Route::group(['middleware' => 'auth:api'], function() {
          //Must login and use access_token to access these route.
          Route::get('logout', 'AuthController@logout');

          /*
          * Profile routes
          */
          Route::get('current-profile','UserController@showCurrentInfoUser')->middleware('can:user.list');; //Show current profile's information
          Route::put('profile','UserController@update')->middleware('can:user.edit');; //Update profile's information

          /*
          * Role routes
          */
          Route::get('role','RoleController@index')->middleware('can:Role.list');
          Route::get('role/{id}','RoleController@show')->middleware('can:Role.list');;
          Route::post('role','RoleController@store')->middleware('can:Role.create');;

          /*
          * Permission routes
          */
          Route::get('permission','PermissionController@index');





        });
    });


