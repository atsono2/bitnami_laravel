<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // attemptメソッドは連想配列を受け取り、認証に成功したらtrueを返す
        if (Auth::attempt($credentials)) {
            // 認証に成功した
            // intendedメソッドは、認証フィルターで引っかかる前にアクセスしようとしていたURLへリダイレクトする
            // そのリダイレクトが不可能な場合の移動先として、フォールバックURIをこのメソッドに指定する必要がある
            return redirect()->intended('dashboard');
        }
    }
}
