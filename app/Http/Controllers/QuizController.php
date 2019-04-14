<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizController extends Controller
{

	public function index()
	{
		return view('quiz/index');
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
