<?php
ini_set('opcache.enable', 0);
ini_set('opcache.enable_cli', 0);
ini_set('opcache.revalidate_freq', 0);
?>
<html>
    <head>
        <title>アプリ名 - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            ここがメインのサイドバー
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
