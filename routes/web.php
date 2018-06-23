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

Auth::routes();

Route::get('/tweets/index', 'TweetsController@index')->name('index');
Route::get('/tweets/create', 'TweetsController@create')->name('create');;
Route::post('/tweets/store', 'TweetsController@store')->name('store');
