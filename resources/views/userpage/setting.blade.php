@extends('layouts.authenticated')

@section('title','ユーザー設定')

@section('content')

<div class="setting">
  <h1>ユーザー設定</h1>

  <ul class="menu-list">
    <li class="menu-item user-info">
      <p><i class="fas fa-envelope"></i>:{{$user->email}}</p>
      <p><i class="fas fa-lock"></i>: ********</p>
    </li>
    <li class="menu-item">
      <a href="{{ Request::url()}}/change_password">パスワード変更</a>
    </li>
    <li class="menu-item">
      <a href="{{ Request::url()}}/change_email">メールアドレス変更</a>
    </li>
    <li class="menu-item is-moderate js-alert">
      <button class="withdraw">退会する</button>
    </li>
  </ul>
  <div id="alert" class="animated" data-animate="zoomIn">
    <i class="fas fa-lg fa-exclamation-triangle"></i>退会するとこれまで投稿してきたクイズも全て削除されてしまいます。<br>
    それでも退会しますか？
    <div class="container alert-btnlist">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <button type="button" id="withdraw" class="btn btn-moderate rounded-pill btn-block">退会する</button>
        </div>
        <div class="col-md-5">
          <button type="button" id="cancel" class="btn btn-default rounded-pill btn-block">キャンセル</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="overlay"></div>
@endsection