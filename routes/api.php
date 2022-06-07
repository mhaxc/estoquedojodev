<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//rotas de produto
Route::apiResource('Products',App\Http\Controllers\Api\ProductController::class);

// rotas de  usuario 
Route::apiResource('Users',App\Http\Controllers\Api\UserController::class);


