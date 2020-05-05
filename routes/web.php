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

// interface AnimalInterface {
//     public function cry();
// }

// class Dog implements AnimalInterface {
//     public function cry() {
//         return "bow-wow";
//     }
// }

// class Cat implements AnimalInterface {
//     public function cry() {
//         return "neow";
//     }
// }

// $this->app->bind('onomatopoeia', 'Dog');

// Route::get('/cry', function() {
//     $onomato = $this->app->make('onomatopoeia');
//     return $onomato->cry();
// });
