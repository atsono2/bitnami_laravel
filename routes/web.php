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
ini_set('opcache.enable', 0);
ini_set('opcache.enable_cli', 0);
// ini_set('opcache.revalidate_freq', 0);

Route::get('/', function () {
    // return view('welcome');
    return 'hello';
});
