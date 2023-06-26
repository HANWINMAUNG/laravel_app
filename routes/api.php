<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('posts', [PostController::class, 'index']);

Route::post('posts', [PostController::class, 'store']);

Route::get('posts/{id}', [PostController::class, 'show']);

Route::patch('posts/{id}', [PostController::class, 'update']);

Route::delete('posts/{id}', [PostController::class, 'destroy']);