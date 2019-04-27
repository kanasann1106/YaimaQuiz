<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;
use Log;
use Illuminate\Auth\Recaller;

class QuizPostController extends Controller
{
    //クイズ投稿フォーム
    public function showCreateForm()
    {
        // カテゴリと地域をviewに渡す
        $categories = DB::table('categories')
            ->select('id', 'name')
            ->where('delete_flg', '=', 0)
            ->get();
        $region = DB::table('region')
            ->select('id', 'name')
            ->where('delete_flg', '=', 0)
            ->get();

        return view('userpage/create_quiz', [
            "categories" => $categories,
            "region" => $region,
        ]);
    }
    //クイズ作成
    public function create(Request $request)
    {
        $quiz = new Quiz();
        $quiz->user_id = Auth::user()->id;
        $quiz->category_id = $request->category_id;
        $quiz->region_id = $request->region_id;
        $quiz->title = $request->title;
        $quiz->correct = $request->correct;
        $quiz->uncorrect1 = $request->uncorrect1;
        $quiz->uncorrect2 = $request->uncorrect2;
        $quiz->explain_sentence = $request->explain_sentence;
        $quiz->image_name = $request->image_name;

        $quiz->save();

        return redirect()->route('quiz.detail', [
            'id' => $quiz->id,
        ]);
    }
    //クイズ詳細
    public function detail(Quiz $quiz)
    {
        Log::debug('detail:' . $quiz);
        return view('userpage/detail_quiz', [
            'user_id' => $quiz->user_id,
            'category_id' => $quiz->category_id,
            'region_id' => $quiz->region_id,
            'title' => $quiz->title,
            'correct' => $quiz->correct,
            'uncorrect1' => $quiz->uncorrect1,
            'uncorrect2' => $quiz->uncorrect2,
            'explain_sentence' => $quiz->explain_sentence,
            'image_name' => $quiz->image_name,
            'test' => 'かな'
        ]);
    }
}
