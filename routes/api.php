<?php

use App\Http\Controllers\Api\BookingTransactionController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\OfficeSpaceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('api_key')->group(function () {
    Route::get('/city/{city:slug}', [CityController::class, 'show']);
    Route::get('/cities', [CityController::class, 'index']);

    Route::get('/office/{officeSpace:slug}', [OfficeSpaceController::class, 'show']);
    Route::get('/office', [OfficeSpaceController::class, 'index']);

    Route::post('/booking-transaction', [BookingTransactionController::class, 'store']);
    Route::post('/check-booking', [BookingTransactionController::class, 'booking_details']);
});
