<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * 暗号化を無効にしたいcookieを追加する
     *
     * @var array
     */
    protected $except = [
        //
        'name',
        'sample'
    ];
}
