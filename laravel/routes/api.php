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

Route::get('/medtgrades','VakkenController@create');
Route::get('/medtgrades/jaar/{jaar}', 'VakkenController@jaar');
Route::get('/medtgrades/jaar/{jaar}/periode/{periode}', 'VakkenController@periode');
Route::get('/medtgrades/jaar/{jaar}/ec', 'VakkenController@ec');

Route::post('/medtgrades/update/{naam}', 'VakkenController@gehaald');
