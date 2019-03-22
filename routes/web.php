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

Route::get('/{app}', function () {
    return view('quiz/quiz');
})->where('app', '.*');

Route::get('/ino', 'InoController@index');

Route::get('/quiz', 'QuizController@index');

