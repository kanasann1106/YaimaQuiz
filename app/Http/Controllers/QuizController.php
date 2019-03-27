<?php

namespace App\Http\Controllers;
use App\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller {

    public function index() {
        $quizzes = Quiz::all();

        return view('quiz/index', [
            'quizzes' => $quizzes,
        ]);
    }
}

