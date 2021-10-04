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

Route::get('models', function () {
    return view('pages.models');
});

Route::get('listing', function () {
    return view('pages.listing');
});

Route::get('dealers', function () {
    return view('pages.dealers');
});

Route::get('accessories', function () {
    return view('pages.accessories');
});

Route::get('faqs', function () {
    return view('pages.faqs');
});

Route::get('blog', function () {
    return view('pages.blog');
});

Route::get('contacts', function () {
    return view('pages.contacts');
});
