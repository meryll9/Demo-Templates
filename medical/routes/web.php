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

Route::get('about', function () {
    return view('pages.about');
});

Route::get('departments', function () {
    return view('pages.departments');
});

Route::get('appointment', function () {
    return view('pages.appointment');
});

Route::get('doctors', function () {
    return view('pages.doctors');
});

Route::get('doctorslist', function () {
    return view('pages.doctorslist');
});

Route::get('doctors3', function () {
    return view('pages.doctors3');
});

Route::get('blog', function () {
    return view('pages.blog');
});

Route::get('contact', function () {
    return view('pages.contact');
});
