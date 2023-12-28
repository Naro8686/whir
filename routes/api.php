<?php

use App\Http\Controllers\Api\FixedFloatController;
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


Route::group(['as' => "api."], function () {
    Route::group(['as' => "fixed-float.", 'prefix' => "fixed-float"], function () {
        Route::post('/price', [FixedFloatController::class, 'price'])->name('price');
        Route::post('/ccies', [FixedFloatController::class, 'ccies'])->name('ccies');
    });
});
