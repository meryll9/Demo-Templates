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
    return view('pages.home');
});

Route::get('hotels', function () {
    return view('pages.hotels');
});

Route::get('holidays', function () {
    return view('pages.holidays');
});

Route::get('blog', function () {
    return view('pages.blog');
});
