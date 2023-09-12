<?php

// routes/api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/api', [ApiController::class, 'index']);
Route::get('/api/{id}', [ApiController::class, 'show']);
Route::post('/api/{name}', [ApiController::class, 'store']);
Route::put('/api/{id}', [ApiController::class, 'update']);
Route::delete('/api/{id}', [ApiController::class, 'destroy']);


// Additional routes can be defined here if needed.

