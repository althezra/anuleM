<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicRecognitionController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\Api\ReleaseController;
use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\UserPayoutController;
use App\Http\Controllers\Api\AdminPayoutController;
use App\Http\Controllers\Api\PublisherController;

// Routes dengan autentikasi
Route::middleware('auth:api')->group(function () {
    // User payouts
    Route::get('/user/payouts', [UserPayoutController::class, 'index']);
    Route::post('/user/payouts', [UserPayoutController::class, 'store']);

    // Admin payouts
    Route::get('/admin/payouts', [AdminPayoutController::class, 'index']);
    Route::get('/admin/payouts/{payout_request}', [AdminPayoutController::class, 'show']);
    Route::post('/admin/payouts/{payout_request}/approve', [AdminPayoutController::class, 'approve']);
    Route::post('/admin/payouts/{payout_request}/reject', [AdminPayoutController::class, 'reject']);
});

// Public routes
Route::apiResource('releases', ReleaseController::class);
Route::apiResource('publishers', PublisherController::class);
Route::apiResource('artists', ArtistController::class);

// Tambahan untuk audio
Route::post('/recognize', [MusicRecognitionController::class, 'recognize']);
Route::post('/upload-song', [SongController::class, 'upload']);
