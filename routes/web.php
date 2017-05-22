<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store');

Route::post('logout', 'SessionsController@destroy');

Route::get('register', 'RegistrationController@create')->name('register');
Route::post('register', 'RegistrationController@store');

Route::get('info', 'InformationController@index');
Route::get('info/{name}', 'InformationController@show');

Route::get('quiz/{name}', 'QuizController@show');
Route::post('quiz/{name}', 'QuizController@store');
