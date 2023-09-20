<?php

use App\Http\Controllers\AuthorApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
|
*/

// Public login route
Route::post('auth/login', [AuthController::class, 'login']);

// Trasy bez autoryzacji
Route::get("author", [AuthorApiController::class, 'get']);
Route::get("author/{author}", [AuthorApiController::class, 'getId']);

// Trasy wymagające autoryzacji
Route::middleware(['auth:api'])->group(function () {
    Route::post("author", [AuthorApiController::class, 'post']);
    Route::put("author/{author}", [AuthorApiController::class, 'put']);
    Route::patch("author/{author}", [AuthorApiController::class, 'patch']);
    Route::delete("author/{author}", [AuthorApiController::class, 'delete']);

    // Logout and refresh token routes (assuming these should also be public)
    Route::post('auth/logout', [AuthController::class, 'logout']);
    Route::post('auth/refresh', [AuthController::class, 'refresh']);
    Route::post('auth/me', [AuthController::class, 'me']);
});

// Route to get user information (outside of auth:api middleware)
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


