<?php

use Illuminate\Http\Request;
Use App\Article;

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

// Pour les articles 
/*Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');*/
// Avec check de l'autentification
Route::group(['middleware' => 'auth:api'], function() {

    // Articles
    // Route::get('articles', 'ArticleController@index');
    Route::get('articles/{article}', 'ArticleController@show');
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');

    // Adventures
    Route::get('adventures', 'AdventureController@index');
    Route::get('adventures/{adventure}', 'AdventureController@show');
    Route::get('adventures/{adventure}/author', 'AdventureController@findAuthor');
    Route::post('adventures', 'AdventureController@store');
    Route::put('adventures/{adventure}', 'AdventureController@update');
    Route::delete('adventures/{adventure}', 'AdventureController@delete');

    // Events
    Route::get('events', 'EventController@index');
    Route::get('events/{event}', 'EventController@show');
    Route::post('events', 'EventController@store');
    Route::put('events/{event}', 'EventController@update');
    Route::delete('events/{event}', 'EventController@delete');
});

// Route sans log pour la page d'accueil
Route::get('articles', 'ArticleController@index');
Route::get('lastArticles/{numberArticles}', 'ArticleController@lastArticles');
Route::get('bestAdventures', 'AdventureController@bestAdventures');

// Liste des aventures
Route::get('adventures', 'AdventureController@index');
Route::get('adventures/{adventure}/custom', 'AdventureController@custom');








// Pour l'enregistrement
Route::post('register', 'Auth\RegisterController@register');

// Pour le login
Route::post('login', 'Auth\LoginController@login');
// Pour le logout
Route::post('logout', 'Auth\LoginController@logout');