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

Route::get('topic', function () {
    return view('pages.topic');
});

Route::get('profile', function () {
    return view('pages.profile');
});

Route::get('search', function () {
    return view('pages.search');
});

Route::get('signin', function () {
    return view('pages.signin');
});

