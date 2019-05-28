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

//Auth
Auth::routes();

//クイズCRUD(only login user)
Route::resource('/mypage', 'User\QuizPostController', ['except' => ['show']]);

/*
  setting
*/
Route::get('/mypage/setting', 'User\SettingController@showPage');
Route::get('/withdraw', 'User\SettingController@withdraw');
Route::get('/mypage/setting/change_email', 'User\SettingController@changeEmail');
//パスワード変更
Route::get('/mypage/setting/change_password', 'User\SettingController@showChangePassword');
Route::post('/mypage/setting/change_password', 'User\SettingController@changePassword');

//Quiz(public)
Route::get('/', 'QuizController@index');
Route::get('/quiz', 'QuizController@showQuiz');
Route::get('/quiz/{menuId}', 'QuizController@indexCatNum');
Route::get('/quiz/region/{islandId}', 'QuizController@indexRegNum');

// ajax通信
Route::get('/ajax/auth', 'Ajax\AuthController@auth');
Route::get('/ajax/menu', 'Ajax\QuizController@getQuizAll');
Route::get('/quiz/ajax/menu{menuId}', 'Ajax\QuizController@getQuizByCategory');
Route::get('quiz/region/ajax/region{islandId}', 'Ajax\QuizController@getQuizByRegion');
Route::get('/ajax/category', 'Ajax\QuizController@getQuizCategory');
Route::get('/ajax/region', 'Ajax\QuizController@getRegion');
