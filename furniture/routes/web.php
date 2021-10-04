<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;

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


Route::get('/2', function () {
    return view('pages.home2');
});

Route::get('test', function () {
    return view('test');
});

Route::get('shop', function () {
    return view('pages.shop');
});

Route::get('aboutus', function () {
    return view('pages.aboutus');
});


Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact');

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/contact-entries', [ContactUsFormController::class,'showEntries'])->name('showEntries');

