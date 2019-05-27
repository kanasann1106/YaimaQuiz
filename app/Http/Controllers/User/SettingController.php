<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StoreUserSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
  //メールアドレス変更
  public function changeEmail()
  {
    return view('userpage.setting_menu.changeEmail');
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
    Log::debug('ユーザー情報：' . $user);
    $newPassword = $request['password'];
    // if (Hash::check($$newPassword, $user->password)) {
    //   // 一致したときの処理
    // } else {
    //   // 一致しなかったときの処理
    // }
  }
}
