@extends('layouts.authenticated')

@section('title','クイズ作成')

@section('content')
<form method="POST" action="{{ route('quiz_post') }}" class="form">
  @csrf

  <div class="form-heading">
    <h1>クイズと作成</h1>
    <p>八重山についてのクイズを作成してみよう。</p>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-6">
        <label>カテゴリ選択</label>
        <select class="form-control" id="category">
          <option>生物</option>
          <option>雑学</option>
        </select>
      </div>
      <div class="col-6">
        <label>地域選択</label>
        <select class="form-control" id="region">
          <option>全地域</option>
          <option>石垣島</option>
          <option>与那国島</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>問題文を入力</label>
    <textarea cols="40" rows="3" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" placeholder="例）日本最西端の島はどこでしょう？" required></textarea>
    @if($errors->has('title'))
    <span>{{ $errors->first('title') }}</span>
    @endif
  </div>
  <div class="form-group">
    <label>選択肢を入力</label>
    <span>注意</span>
    <p>・同じ内容の選択肢は入力しないでください。<br>
      ・クイズの回答は一番上に入力してください。<br>
      ・カテゴリで選択したことに関するクイズを投稿すること。</p>
    <!-- correct -->
    <input type="text" class="form-control{{ $errors->has('correct') ? ' is-invalid' : '' }}" name="correct" placeholder="答え）与那国島" required>
    @if($errors->has('correct'))
    <span>{{ $errors->first('correct') }}</span>
    @endif
    <!-- uncorrect1 -->
    <input type="text" class="form-control{{ $errors->has('uncorrect1') ? ' is-invalid' : '' }} mt-2" name="uncorrect1" placeholder="選択肢1）択捉島" required>
    @if($errors->has('uncorrect1'))
    <span>{{ $errors->first('uncorrect1') }}</span>
    @endif
    <!-- uncorrect2 -->
    <input type="text" class="form-control{{ $errors->has('uncorrect2') ? ' is-invalid' : '' }} mt-2" name="uncorrect2" placeholder="選択肢2）沖ノ鳥島" required>
    @if($errors->has('uncorrect2'))
    <span>{{ $errors->first('uncorrect2') }}</span>
    @endif
  </div>
  <!-- image -->
  <div class="form-group">
    <label>画像挿入（任意）</label>
    <input type="file" class="form-image{{ $errors->has('image_name') ? ' is-invalid' : '' }}" name="image_name">
    @if($errors->has('image_name'))
    <span>{{ $errors->first('image_name') }}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-default btn-large">確認画面</button>
</form>
@endsection