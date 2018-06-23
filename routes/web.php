<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['web']], function () {

  Route::auth();

  Route::get('index','TweetsController@index')->name('index');

  Route::resource('tweets', 'TweetsController');

  Route::get('/tweets/{id}/delete', 'TweetsController@destroy');
  


  Route::resource('users', 'UsersController', ['only' => 'show']);

});
