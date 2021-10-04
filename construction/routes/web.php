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

Route::get('about', function () {
    return view('pages.about');
});

Route::get('projects', function () {
    return view('pages.projects');
});

Route::get('projects2', function () {
    return view('pages.projects2');
});

Route::get('projects3', function () {
    return view('pages.projects3');
});

Route::get('projects5', function () {
    return view('pages.projects5');
});

Route::get('investors', function () {
    return view('pages.investors');
});

Route::get('news', function () {
    return view('pages.news');
});

Route::get('careers', function () {
    return view('pages.careers');
});

Route::get('contact', function () {
    return view('pages.contact');
});
