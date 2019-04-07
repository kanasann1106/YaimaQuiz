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
		 *クイズテータを取得しjson形式で返す
		 */

		$quizzes = DB::table('quizzes')
			->select('title', 'image_name', 'correct', 'uncorrect1', 'uncorrect2', 'explain_sentence')
			->where('delete_flg', '=', 0)
			->get();

		return json_encode($quizzes, JSON_UNESCAPED_UNICODE);
	}
}
