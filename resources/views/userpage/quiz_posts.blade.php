@extends('layouts.authenticated')

@section('title','クイズ一覧')

@section('content')

<div class="container mypage-quizlist">
  @if(count($quiz_posts)!= 0)
  <h1>@yield('title')</h1>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width:16px">{{ __('NO.') }}</th>
          <th style="width:400px">{{ __('タイトル') }}</th>
          <th style="width:80px">{{ __('編集') }}</th>
          <th style="width:80px">{{ __('削除') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($quiz_posts as $key => $quiz)
        <tr>
          <td>{{ $key+1 }}</td>
          <td>{{ $quiz->title }}</td>
          <td>
            <a href="{{ url('mypage/'.$quiz->id.'/edit') }}" class="btn btn-edit">
              <i class="fas fa-pencil-alt"></i>
            </a>
          </td>
          <td>
            <form style="display:inline" action="{{ url('mypage/'.$quiz->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">
                <i class="fas fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <p class="text-center my-5">まだ、作成したクイズはありません。<br>クイズを作成してみよう！</p>
    <div class="top-link">
      <a href="/mypage/create">クイズを作成<i class="fas fa-pencil-alt ml-2"></i></a>
    </div>
    @endif
  </div>
</div>
@endsection