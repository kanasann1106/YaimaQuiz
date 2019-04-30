@extends('layouts.authenticated')

@section('title','クイズ編集')

@section('content')
<form method="post" action="{{ url('quiz_posts/'.$quiz->id) }}" enctype="multipart/form-data" class="form">
  @csrf
  @method('PUT')
  <div class="form-heading">
    <h1>クイズの編集</h1>
    <p>過去のクイズ投稿の編集ができます。</p>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-6">
        <label>カテゴリ選択</label>
        <select class="form-control" id="category" name="category_id">
          @foreach ($categories as $category)
          <option value="{{ $category->id }}" {{$category->id== old('category_id',$quiz->category_id) ? 'selected' : ''}}>
            {{ $category->name }}
          </option>
          @endforeach
        </select>
      </div>
      <div class="col-6">
        <label>地域選択</label>
        <select class="form-control" id="region" name="region_id">
          @foreach($region as $island)
          <option value="{{ $island->id }}" {{ $island->id== old('region_id', $quiz->region_id) ? 'selected' : '' }}>
            {{ $island->name }}
          </option>
          @endforeach
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>問題文を入力</label>
    <textarea cols="40" rows="3" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" placeholder="例）日本最西端の島はどこでしょう？">
    {{ old('title', $quiz->title) }}
    </textarea>
    @if($errors->has('title'))
    <span class="invalid-feedback" role="alert">
      {{ $errors->first('title') }}
    </span>
    @endif
  </div>
  <div class="form-group">
    <label>選択肢を入力</label>
    <span>注意</span>
    <p>・同じ内容の選択肢は入力しないでください。<br>
      ・クイズの回答は一番上に入力してください。<br>
      ・カテゴリで選択したことに関するクイズを投稿すること。</p>
    <!-- correct -->
    <input type="text" class="form-control{{ $errors->has('correct') ? ' is-invalid' : '' }}" name="correct" value="{{ old('correct', $quiz->correct) }}" placeholder="答え）与那国島">
    @if($errors->has('correct'))
    <span class="invalid-feedback" role="alert">
      {{ $errors->first('correct') }}
    </span>
    @endif
    <!-- uncorrect1 -->
    <input type="text" class="form-control{{ $errors->has('uncorrect1') ? ' is-invalid' : '' }} mt-2" name="uncorrect1" value="{{ old('uncorrect1', $quiz->uncorrect1) }}" placeholder="選択肢1）択捉島">
    @if($errors->has('uncorrect1'))
    <span class="invalid-feedback" role="alert">
      {{ $errors->first('uncorrect1') }}
    </span>
    @endif
    <!-- uncorrect2 -->
    <input type="text" class="form-control{{ $errors->has('uncorrect2') ? ' is-invalid' : '' }} mt-2" name="uncorrect2" value="{{ old('uncorrect2', $quiz->uncorrect2) }}" placeholder="選択肢2）沖ノ鳥島">
    @if($errors->has('uncorrect2'))
    <span class="invalid-feedback" role="alert">
      {{ $errors->first('uncorrect2') }}
    </span>
    @endif
  </div>
  <!-- image -->
  <div class="form-group">
    <label>画像挿入（任意）</label>
    <input type="file" class="form-control-file{{ $errors->has('image_name') ? ' is-invalid' : '' }}" name="image_name" value="{{ old('image_name', $quiz->image_name) }}">
    @if($errors->has('image_name'))
    <span class="invalid-feedback" role="alert">
      {{ $errors->first('image_name') }}
    </span>
    @endif
  </div>
  <!-- explain -->
  <div class="form-group">
    <label>解説を入力</label>
    <textarea cols="40" rows="5" class="form-control{{ $errors->has('explain_sentence') ? ' is-invalid' : '' }}" name="explain_sentence" placeholder="解説）解説を書きます">
    {{ old('explain_sentence', $quiz->explain_sentence) }}
    </textarea>
    @if($errors->has('explain_sentence'))
    <span class="invalid-feedback" role="alert">
      {{ $errors->first('explain_sentence') }}
    </span>
    @endif
  </div>
  <button type="submit" class="btn btn-default btn-large">編集</button>
</form>
@endsection