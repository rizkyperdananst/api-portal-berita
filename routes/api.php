<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\Auth\AuthenticationController;

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

Route::get('/post', [PostController::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/post/{id}', [PostController::class, 'show'])->middleware(['auth:sanctum']);

Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout'])->middleware(['auth:sanctum']);
Route::get('/me', [AuthenticationController::class, 'me'])->middleware(['auth:sanctum']);

// Route::get('/post', function() {
//     return [
//         'message' => 'Hello World'
//     ];
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
