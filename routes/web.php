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

Route::get('about', function () {
    $about_info = DB::table('quizweg_info')->where('id', '2')->get()[0];
    return view('about', compact('about_info'));
});

Route::get('info/{id}', function ($id) {
    $info = App\QuizwegInfos::getByQrCode($id);

    if (count($info) == 0) {
        $error_message = 'Kein Element gefunden.';
        return view('error', compact('error_message'));
    }
    $info_item = $info[0];
    return view('info.show', compact('info_item'));
});
