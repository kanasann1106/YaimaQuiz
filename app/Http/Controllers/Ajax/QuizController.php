<?php

namespace App\Http\Controllers\Ajax;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
	/**
	 *クイズテータを取得しjson形式で返す
	 */
	public function getQuizAll()
	{
		$quizzes = DB::table('quizzes')
			->select('title', 'image_name', 'correct', 'uncorrect1', 'uncorrect2', 'explain_sentence')
			->inRandomOrder()
			->take(5)
			->get();

		return json_encode($quizzes, JSON_UNESCAPED_UNICODE);
	}
	/**
	 * クイズカテゴリーを取得しjson形式で返す
	 */
	public function getQuizCategory()
	{
		$quizCategories = DB::table('categories')
			->select('id', 'name')
			->get();

		return json_encode($quizCategories, JSON_UNESCAPED_UNICODE);
	}
	/**
	 * ex.カテゴリー選択に応じてカテゴリ別のクイズデータをjsonで返す
	 */
	public function getQuizByCategory($menuId)
	{
		$select = DB::table('quizzes')
			->select('title', 'image_name', 'correct', 'uncorrect1', 'uncorrect2', 'explain_sentence')
			->where([
				['category_id', '=', $menuId]
			])
			->inRandomOrder()
			->get();

		return json_encode($select, JSON_UNESCAPED_UNICODE);
	}
	/**
	 * 地域を取得しjson形式で返す
	 */
	public function getRegion()
	{
		$region = DB::table('region')
			->select('id', 'name')
			->get();

		return json_encode($region, JSON_UNESCAPED_UNICODE);
	}
	/**
	 * ex.地域選択に応じて地域別のクイズデータをjsonで返す
	 */
	public function getQuizByRegion($islandId)
	{
		$select = DB::table('quizzes')
			->select('title', 'image_name', 'correct', 'uncorrect1', 'uncorrect2', 'explain_sentence')
			->where([
				['region_id', '=', $islandId]
			])
			->inRandomOrder()
			->take(5)
			->get();

		return json_encode($select, JSON_UNESCAPED_UNICODE);
	}
}
