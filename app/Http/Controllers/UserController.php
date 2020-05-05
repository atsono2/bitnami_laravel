<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    /**
     * 指定したユーザーのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        // Cacheクラスにgetはない
        $user = Cache::get('user:'.$id);

        return view('profile', ['user' => $user]);
    }
}
