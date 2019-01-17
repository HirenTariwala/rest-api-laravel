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

Route::get('/check',function(){
    return "It's Working";
});

Route::post('/insertUser','UserController@store');
Route::get('/users','UserController@index');
Route::get('/users/{id}','UserController@show');
Route::put('/users/{id}','UserController@edit');
Route::delete('/users/{id}','UserController@destroy');