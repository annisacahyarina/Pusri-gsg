<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\authController;
use App\Http\Controllers\ExportController;

Route::get('/', function () {
    return view('landingpage');
})->name('landingpage');

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
Route::get('/testimoni', function () {
    return view('testimoni');
});


// form
Route::get('/form', function () {
    return view('form');
});
Route::post('/add', [BookingController::class, 'add'] );
Route::get('/add-booking', function () {
    return view('dashboard.add-booking');
});

Route::post('add', [BookingController::class, 'add'] );

//dashboard
Route::get('/dashboard', [BookingController::class, 'dashboard'])->name('dashboard') ->middleware('auth');
Route::get('/edit-booking', [BookingController::class, 'dashboard2'])->name('dashboard2');
Route::delete('/bookings/{id}', [BookingController::class, 'delete'])->name('booking.delete');
Route::get('edit/{id}',[BookingController::class,'edit']);
Route::put('edit',[BookingController::class,'update']);

//calendar
Route::get('/calendar', function () {
    return view('dashboard.calendar');
});

//list booking
Route::get('/all-booking', [BookingController::class, 'list'])->name('all-booking');

//auth
Route::get('/login', [authController::class, 'login'])->name("login");
Route::post('/login', [authController::class, 'loginPost'])->name("login.post");
Route::get('/register', [authController::class, 'register'])->name("register");
Route::post('/register', [authController::class, 'registerPost'])->name("register.post");
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('landingpage');
})->name('logout');


//download csv
Route::get('generateCsv',[BookingController::class, 'generateCsv'])->name('download.csv');

//search data
Route::get('search',[BookingController::class,'search']);

