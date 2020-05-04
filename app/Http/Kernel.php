<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * [ミドルウェア]
     * Before MiddlewareもしくはAfter Middlewareの実装が完了したミドルウェアを実際に通すようにするには、
     * この Karnel.phpへ追記する必要がある
     * HTTPカーネルのhandleメソッドの使い方はシンプルで、Requestを受け取り、Responseをリターンする
     */

    /**
     * [サービスプロバイダ]
     * Laravelのコアサービス全部もサービスプロバイダを利用し、初期起動処理を行う。
     * サービスコンテナの結合や、イベントリスナ、フィルター、それにルートなどを登録する。
     *
     * カーネル初期起動時の重要な処理の一つは、サービスプロバイダをロードすること。
     * アプリケーションの全サービスプロバイダはconfig/app.php のproviders配列で設定されている。
     *
     * 最初に全プロバイダのregisterメソッドが呼び出され（登録）、
     * その後に登録されている全プロバイダのbootメソッドが呼び出される。
     *
     * 全サービスプロバイダが登録されたら、ディスパッチ（実行制御の移行）するためにルーターへRequestが渡される。
     */


    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     * アプリケーションによりリクエストが処理される前に通す必要のある、HTTPミドルウェアのリスト
     *
     * アプリケーションの全HTTPリクエストで実行したいミドルウェア
     *
     * @var array
     */
    protected $middleware = [
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\CheckForMaintenanceMode::class,// メンテナンスモードであるかの決定
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,// リクエスト中のトークンとセッションに保存されているトークンが一致するかを確認（csrf）
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
