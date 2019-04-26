<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;
use Illuminate\Auth\Recaller;

class QuizPostController extends Controller
{
    //クイズ投稿フォーム
    public function showCreateForm()
    {
        return view('userpage/create_quiz');
    }
    //クイズ作成
    public function create(Request $request)
    {
        $post = new Quiz();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->correct = $request->correct;
        $post->uncorrect1 = $request->uncorrect1;
        $post->uncorrect2 = $request->uncorrect2;
        $post->explain_sentence = $request->explain_sentence;
        $post->image_name = $request->image_name;
        $post->category_id = $request->category_id;

        $post->save();

        return redirect()->route('quiz.detail', [
            'id' => $post->id,
        ]);
    }
    //クイズ詳細
    public function detail(Post $post)
    {
        return view('userpage/detail_quiz', [
            'title' => $post->title,
            'content' => $post->correct,
            'uncorrect1' => $post->uncorrect1,
            'uncorrect2' => $post->uncorrect2,
            'explain_sentence' => $post->explain_sentence,
            'image_name' => $post->image_name,
            'category_id' => $post->category_id,
        ]);
    }
}
