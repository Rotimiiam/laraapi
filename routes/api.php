<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Define the API resource routes for the "api" resource without the /api prefix.
Route::get('/', [ApiController::class, 'index']);
Route::post('/', [ApiController::class, 'store']);
Route::post('/api/create/{name}', 'ApiController@create');
Route::get('/{api}', [ApiController::class, 'show']);
Route::put('/{api}', [ApiController::class, 'update']);
Route::delete('/{api}', [ApiController::class, 'destroy']);

// Additional routes can be defined here if needed.

// Example authentication route (uses Laravel Sanctum).
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
