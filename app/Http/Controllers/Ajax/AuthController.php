<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * ログイン済みの判断
     */
    public function auth()
    {
        if (Auth::check()) {
            $authFlg = true;
        } else {
            $authFlg = false;
        }
        return json_encode($authFlg, JSON_UNESCAPED_UNICODE);
    }
}
