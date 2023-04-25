<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/android-callback', 'androidCallback')->name('android-callback');
});

Route::get('/teapot', function () {
    return abort(418);
})->name('teapot');

Route::redirect('/android', 'https://indiepass.app/android');
Route::redirect('/downloads', 'https://indiepass.app');
Route::redirect('/ios', 'https://indiepass.app');
Route::redirect('/desktop', 'https://indiepass.app/desktop');
Route::redirect('/support', 'https://indiepass.app/support');
Route::redirect('/privacy', 'https://indiepass.app/privacy');
Route::redirect('/terms', 'https://indiepass.app');
