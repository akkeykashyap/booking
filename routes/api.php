<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;



route::middleware('auth:sanctum')->get('/user', function (Request $request)
 {return $request->user();});

Route::post('bookings', [BookingController::class, 'store']);
Route::get('bookings', [BookingController::class, 'index']);
