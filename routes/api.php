<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    Route::post('login', 'AuthController@logIn');
    Route::get('hash/{id}',function($p){
        return Hash::make($p);
    });
    /*
    * Job Routes for Enclave Recruitment web.
    */
    Route::get("job","JobController@index");
    Route::get("job-web/{id}","JobController@showJobForCandidatesPage");

    /*
    * Article routes for Enclave Recruitment web.
    */
    Route::get("article","ArticleController@index");
    Route::get("article-web/{id}","ArticleController@showArticleForCandidatePage");

    /*
    * Store candidate's information .
    */
    Route::post("candidate","CandidateController@store");

    Route::group(['middleware' => 'auth:api'], function() {
        /*
        * Auth routes
        */
        Route::put('change-password','AuthController@changePassword');
        Route::get('logout', 'AuthController@logout');        //Must login and use access_token to access these route.

        /*
        * Profile routes
        */
        Route::get('current-profile','UserController@showCurrentInfoUser'); //Show current profile's information
        Route::put('profile','UserController@updateCurrentProfile'); //Update profile's information

        /*
        * Role routes
        */
        Route::get('role','RoleController@index')->middleware('can:Role.list');
        Route::get('role/{id}','RoleController@show')->middleware('can:Role.list');
        Route::post('role','RoleController@store')->middleware('can:Role.create');
        Route::put('role/{id}','RoleController@update')->middleware('can:Role.edit');
        Route::delete('role','RoleController@destroy')->middleware('can:Role.delete');

        /*
        * Permission routes
        */
        Route::get('permission','PermissionController@index');

        /*
        * User routes
        */
        Route::get('user','UserController@index')->middleware('can:user.view');
        Route::post('user','UserController@store')->middleware('can:user.create');
        Route::get('user/{id}','UserController@show')->middleware('can:user.view');
        Route::put('user/{id}','UserController@update')->middleware('can:user.edit');
        Route::delete("user","UserController@destroy")->middleware("can:user.delete");

        /*
        * Job routes
        */
        Route::get("job","JobController@index")->middleware("can:job.view");
        Route::get("job/{id}","JobController@show")->middleware("can:job.view");
        Route::post("job","JobController@store")->middleware("can:job.create");
        Route::put("job/{id}","JobController@update")->middleware("can:job.edit");
        Route::delete("job","JobController@destroy")->middleware("can:job.delete");

        /*
        * Article routes
        */
        Route::get("article/{id}","ArticleController@show");
        Route::post("article","ArticleController@store")->middleware("can:article.create");
        Route::put("article/{id}","ArticleController@update")->middleware("can:article.edit");
        Route::delete("article","ArticleController@destroy")->middleware("can:article.delete");

        /*
        * Candidate routes
        */
        Route::post("list-candidate","CandidateController@index")->middleware("can:candidate.view");
        Route::get("candidate/{id}","CandidateController@show")->middleware("can:candidate.view");
        Route::put("candidate/{id}","CandidateController@update")->middleware("can:candidate.edit");
        Route::delete("candidate","CandidateController@destroy")->middleware("can:candidate.delete");

    });
});




