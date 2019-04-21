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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('login', 'QuizController@login');

//Quiz
Route::get('quiz', 'QuizController@index');
Route::get('quiz/{menuId}', 'QuizController@indexCatNum');
Route::get('quiz/region/{islandId}', 'QuizController@indexRegNum');

// ajax通信
Route::get('ajax/menu', 'Ajax\QuizController@getQuizAll');
Route::get('quiz/ajax/menu{menuId}', 'Ajax\QuizController@getQuizByCategory');
Route::get('quiz/region/ajax/region{islandId}', 'Ajax\QuizController@getQuizByRegion');
Route::get('ajax/category', 'Ajax\QuizController@getQuizCategory');
Route::get('ajax/region', 'Ajax\QuizController@getRegion');
