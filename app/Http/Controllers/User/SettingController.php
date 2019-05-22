<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
  public function showPage()
  {
    if (Auth::check()) {
      return view('userpage.setting');
    }
    return redirect('/login');
  }
}
