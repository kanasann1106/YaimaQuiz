<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuizController extends Controller
{

	public function index()
	{
		return view('quiz/index');
	}
	//パラメータが4より上0未満の場合quiz topへリダイレクトさせる
	public function indexNum($menuId)
	{
		if ($menuId > 4 || $menuId < 1) {
			return Redirect('quiz');
		}
		return self::index();
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
