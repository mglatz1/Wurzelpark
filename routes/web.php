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


Route::get('info', 'InfoController@index');
Route::get('info/{qrcode}', 'InfoController@show');

Route::get('quiz', 'QuizController@index');
Route::get('quiz/{qrcode}', 'QuizController@show');
Route::post('quiz/store', 'QuizController@store');


Auth::routes();

Route::get('/home', 'HomeController@index');
