<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/**
 * ex.カテゴリー選択に応じてカテゴリ別のクイズデータをjsonで返す
 */
Route::get('/ajax/quiz', function ($menuId) {
    // if ($menuId > 4) {
    //     //パラメータがnullの時は全クイズデータを返す
    //     // return self::getQuizAll();
    // }
    $quizzes = DB::table('quizzes')
        ->select('title', 'image_name', 'correct', 'uncorrect1', 'uncorrect2', 'explain_sentence')
        ->where([
            ['delete_flg', '=', 0],
            ['category_id', '=', $menuId]
        ])
        ->get();

    return json_encode($quizzes, JSON_UNESCAPED_UNICODE);
});
