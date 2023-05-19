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

Route::get('button', function () {
    return view('button');
});

Route::get('create', function () {
    return view('create');
});
Route::get('modify', function () {
    return view('modify');
});
Route::get('date', function () {
    return view('date');
});
Route::get('index', function () {
    return view('index');
});
Route::get('calendar', function () {
    return view('calendar');
});
Route::get('introduction', function () {
    return view('introduction');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('trainers', function () {
    return view('trainers');
});
Route::get('students', function () {
    return view('students');
});

