<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\SchoolController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users',  [UserController::class, 'index']);
Route::get('schools',  [SchoolController::class, 'index']);
Route::get('schools/findByLga/{lga}',  [SchoolController::class, 'findByLga']);
Route::get('lgaByState/{state}',  [SchoolController::class, 'lgaByState']);
