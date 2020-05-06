<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 指定されたユーザーのプロフィールを表示
     *
     * @param  Request  $request
     * @return Response
     */
    public function show(Request $request)
    {
        $value = $request->session()->get('key', 'default');


        //
    }

    public function home2 (Request $request)
    {
        $request->session()->flash('status', 'Task was successful!');
        // dd($request->session('status'));
        dd($request->session()->forget('status'));
    }
}
