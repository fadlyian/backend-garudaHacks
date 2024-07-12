<?php

use App\Http\Controllers\Auth\AuthenticatedApiController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/halodek', function(){
    return "halodek";
});

// Route::post('/register', [AuthenticatedApiController::class, 'register']);
// Route::post('/login', [AuthenticatedApiController::class, 'login']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/logout', [AuthenticatedApiController::class, 'logout']);
//     Route::get('/test', [TestController::class, 'index']);
// });
