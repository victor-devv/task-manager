<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TasksController;
use App\Http\Controllers\API\ProjectsController;
use App\Http\Controllers\API\Auth\AuthAPIController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('projects', ProjectsController::class);
Route::apiResource('tasks', TasksController::class);

Route::get('auth/create-token', [AuthAPIController::class, 'createToken']);

Route::post('auth/login', [AuthAPIController::class, 'login']);
Route::post('auth/register', [AuthAPIController::class, 'register']);