<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ContributorsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\OrdersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



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

Route::apiResources([
    'companies' => CompaniesController::class,
    'admin' => AdminController::class,
    'contributors' => ContributorsController::class,
    'customers' => CustomersController::class,
    'categories' => CategoriesController::class,
    'orders' => OrdersController::class,
    'food' => FoodsController::class,
]);