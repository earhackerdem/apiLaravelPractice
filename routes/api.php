<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('v1/posts',App\Http\Controllers\Api\V1\PostController::class)
->only(['index','show','destroy']);
