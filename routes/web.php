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
    // return view('welcome');
    return [1,2,3];
});

Route::get('home', function() {
    return response('Hello', 200)
        ->header('Content-Type', 'text/plain');
});

/**
 * dev tool で確認
 *
 * X-Header-One: Header Value
 * X-Header-Two: Header Value
 */
Route::get('home2', function() {
    return response('Hello', 200)
        ->withHeaders([
            'Content-Type' => 'text/plain',
            'X-Header-One' => 'Header Value',
            'X-Header-Two' => 'Header Value'
        ]);
});

Route::get('home3', function() {
    return response('OK', 200)
        ->header('Content-Type', 'text/plain')
        ->cookie('name', 'value', 300)
        ->cookie('sample', 'hello world!');
});

Route::match(['get', 'post'],'user', 'UserController@index');

Route::post('user/profile', 'UserController@profile')->name('profile');
