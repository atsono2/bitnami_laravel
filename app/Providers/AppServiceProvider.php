<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
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
        ini_set('opcache.enable', 0);
        ini_set('opcache.enable_cli', 0);
        ini_set('opcache.revalidate_freq', 0);

        Blade::component('alert', 'alert');

        // HTMLエンティティのdouble encodeを無効にする
        Blade::withoutDoubleEncoding();

        // resources.views.includes.inputのエイリアスを設定
        // 全てのbladeで@input()で呼び出せるようになる
        Blade::include('includes.input', 'input');
        Blade::include('includes.each', 'each');

        // ディレクティブを定義できる
        Blade::directive('datetime', function ($expression) {
            return "<?php echo ($expression)->format('Y/m/d H:i'); ?>";
        });
    }
}
