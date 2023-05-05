<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('announce', function () {
    return view('announcement');
});
Route::get('services', function () {
    return view('services');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('register', function () {
    return view('register');
});
Route::get('vacancy', function () {
    return view('vacancy');
});
Route::get('training', function () {
    return view('training');
});
Route::get('lesson', function () {
    return view('lesson');
});