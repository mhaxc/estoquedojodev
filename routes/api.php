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

Route::get('bulks',[BulkController::class,'index']);
Route::get('bulks/{slug}',[BulkController::class,'show']);
Route::post('bulks',[BulkController::class,'store']);
Route::put('bulks/{slug}',[BulkController::class,'update']);
Route::delete('bulks/{slug}',[BulkController::class,'delete']);

// produtos
Route::get('products',[ProductController::class,'index']);
Route::get('products/{id}',[ProductController::class,'show']);
Route::post('products',[ProductController::class,'store']);
Route::put('products/{id}',[ProductController::class,'update']);
Route::delete('products/{id}',[ProductController::class,'delete']);

//categorias
Route::get('categories',[CategoryController::class,'index']);
Route::get('categories/{id}',[CategoryController::class,'show']);
Route::post('categories',[CategoryController::class,'store']);
Route::put('categories/{id}',[CategoryController::class,'update']);
Route::delete('categories/{id}',[CategoryController::class,'delete']);

//customers
Route::get('customers',[CustomerController::class,'index']);
Route::get('customers/{id}',[CustomerController::class,'show']);
Route::post('customers',[CustomerController::class,'store']);
Route::put('customers/{id}',[CustomerController::class,'update']);
Route::delete('customers/{id}',[CustomerController::class,'delete']);

//orders_items
Route::get('orders_items',[Order_itemController::class,'index']);
Route::get('orders_items/{seq}',[Order_itemController::class,'show']);
Route::post('orders_items',[Order_itemController::class,'store']);
Route::put('orders_items/{seq}',[Order_itemController::class,'update']);
Route::delete('orders_items/{seq}',[Order_itemController::class,'delete']);

//orders
Route::get('orders',[OrderController::class,'index']);
Route::get('orders/{id}',[OrderController::class,'show']);
Route::post('orders',[OrderController::class,'store']);
Route::put('orders/{id}',[OrderController::class,'update']);
Route::delete('orders/{id}',[OrderController::class,'delete']);

//stocks_locations
Route::get('stockslocations',[Stock_LocationController::class,'index']);
Route::get('stocklocations/{id}',[Stock_LocationController::class,'show']);
Route::post('stocklocations',[Stock_LocationController::class,'store']);
Route::put('stocklocations/{id}',[Stock_LocationController::class,'update']);
Route::delete('stocklocations/{id}',[Stock_LocationController::class,'delete']);


//stocks
//Route::get('stocks',[StockController::class,'index']);

//users
Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);
Route::post('users',[UserController::class,'store']);
Route::put('users/{id}',[UserController::class,'update']);
Route::delete('users/{id}',[UserController::class,'delete']);

//type_payments
Route::get('type',[TypeController::class,'index']);
Route::get('type/{id}',[TypeController::class,'show']);
Route::post('type',[TypeController::class,'store']);
Route::put('type/{id}',[TypeController::class,'update']);
Route::delete('type/{id}',[TypeController::class,'delete']);