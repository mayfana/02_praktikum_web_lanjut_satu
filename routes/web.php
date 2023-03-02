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

Route::get('/', function ($id) {
    return view('welcome');
});

Route::get('/about', function () {
    return "<h1> Mayfana Laura Abdi  2141720169 </h1>";
});

Route::get('/article/1', function () {
    return "<h1> Halaman artikel dengan id 1 </h1>";
});

Route::get('/article/2', function () {
    return "<h1> Halaman artikel dengan id 2 </h1>";
});
