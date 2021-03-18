<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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


    Route::get('account', 'App\Http\Controllers\AccountController@index');
    Route::get('account/{account}', 'App\Http\Controllers\AccountController@show');
    Route::delete('account/{id}', 'App\Http\Controllers\AccountController@destroy');
    Route::put('account/update/{account}', 'App\Http\Controllers\AccountController@update');
    Route::post('insert', 'App\Http\Controllers\AccountController@store');
    Route::get('search/{name}', 'App\Http\Controllers\AccountController@search');
// Route::apiResource('store', AccountController::class);
// Route::apiResource('account2', 'AccountController@destroy');