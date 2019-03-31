<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{
    public function index() {
        return json_encode(\App\Quiz::all(),JSON_UNESCAPED_UNICODE);
    }

}

