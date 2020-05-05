<?php

namespace App;

// use App\Contracts\Publisher;
use Facades\App\Contracts\Publisher;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    // たとえば、Podcastモデルがpublishメソッドを持っているとしましょう。しかし、ポッドキャストを公開(publish)するには、Publisherインスタンスを注入する必要があるとします。

    /**
     * ポッドキャストの公開
     *
     * @param  Publisher  $publisher
     * @return void
     */
    // 依存注入した場合
    // public function publish(Publisher $publisher)
    // {
    //     $this->update(['publishing' => now()]);

    //     $publisher->publish($this);
    // }

    // ファサードを使用した場合
    public function publish ()
    {
        $this->update(['publishing' => now()]);

        Publisher::publish($this);
    }
}
