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

// Consultation des news
Route::get('news/{n}', 'NewsController@show')->where('n', '[0-9]+');

// Sert à rien
Route::get('/', 'WelcomeController@index');

// Création de User
Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');

// Formulaire de contact
Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

// Upload images
Route::get('photo', 'PhotoController@getForm');
Route::post('photo', 'PhotoController@postForm');

// Email database
Route::get('email', 'EmailController@getForm');
Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);