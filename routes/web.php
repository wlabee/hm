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
    return view('web');
});
Route::get('/selection', function () {return view('web');});
Route::get('/hearsay', function () {return view('web');});
Route::get('/promotion', function () {return view('web');});
Route::get('/lowprice', function () {return view('web');});
Route::get('/cate/{id}', function () {return view('web');});
Auth::routes();

