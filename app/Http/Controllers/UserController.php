<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        return view('user');
    }

    public function profile (Request $request)
    {
        if (mb_strlen($request->input('name')) < 4) {
            // return back()->withInput();
            return redirect()->action('UserController@index');
        }

        // return view('user_profile')->with([
        //     'request' => $request,
        // ]);
        return redirect('user/profile')->with('status', 'Profile updated!');
    }
}
