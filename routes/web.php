<?php

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
    return view('welcome',['user' => 'Laravel Testing','company' => 'Deanta Publishing']);
});

Route::get('home', function () {
    return view('Pages.home');
});

Route::get('aboutus', function () {
    return view('Pages.aboutus');
});

Route::get('contact', function () {
    return view('Pages.contact');
});
