<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // web.phpかコントローラのコンストラクタでミドルウェアを指定して認証機能を追加できる
    public function __construct()
    {
        $this->middleware(['auth', 'password.confirm']);
    }

    public function index()
    {
        return 'ログイン済みユーザーのみ表示';
    }
}
