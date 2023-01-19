<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// part one in task


// part two in task
Route::post('register',RegisterController::class);
Route::post('login',LoginController::class);
Route::apiResource('users',UserController::class)->except('show');
Route::get('getUser',[UserController::class , 'getUser']);