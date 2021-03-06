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

Route::any('/', function () {
    return view('welcome');
});

Route::any('/check', 'Weixin\CheckController@valid');
Route::any('/getAccessToken', 'Weixin\AccessController@getAccessToken');
Route::any('/getOAuth2AccessToken', 'Weixin\AccessController@getOAuth2AccessToken');
Route::any('/createMenu', 'Weixin\MenuController@createMenu');
Route::any('/getMenu', 'Weixin\MenuController@getMenu');

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
