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

//Route::get('/{app}', function () {
//    return view('quiz/index');
//})->where('app', '.*');

//Auth
Route::get('register', 'QuizController@register');
Route::get('login', 'QuizController@login');

//Quiz
Route::get('quiz', 'QuizController@index');
Route::get('quiz/{menuId}', 'QuizController@index');
// Route::get('quiz/{menuId}', 'Ajax\QuizController@getQuizByCategory');

// ajax通信
Route::get('ajax/quiz', 'Ajax\QuizController@getQuizAll');
Route::get('ajax/category', 'Ajax\QuizController@getQuizCategory');
Route::get('ajax/region', 'Ajax\QuizController@getRegion');
