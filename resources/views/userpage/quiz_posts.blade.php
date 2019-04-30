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
          <th>{{ __('correct') }}</th>
          <th>{{ __('uncorrect1') }}</th>
          <th>{{ __('uncorrect2') }}</th>
          <th>{{ __('explain_sentence') }}</th>
          <th>{{ __('image_name') }}</th>
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
          <td>{{ $quiz->correct }}</td>
          <td>{{ $quiz->uncorrect1 }}</td>
          <td>{{ $quiz->uncorrect2 }}</td>
          <td>{{ $quiz->explain_sentence }}</td>
          <td>{{ $quiz->image_name }}</td>
          <td>{{ $quiz->updated_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection