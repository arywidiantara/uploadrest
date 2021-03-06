<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api'], function () {
    Route::get('/', 'ApiController@showallapi');
    Route::get('list/{id}', 'ApiController@showlist');
    Route::get('detail/{id}/{id_detail}', 'ApiController@showdetail');
});

Route::group(['prefix' => 'show'], function () {
    Route::get('/', 'ImgurController@curl');
    Route::get('/list/{id}', 'ImgurController@show');
    Route::get('/detail/{id}/{id_detail}', 'ImgurController@detail');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
 */

Route::group(['middleware' => ['web']], function () {
    //
});
