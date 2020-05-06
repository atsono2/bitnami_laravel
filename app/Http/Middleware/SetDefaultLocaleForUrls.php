<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class SetDefaultLocaleForUrls
{
    public function handle($request, Closure $next)
    {
        // homeパラメータに対するデフォルト値を設定
        URL::defaults(['home' => 123]);

        return $next($request);
    }
}
