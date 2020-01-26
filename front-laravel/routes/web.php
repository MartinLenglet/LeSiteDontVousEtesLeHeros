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
    return view('welcome');
});

Route::get('home', 'ArticleController@index');
Route::get('aventures', 'AventureController@index');
Route::get('aventures/{id}', 'AventureController@custom');
Route::get('events/{id}', 'EventController@show');
Route::post('events', 'EventController@create');
Route::patch('events', 'EventController@update');
Route::post('choices', 'ChoiceController@create');
// Route::get('tirage', 'TirageController@index');