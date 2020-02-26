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

Route::post('/token', 'TokenController');
Route::post('/users', 'UserController@store');

Route::middleware('auth:airlock')->group(function () {
   Route::apiResource('/bios', 'BioController');
   Route::apiResource('/users', 'UserController')->except(['store']);
});
