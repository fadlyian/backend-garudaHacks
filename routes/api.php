<?php

use App\Http\Controllers\Auth\AuthenticatedApiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\TestController;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [AuthenticatedApiController::class, 'getUser']);
});

Route::post('/login', [AuthenticatedApiController::class, 'login']);
// Route::post('/register', [AuthenticatedApiController::class, 'register']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/logout', [AuthenticatedApiController::class, 'logout']);
//     Route::get('/test', [TestController::class, 'index']);
// });
