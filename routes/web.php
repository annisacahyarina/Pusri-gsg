<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/layanangedung', function () {
    return view('layanangedung');
});

Route::get('/layananwo', function () {
    return view('layananwo');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/login', function () {
    return view('auth.login');
});

