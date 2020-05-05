<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\ResponseFactory;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * 全アプリケーションサービスの初期起動処理
     * 他の全サービスプロバイダが登録し終えてから呼び出されるため、全てのサービスにアクセスできる。
     *
     * ビューコンポーザをサービスプロバイダで登録する必要がある場合はbootメソッド内で行う
     * ビューコンポーザ：ビューがレンダーされるたびに結合したい情報をまとめる
     *
     * @return void
     */
    public function boot(ResponseFactory $response)
    {
        view()->composer('view', function() {
            //
        });
        $response->macro('caps', function($value) {
            //
        });
    }
}
