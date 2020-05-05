<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\EventPusher;

class AppServiceProvider extends ServiceProvider
{

    // public function __construct(EventPusher $pusher)
    // {
    //     $this->pusher = $pusher;
    //             // 結合：サービスコンテナに登録。bindings に登録される
    //             $this->app->bind('HelpSpot\API', function ($app) {
    //                 return new \HelpSpot\API($app->make('HttpClient'));
    //             });

    //             // EventPusherの実装クラスが必要な時に、コンテナがRedisEventPusherを注入する
    //             $this->app->bind(
    //                 'App\Contracts\EventPusher',
    //                 'App\Services\RedisEventPusher'
    //             );

    //             // シングルトン結合：クラスやインターフェイスが一度だけ依存解決されるようにコンテナに登録
    //             $this->app->singleton('HelpSpot\API', function ($app) {
    //                 return new \HelpSpot\API($app->make('HttpClient'));
    //             });


    //             dd($this->app);
    // }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
