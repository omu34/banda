<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberShip\MembershipController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('/membership', 'membership');
    Route::view('/about', 'about');
    Route::view('/board-directors', 'board-directors');
    Route::view('/senior-management', 'senior-management');
    Route::view('/our-products', 'our-products');
    Route::view('/mobile-banking', 'mobile-banking');
    Route::view('/loans', 'loans');
    Route::view('/our-resources', 'our-resources');
    Route::view('/our-downloads', 'our-downloads');
    Route::view('/tenders', 'tenders');
    Route::view('/our-careers', 'our-careers');
    Route::view('/news-media', 'news-media');
    Route::view('/events', 'events');
    Route::view('/gallery', 'gallery');
    Route::view('/news-articles', 'news-articles');
    Route::view('/single-news-article', 'single-news-article');
    Route::view('/help-support', 'help-support');
    Route::view('/get-in-touch', 'get-in-touch');
    Route::view('/submit-ticket', 'submit-ticket');

});
