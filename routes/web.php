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
    return view('home');
});
Route::get('/downloads', function () {
    return view('downloads');
});
Route::get('/android', function () {
    return view('android');
});
Route::get('/ios', function () {
    return view('ios');
});
Route::get('/desktop', function () {
    return view('desktop');
});
Route::get('/support', function () {
    return view('support');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/terms', function () {
    return view('docs');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/android-callback', function () {
    return view('android-callback');
});