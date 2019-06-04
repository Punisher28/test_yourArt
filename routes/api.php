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

//******Custom APi List item********
Route::get('/articles', 'ArticleControler@showArt');
Route::get('/article/{id}', 'ArticleControler@showIDAPI');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');

Route::post('/insert', 'ArticleInsertController@insert');


//*****Search

Route::post('/search', ['uses' =>'ArticleControler@searchApi']);


//******** Custom Auth PassportAPI

Route::post('login', 'API\AuthController@login');
Route::post('register', 'API\AuthController@register');
Route::middleware('auth:api')->group(function () {
    Route::post('details', 'API\AuthController@details');
    Route::post('logout', 'API\AuthController@logout')->name('logout');

});

