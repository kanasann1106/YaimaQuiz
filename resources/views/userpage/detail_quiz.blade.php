@extends('layouts.authenticated')

@section('title','クイズ詳細')

@section('content')
<div class="container">
  <h1 id="post-title">@yield('title')</h1>

  {{-- 編集・削除ボタン --}}
  <div class="edit">
    <a href="{{ url('quiz_posts/'.$quiz->id.'/edit') }}" class="btn btn-primary">
      {{ __('Edit') }}
    </a>
    <form style="display:inline" action="{{ url('quiz_posts/'.$quiz->id) }}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">
        {{ __('Delete') }}
      </button>
    </form>
  </div>

  {{-- 記事内容 --}}
  <dl class="row">
    <dt class="col-md-2">{{ __('Created') }}:</dt>
    <dd class="col-md-10">
      <time itemprop="dateCreated" datetime="{{ $quiz->created_at }}">
        {{ $quiz->created_at }}
      </time>
    </dd>
    <dt class="col-md-2">{{ __('Updated') }}:</dt>
    <dd class="col-md-10">
      <time itemprop="dateModified" datetime="{{ $quiz->updated_at }}">
        {{ $quiz->updated_at }}
      </time>
    </dd>
  </dl>
  <hr>
  <div id="post-body">
    {{ $quiz->title }}
  </div>
</div>
@endsection