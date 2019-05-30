<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StoreUserSetting;
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
      return view('userpage.setting');
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
  public function changeEmail(StoreUserSetting $request)
  {
    $user = Auth::user();
    if ($user) {
      $user->email = Hash::make($request->email);
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
  public function changePassword(StoreUserSetting $request)
  {
    $user = Auth::user();
    if ($user) {
      $user->password = Hash::make($request->password);
    }
    $user->save();
    return redirect('/mypage/setting/');
  }
}
