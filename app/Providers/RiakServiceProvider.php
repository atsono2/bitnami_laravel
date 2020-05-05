<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Riak\Connection;
use Illuminate\Contracts\Support\DeferrableProvider; // 遅延ロードのためにimplementsする必要がある

// php artisan make:provider RiakServiceProvider

class RiakServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    /**
     * 全アプリケーションサービスの登録
     *
     * @return void
     */
    public function register()
    {
        // サービスコンテナに Riak\Connectionを登録
        // singleton：クラスやインターフェイスが一度だけ依存解決されるようにコンテナに登録
        $this->app->singleton(Connection::class, function ($app) {
            return new Connection(config('riak'));
        });
        //
    }

    /**
     * このプロバイダにより提供されるサービス
     *
     * 登録されているサービスのどれか一つを依存解決する必要が起きた時のみ、サービスプロバイダをロードする。
     *
     * @return array
     */
    public function provides() {
        return [Connection::class];
    }

    // /**
    //  * Bootstrap services.
    //  *
    //  * @return void
    //  */
    // public function boot()
    // {
    //     //
    // }
}
