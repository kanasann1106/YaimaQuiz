@extends('layouts.formWithHeader')

@section('title','メールアドレス変更')

@section('content')

<form method="POST" action="{{ url('/mypage/setting/change_email') }}" class="form l-section--vh">
  @csrf

  <div class="form-heading">
    <h1>メールアドレス変更</h1>
    <p>登録しているメールアドレスを変更します。</p>
  </div>

  <div class="form-group">
    <input type="email" class="form-control {{ $errors->has('old_email') ? ' is-invalid' : '' }}" name="old_email" value="{{ old('old_email') }}" placeholder="現在のメールアドレス">
    @if($errors->has('old_email'))
    <span class="error_msg">{{ $errors->first('old_email') }}</span>
    @endif
  </div>
  <div class="form-group">
    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="新しいメールアドレス">
    @if($errors->has('email'))
    <span class="error_msg">{{ $errors->first('email') }}</span>
    @endif
  </div>
  <div class="form-group">
    <input type="email" class="form-control {{ $errors->has('email_confirmation') ? ' is-invalid' : '' }}" name="email_confirmation" placeholder="(確認)新しいメールアドレス">
  </div>
  <div class="form-group">
    <input type="password" class="form-control{{ $errors->has('pass_auth') ? ' is-invalid' : '' }}" name="pass_auth" placeholder="Password(6文字)">
    @if($errors->has('pass_auth'))
    <span class="error_msg">{{ $errors->first('pass_auth') }}</span>
    @endif
  </div>
  <button type="submit" class="btn btn-default btn-large">変更</button>

  <a href="/mypage" class="form-back_message">HOMEへ　→</a>
</form>
@endsection