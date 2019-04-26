@extends('layouts.authenticated')

@section('title','クイズ詳細')

@section('content')
<p>カテゴリ ：{{ $category_id }}</p>
<p>タイトル：{{ $title }}</p>
<p>正解：{{ $correct }}</p>
<p>選択肢１：{{ $uncorrect1 }}</p>
<p>選択肢２：{{ $uncorrect2 }}</p>
<p>解説：{{ $explain_sentence }}</p>
<p>画像：{{ $image_name }}</p>
@endsection