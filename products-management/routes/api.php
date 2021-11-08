<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::middleware('api')->group(function () {

    Route::prefix('product')->group(function () {
        Route::get('/show', [ProductController::class,'index'])->name('show');
        Route::post('/create', [ProductController::class,'store'])->name('create');
    });

    Route::get('/categories', [CategoryController::class,'index']);
});
