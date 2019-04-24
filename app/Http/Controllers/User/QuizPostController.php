<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuizPostController extends Controller
{
    public function index()
    {
        return view('userpage/quiz_post');
    }
}
