@extends('layouts.authenticated')

@section('title','メールアドレス変更')

@section('content')

<form method="POST" action="{{ route('login') }}" class="form">
  @csrf

  <div class="form-heading">
    <h1>メールアドレス変更</h1>
    <p>登録しているメールアドレスを変更します。</p>
  </div>

  <div class="form-group">
    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="現在のメールアドレス">
    @if($errors->has('email'))
    <span class="error_msg">{{ $errors->first('email') }}</span>
    @endif
  </div>
  <div class="form-group">
    <input type="email" class="form-control {{ $errors->has('newEmail') ? ' is-invalid' : '' }}" name="newEmail" value="{{ old('newEmail') }}" placeholder="新しいメールアドレス">
    @if($errors->has('email'))
    <span class="error_msg">{{ $errors->first('email') }}</span>
    @endif
  </div>
  <div class="form-group">
    <input type="email" class="form-control {{ $errors->has('new_re_email') ? ' is-invalid' : '' }}" name="new_re_email" value="{{ old('new_re_email') }}" placeholder="(確認)新しいメールアドレス">
  </div>
  <div class="form-group">
    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password(6文字)">
    @if($errors->has('password'))
    <span class="error_msg">{{ $errors->first('password') }}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-default btn-large">変更</button>

  <a href="/" class="form-back_message">TOPへ　→</a>
</form>
@endsection