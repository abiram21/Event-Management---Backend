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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::GET('/foods','FoodController@index');
Route::GET('/foods/{id}','FoodController@show');
Route::POST('/foods','FoodController@store');
Route::POST('/foods/{id}','FoodController@update');
Route::DELETE('foods/{id}','FoodController@destroy');
Route::GET('/foods/getfoodtype','FoodController@getfoodtype');
Route::GET('/foods/getclient/{name}/{qty}','FoodController@getclient');



Route::GET('/hallcovers','HallcoverController@index');
Route::GET('/hallcovers/{id}','HallcoverController@show');
Route::POST('/hallcovers','HallcoverController@store');
Route::POST('/hallcovers/{id}','HallcoverController@update');
Route::DELETE('hallcovers/{id}','HallcoverController@destroy');
Route::GET('/hallcovers/getclient/{size}','HallcoverController@getclient');

Route::GET('/sounds','SoundController@index');
Route::GET('/sounds/{id}','SoundController@show');
Route::POST('/sounds','SoundController@store');
Route::POST('/sounds/{id}','SoundController@update');
Route::DELETE('sounds/{id}','SoundController@destroy');
Route::GET('/sounds/getclient/{size}/{type}','SoundController@getclient');



Route::GET('/chairs','ChairController@index');
Route::GET('/chairs/{id}','ChairController@show');
Route::POST('/chairs','ChairController@store');
Route::POST('/chairs/{id}','ChairController@update');
Route::DELETE('chairs/{id}','ChairController@destroy');
Route::GET('/chairs/getclient/{type}/{noOfUncoveredChair}/{noOfcoveredChair}','ChairController@getclient');

Route::GET('/shorteats','ShorteatsController@index');
Route::GET('/shorteats/{id}','ShorteatsController@show');
Route::POST('/shorteats','ShorteatsController@store');
Route::POST('/shorteats/{id}','ShorteatsController@update');
Route::DELETE('shorteats/{id}','ShorteatsController@destroy');
Route::GET('shorteats/getclient/{type}/{qty}','ShorteatsController@getclient');

Route::GET('/lights','LightController@index');
Route::GET('/lights/{id}','LightController@show');
Route::POST('/lights','LightController@store');
Route::POST('/lights/{id}','LightController@update');
Route::DELETE('lights/{id}','LightController@destroy');
Route::GET('/lights/getclient/{size}','LightController@getclient');

Route::GET('/photographies','PhotographyController@index');
Route::GET('/photographies/{id}','PhotographyController@show');
Route::POST('/photographies','PhotographyController@store');
Route::POST('/photographies/{id}','PhotographyController@update');
Route::DELETE('photographies/{id}','PhotographyController@destroy');
Route::GET('/photographies/getclient/{duration}','PhotographyController@getclient');

Route::GET('/memorials','MemorialController@index');
Route::GET('/memorials/{id}','MemorialController@show');
Route::POST('/memorials','MemorialController@store');
Route::POST('/memorials/{id}','MemorialController@update');
Route::DELETE('memorials/{id}','MemorialController@destroy');
Route::GET('/memorials/getclient/{type}/{qty}','MemorialController@getclient');

Route::GET('/clients','ClientController@index');
Route::POST('/clients','ClientController@store');
Route::GET('/clients/{id}','ClientController@show');
Route::POST('/clients/{id}','ClientController@update');
Route::DELETE('clients/{id}','ClientController@destroy');
Route::GET('/clients/getNumber','ClientController@clientPhn');


Route::GET('/chairtypes','ChairTypeController@index');
Route::GET('/chairtypes/image','ChairTypeController@show');
Route::POST('/chairtypes','ChairTypeController@store');
Route::POST('/chairtypes/{id}','ChairTypeController@update');
Route::DELETE('/chairtypes/{id}','ChairTypeController@destroy');

Route::GET('/memorialtypes','MemorialTypeController@index');
Route::GET('/memorialtypes/image','MemorialTypeController@show');
Route::POST('/memorialtypes','MemorialTypeController@store');
Route::POST('/memorialtypes/{id}','MemorialTypeController@update');
Route::DELETE('/memorialtypes/{id}','MemorialTypeController@destroy');


Route::GET('/users','UserController@index');

Route::GET('/facilities','FacilityController@index');