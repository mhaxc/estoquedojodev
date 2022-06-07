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

//
//Route::apiResource('bulks',App\Http\Controllers\Api\BulkController::class);
//Route::apiResource('Users_has_Customer',App\Http\Controllers\Api\Users_has_CustomerController::class);


//Route::apiResource('Type',App\Http\Controllers\Api\TypeController::class);


//Route::apiResource('Stock',App\Http\Controllers\Api\StockController::class);


//Route::apiResource('Stock_Location',App\Http\Controllers\Api\Stock_LocationController::class);


//Route::apiResource('Order',App\Http\Controllers\Api\OrderController::class);


//Route::apiResource('Order_item',App\Http\Controllers\Api\Order_itemController::class);


//Route::apiResource('Category',App\Http\Controllers\Api\CategoryController::class);


//Route::apiResource('Customer',App\Http\Controllers\Api\CustomerController::class);