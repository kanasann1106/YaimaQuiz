<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
	public function getQuizAll()
	{
		/**
		 * クイズテーブルの選択肢を一つの配列にまとめる
		 * ex.{"correct":"長生きできる","uncorrect1":"与那国馬になれる","uncorrect2":"空を飛べる"} -> ["長生きできる","与那国馬になれる","空を飛べる"]
		 */

		$choices = DB::table('quizzes')
			->select('correct', 'uncorrect1', 'uncorrect2')
			->where('delete_flg', '=', 0)
			->first();

		$bind_array = array();
		foreach ($choices as $value) {
			array_push($bind_array, $value);
		}

		// return json_encode($bind_array, JSON_UNESCAPED_UNICODE);

		$quizzes = DB::table('quizzes')
			->select('title', 'image_name', 'correct', 'uncorrect1', 'uncorrect2', 'explain_sentence')
			->where('delete_flg', '=', 0)
			->first();
		return json_encode($quizzes, JSON_UNESCAPED_UNICODE);
	}
}
