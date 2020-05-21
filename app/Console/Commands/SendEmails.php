<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\DripEmailer;
use App\User;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'email:send {user}';

    // ユーザー指定のオプション。デフォルト値も設定できる
    // protected $signature = 'email:send {user} {--queue=}';
    // protected $signature = 'email:send {user} {--queue=default}';

    // {user?}, {user=foo}, 引数、 {--option}, オプション
    // protected $signature = 'email:send {user} {--queue}';

    // コマンド実行
    // php artisan email:send ono --queue

    // {user*} 配列で引数を指定できる
    // protected $signature = 'email:send {user*}';

    // コマンド実行
    // php artisan email:send ono sato

    // {user : ~~~~} 引数の説明
    protected $signature = 'email:send
                        {user : The ID of the user}
                        {--queue= : Whether the job should be queued}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send drip e-mails to a user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * タイプヒントで必要なクラスを注入できる
     * ｓ
     * @return mixed
     */
    public function handle(DripEmailer $drip)
    {
        $drip->send(User::find($this->argument('user')));

        // 引数を取得
        $user = $this->argument('user');
        // 全引数を配列で取得
        $arguments = $this->arguments();

        //
        $name = $this->ask('What is your name?');
    }
}
