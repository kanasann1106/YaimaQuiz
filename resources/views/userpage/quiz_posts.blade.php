@extends('layouts.authenticated')

@section('title','クイズ一覧')

@section('content')
<div class="container">
  <h1>@yield('title')</h1>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>{{ __('NO.') }}</th>
          <th>{{ __('Title') }}</th>
          <th>{{ __('Category') }}</th>
          <th>{{ __('地域') }}</th>
          <th>{{ __('updated_at') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($quiz_posts as $key => $quiz)
        <tr>
          <td>{{ $key+1 }}</td>
          <td>
            <a href="{{ url('quiz_posts/'.$quiz->id) }}">{{ $quiz->title }}</a>
          </td>
          <td>{{ $quiz->user.email }}</td>
          <td>{{ $quiz->region }}</td>
          <td>{{ $quiz->updated_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection