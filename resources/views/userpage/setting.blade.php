@extends('layouts.authenticated')

@section('title','ユーザー設定')

@section('content')

<div class="setting">
  <h1>ユーザー設定</h1>
  <ul class="menu-list">
    <li class="menu-item">
      <a href="mypage/setting/change_pass">パスワード変更</a>
    </li>
    <li class="menu-item">
      <a href="">メールアドレス変更</a>
    </li>
    <li class="menu-item is-moderate">
      <a href="">退会する</a>
    </li>
  </ul>
</div>
@endsection