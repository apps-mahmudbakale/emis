<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\StaffController;
use App\Http\Controllers\Api\SchoolController;
use App\Http\Controllers\Api\FacilityController;

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
Route::post('schools/save',  [SchoolController::class, 'saveSchool']);
Route::post('staff/create',  [StaffController::class, 'create']);
Route::post('facility/create',  [FacilityController::class, 'create']);
Route::get('schools/findByLga/{lga}',  [SchoolController::class, 'findByLga']);
Route::get('lgaByState/{state}',  [SchoolController::class, 'lgaByState']);
