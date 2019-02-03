<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InoController extends Controller {

    // ino ビュー (resources/views 下の ino.blade.php) を返す
    public function index() {
        return view('ino');
    }

}

