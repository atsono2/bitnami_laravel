<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class sample extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sample:name {user} {--queue=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $user = $this->argument('user');
        // ユーザー入力値が返る
        $name = $this->ask('名前を入力してください');
        $this->info('Display this on the screen');
        dd($this->arguments(). ' '. $this->options());

        // 別コマンドの呼び出し
        $this->call('email:send', [
            'user' => 1, '--queue' => 'default'
        ]);
    }
}
