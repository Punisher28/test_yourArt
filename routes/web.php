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
Route::get('/posts', function () {
    return view('posts');
});
Route::get('/sale', function () {
    return view('sale');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/articles', 'ArticleControler@show');
Route::get('/article/{id}','ArticleControler@showID');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
