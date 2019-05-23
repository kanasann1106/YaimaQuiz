<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
}