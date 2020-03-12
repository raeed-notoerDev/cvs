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

//users
Route::get('/user/opportunity/{id}', 'API\OpportunityController@show')->name('users.show.opportunities');
Route::get('/user/opportunities', 'API\OpportunityController@index')->name('users.index.opportunities');
Route::post('/user/opportunities', 'API\OpportunityController@store')->name('users.store.opportunities');
Route::get('/specialization', 'API\SpecializationController@index')->name('specialization.index');
Route::get('/user/ads', 'API\AdsController@index')->name('ads.index');



