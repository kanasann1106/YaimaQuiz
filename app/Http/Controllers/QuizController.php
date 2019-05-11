<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class QuizController extends Controller
{
	//TOPページ
	public function index()
	{
		return view('quiz/index');
	}
	//Quizページ
	public function showQuiz()
	{
		return view('quiz/show_quiz');
	}
	//パラメータがカテゴリ総数と以上または負の数の時quiz topへリダイレクトさせる
	public function indexCatNum($menuId)
	{
		$totalCategoryNum = DB::table('categories')->count();
		if ($menuId > $totalCategoryNum || $menuId < 1) {
			return Redirect('quiz');
		}
		return self::showQuiz();
	}

	//パラメータが地域総数と以上または負の数の時quiz topへリダイレクトさせる
	public function indexRegNum($islandId)
	{
		$totalCategoryNum = DB::table('region')->count();
		if ($islandId > $totalCategoryNum || $islandId < 1) {
			return Redirect('show_quiz');
		}
		return self::showQuiz();
	}
	public function register()
	{
		return view('auth/register');
	}
	public function login()
	{
		return view('auth/login');
	}
}
