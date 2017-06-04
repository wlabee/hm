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


Route::group(['prefix' => 'api', 'namespace' => 'Api', 'middleware' => ['auth:api']], function () {
    Route::get('/get/category', 'HomeController@getCate');
    Route::get('/get/category/{pid}', 'HomeController@getSubCate');
    Route::get('/get/friendlink', 'HomeController@getFriendLink');
    Route::get('/get/hotword', 'HomeController@getHotWord');
});
