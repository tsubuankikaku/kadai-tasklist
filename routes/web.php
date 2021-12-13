<?php


    
Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');


Route::group(['middleware' => ['auth']], function () {

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');


Route::resource('tasks', 'TasksController', ['only' => ['store', 'destroy']]);
   
});
