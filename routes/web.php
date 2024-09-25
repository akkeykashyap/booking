<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;



Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
