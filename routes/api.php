<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApmcController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\WholesellerController;
use App\Http\Controllers\RetailerController;

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

Route::resource('apmc', ApmcController::class);
Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);
Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('wholeseller', WholesellerController::class);
Route::resource('retailer', RetailerController::class);

