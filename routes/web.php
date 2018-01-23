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

Route::get('/home/{names}', function ($names) {
    return 'hello word'.$names;
});

Route::match(['get','post'],'is', function () {
    return view('welcome');
});

Route::get('/article/index', 'ArticleController@index');

Route::get('/article/app', 'ArticleController@app');

Route::get('/article/show/{id}','ArticleController@show');

Route::get('/article/create','ArticleController@create');

Route::post('/article/store','ArticleController@store');