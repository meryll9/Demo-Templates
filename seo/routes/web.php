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

Route::get('whatwedo', function () {
    return view('pages.whatwedo');
});

Route::get('services-seoopt', function () {
    return view('pages.services-seoopt');
});

Route::get('services-socialmedia', function () {
    return view('pages.services-socialmedia');
});

Route::get('services-adwords', function () {
    return view('pages.services-adwords');
});

Route::get('services-cusexperience', function () {
    return view('pages.services-cusexperience');
});

Route::get('services-digianalysis', function () {
    return view('pages.services-digianalysis');
});

Route::get('services-conmarketting', function () {
    return view('pages.services-conmarketting');
});

Route::get('faqs', function () {
    return view('pages.faqs');
});

Route::get('contact', function () {
    return view('pages.contact');
});
