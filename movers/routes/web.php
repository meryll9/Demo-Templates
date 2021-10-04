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

Route::get('company', function () {
    return view('pages.company');
});

Route::get('rates', function () {
    return view('pages.rates');
});

Route::get('team', function () {
    return view('pages.team');
});

Route::get('faqs', function () {
    return view('pages.faqs');
});

Route::get('blog', function () {
    return view('pages.blog');
});

Route::get('contact', function () {
    return view('pages.contact');
});
