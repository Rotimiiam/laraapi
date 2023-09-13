<?php

// routes/api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

//Route::get('/', [ApiController::class, 'index']);
Route::get('/{id}', [ApiController::class, 'show']);
Route::post('/', [ApiController::class, 'store']);
//Route::post('/{name}', [ApiController::class, 'store']);
Route::put('/{id}', [ApiController::class, 'update']);
Route::delete('/{id}', [ApiController::class, 'destroy']);


// Additional routes can be defined here if needed.

