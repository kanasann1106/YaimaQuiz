<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StoreChangePass;
use App\Http\Requests\StoreChangeEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Log;

class SettingController extends Controller
{
  //ユーザー設定ページ表示
  public function showPage()
  {
    if (Auth::check()) {
      $user = Auth::user();
      return view('userpage.setting', ['user' => $user]);
    }
    return redirect('/login');
  }
  //退会処理
  public function withdraw()
  {
    $user = Auth::user();
    if ($user) {
      $user->delete();
    }
    return redirect('/');
  }
  //メールアドレス変更画面表示
  public function showChangeEmail()
  {
    if (Auth::check()) {
      Log::debug('メールアドレス変更画面');
      return view('userpage.setting_menu.changeEmail');
    } else {
      return redirect(('/login'));
    }
  }
  // 新メールアドレスをDBへ保存する
  public function changeEmail(StoreChangeEmail $request)
  {
    Log::debug('新メールアドレスをDBへ保存する');
    $user = Auth::user();
    if ($user) {
      $user->email = $request->email;
      Log::debug('バリデーションOK');
    }
    $user->save();
    return redirect('/mypage/setting/');
  }
  //パスワード変更画面表示
  public function showChangePassword()
  {
    if (Auth::check()) {
      Log::debug('パスワード変更画面');
      return view('userpage.setting_menu.changePassword');
    } else {
      return redirect('/login');
    }
  }
  // 新パスワードをDBへ保存する
  public function changePassword(StoreChangePass $request)
  {
    $user = Auth::user();
    if ($user) {
      $user->password = Hash::make($request->password);
    }
    $user->save();
    return redirect('/mypage/setting/');
  }
}
