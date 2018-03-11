<?php

Route::get('/', 'HomeController@index')->name('home');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store');

Route::post('logout', 'SessionsController@destroy')->name('logout');

Route::get('register', 'RegistrationController@create')->name('register');
Route::post('register', 'RegistrationController@store');

Route::get('info', 'InformationController@index');
Route::get('info/{name}', 'InformationController@show');

Route::get('quiz/{name}', 'QuizController@show');
Route::post('quiz/{name}', 'QuizController@store');

Route::post('quiz/{name}/previous', 'QuizController@show_previous_finalized');
Route::post('quiz/{name}/next', 'QuizController@show_next_finalized');

Route::get('finish-quiz', function() {
    app()->setLocale(auth()->user()->language);
    return view('quiz.finish');
});
Route::post('finish-quiz', 'QuizController@finish');
Route::get('photos/{date?}', 'PhotoController@show');
