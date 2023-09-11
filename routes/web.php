<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::apiResource('api', ApiController::class);
Route::get('/apis', [ApiController::class, 'index']);
Route::post('/apis', [ApiController::class, 'store']);
Route::get('/apis/{api}', [ApiController::class, 'show']);
Route::put('/apis/{api}', [ApiController::class, 'update']);
Route::delete('/apis/{api}', [ApiController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
