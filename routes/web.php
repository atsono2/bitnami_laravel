<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function () {
    phpinfo();
    return 'Hello World';
});

// Route::get('/user', 'UserController@index');

Route::match(['get', 'post'], '/user', function() {
    return view('user');
})->name('user');

// Route::put('/user/post', 'UserController@post');
Route::any('/user/post', 'UserController@post');

// sampleにアクセスするとthereにリダイレクトされる
// Route::redirect('/sample', '/there');

// permanentRedirect 301が返される
// 301 Moved Permanently
// リクエストされたリソースの URL が永遠に変更されたことを示します。レスポンスで新しい URL が与えられます。
Route::permanentRedirect('/sample', '/there');

Route::view('/view', 'test', ['name' => 'ono']);

// RouteServiceProviderで Route::pattern('id', '[0-9]+'); で数字のみの制約を加えた
Route::get('/param/{id}', function($id) {
    return 'idは'. $id;
});

// 任意にする場合は必ずデフォルト値が必要
// 正規表現で制約できる
Route::get('/test/{name?}', function($name = 'default') {
    return '名前は'. $name;
})->where('name', '[A-Za-z]+')->name('test');

// グループ中の全ルートにミドルウェアを指定する
Route::middleware(['first', 'second'])->group(function() {
    Route::get('/', function () {
        // firstとsecondミドルウェアを使用
    });

    Route::get('user/profile', function () {
        // firstとsecondミドルウェアを使用
    });
});

// admin/~~ をグループでまとめて設定
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'Hello';
    });
    Route::get('/ok', function() {
        return 'ok!';
    });
});

// client.~~ をグループでまとめて設定
Route::name('client.')->group(function () {
    Route::get('thanks', function () {
        return 'client.thanks';
    });
});

Route::get('api/users/{user}', function (App\User $user) {
    return $user->email;
});



// フォールバックは一番最後にしか定義できない
Route::fallback(function() {
    return 'ページが見つかりませんでした…。';
});
