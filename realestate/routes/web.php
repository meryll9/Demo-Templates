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

Route::get('aboutus', function () {
    return view('pages.aboutus');
});

Route::get('properties', function () {
    return view('pages.properties');
});

Route::get('builders', function () {
    return view('pages.builders');
});

Route::get('services', function () {
    return view('pages.services');
});

Route::get('listing', function () {
    return view('pages.listing');
});

Route::get('contact', function () {
    return view('pages.contact');
});

