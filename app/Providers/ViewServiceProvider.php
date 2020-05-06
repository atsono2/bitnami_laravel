<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
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
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // クラスベースのコンポーザを使用する
        View::composer(
            'profile', 'App\Http\View\Composers\ProfileComposer'
        );

        // クロージャベースのコンポーザを使用する
        View::composer('dashboard', function ($view) {
            //
        });
    }
}
