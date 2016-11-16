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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('cars', 'CarController');

Route::post('eligiblecars','EligibleCarController@filter');

Route::get('carrules','CarRuleController@index');
Route::get('carrules/{carId}/{ruleid}', 'CarRuleController@show');
Route::post('carrules', 'CarRuleController@store');
Route::put('carrules/{carId}/{ruleid}', 'CarRuleController@update');