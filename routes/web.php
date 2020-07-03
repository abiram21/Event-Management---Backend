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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/foods','FoodController@index')->name('food.index');
Route::get('/foods/create','FoodController@create')->name('food.create');
Route::post('/foods','FoodController@store')->name('food.store');
Route::get('/foods/edit/{food}','FoodController@edit')->name('food.edit');
Route::patch('update/{food}','FoodController@update')->name('food.update');
Route::get('/delete/{food}','FoodController@delete')->name('food.delete');
Route::delete('destroy/{food}','FoodController@destroy')->name('food.destroy');

// Route::get('/hallcovers','HallCoverController@index')->name('hallcover.index');
// Route::get('/hallcovers/create','HallCoverController@create')->name('hallcover.create');

Route::get('/chair','ChairController@index')->name('chair.index');
Route::get('/chair/create','ChairController@create')->name('chair.create');
Route::post('/chair','ChairController@store')->name('chair.store');

Route::get('/memorial','MemorialController@index')->name('memorial.index');
Route::get('/memorial/create','MemorialController@create')->name('memorial.create');
Route::post('/memorial','MemorialController@store')->name('memorial.store');


Route::get('/shorteats','ShorteatsController@index')->name('shorteat.index');
Route::get('/shorteats/create','ShorteatsController@create')->name('shorteat.create');
Route::post('/shorteats','ShorteatsController@store')->name('shorteat.store');
Route::get('/shorteats/edit/{shorteat}','ShorteatsController@edit')->name('shorteat.edit');
Route::patch('/shorteats','ShorteatsController@update')->name('shorteat.update');
//Route::get('/shorteats','ShorteatsController@delete')->name('shorteat.delete');
Route::delete('/shorteats','ShorteatsController@destroy')->name('shorteat.destroy');

Route::get('/photographies','PhotographyController@index')->name('photography.index');
Route::get('/photographies/create','PhotographyController@create')->name('photography.create');
Route::post('/photographies','PhotographyController@store')->name('photography.store');
Route::get('/photographies/edit/{photography}','PhotographyController@edit')->name('photography.edit');
Route::patch('/photographies','PhotographyController@update')->name('photography.update');
//Route::get('/photographies','PhotographyController@delete')->name('photography.delete');
Route::delete('/photographies','PhotographyController@destroy')->name('photography.destroy');

Route::get('/sounds','SoundController@index')->name('sound.index');
Route::get('/sounds/create','SoundController@create')->name('sound.create');
Route::post('/sounds','SoundController@store')->name('sound.store');
Route::get('/sounds/edit/{sound}','SoundController@edit')->name('sound.edit');
Route::patch('/sounds','SoundController@update')->name('sound.update');
//Route::get('/sounds','SoundController@delete')->name('sound.delete');
Route::delete('/sounds','SoundController@destroy')->name('sound.destroy');


Route::get('/lights','LightController@index')->name('light.index');
Route::get('/lights/create','LightController@create')->name('light.create');
Route::post('/lights','LightController@store')->name('light.store');
Route::get('/lights/edit/{light}','LightController@edit')->name('light.edit');
Route::patch('/lights','LightController@update')->name('light.update');
//Route::get('/lights','LightController@delete')->name('light.delete');
Route::delete('/lights','LightController@destroy')->name('light.destroy');
