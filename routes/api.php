<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;


// Register route

//auth
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);

//services
Route::get('/services/all', [ServiceController::class, 'index']);

//providers
Route::post('/providers/nearby', [ProviderController::class, 'getNearbyProviders']);

//bookings
Route::post('/bookings/add', [BookingController::class, 'addBooking']);
Route::post('/payments/createPaymentIntent', [PaymentController::class, 'createPaymentIntent']);
Route::post('/payments/add', [PaymentController::class, 'add']);


// Admin route to get all bookings
Route::get('/bookings/all', [BookingController::class, 'getAllBookings']);

// User route to get their bookings with non-pending status
Route::get('/bookings/{userId}', [BookingController::class, 'getBookingsByUserId']);
Route::put('/bookings/edit/{bookingId}', [BookingController::class, 'editBookingStatus']);

?>


