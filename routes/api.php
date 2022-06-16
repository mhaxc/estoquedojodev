<?php
use App\Http\Controllers\Api\BulkController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\Order_itemController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\Stock_LocationController;
use App\Http\Controllers\Api\StockController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TypeController;
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


Route::apiResource('bulks',\App\Http\Controllers\Api\BulkController::class);



// produtos
Route::apiResource('products',\App\Http\Controllers\Api\ProductController::class);


//categorias

Route::apiResource('categories',\App\Http\Controllers\Api\CategoryController::class);


//customers
Route::apiResource('customers',\App\Http\Controllers\Api\CustomerController::class);

//orders_items
Route::apiResource('orders_items',\App\Http\Controllers\Api\Order_itemController::class);


//orders
Route::apiResource('orders',\App\Http\Controllers\Api\OrderController::class);


//stocks_locations
Route::apiResource('stockslocations',\App\Http\Controllers\Api\Stock_LocationController::class);


//stocks

//Route::apiResource('stocks',\App\Http\Controllers\Api\StockController::class);


//users
Route::apiResource('users',\App\Http\Controllers\Api\UserController::class);



//type_payments
Route::apiResource('type',\App\Http\Controllers\Api\TypeController::class);

