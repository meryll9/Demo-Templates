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

Route::get('causes', function () {
    return view('pages.causes');
});

Route::get('single', function () {
    return view('pages.single');
});

Route::get('events', function () {
    return view('pages.events');
});