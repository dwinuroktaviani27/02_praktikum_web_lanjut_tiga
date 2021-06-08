<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route Home
Route::get('/', [HomeController::class, 'index']);

// Route Prefix
Route::prefix('products')->group(function () {
    Route::get('/1', [ProductsController::class, 'p1']);
    Route::get('/2', [ProductsController::class, 'p2']);
    Route::get('/3', [ProductsController::class, 'p3']);
    Route::get('/4', [ProductsController::class, 'p4']);
});

// Route Param
Route::get('/news/{id}', [NewsController::class, 'index']);


