<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {

    }

    public function post (Request $request)
    {
        // if ($request->route()->named('user')) {
        //     dd(true);
        // } else {
        //     dd(false);
        // }
        $action = Route::currentRouteAction();
        dd($action);
        return view('user_post')->with([
            'request' => $request,
        ]);
    }
}
