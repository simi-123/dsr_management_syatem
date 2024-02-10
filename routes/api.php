<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\CustomerController;

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


// Admin routes
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    // Define admin routes
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
    // ...
});

// Developer routes
Route::group(['middleware' => ['auth', 'role:developer']], function () {
    // Define developer routes
    Route::get('/developer', [DeveloperController::class, 'index'])->name('developer.home');
    // ...
});

// Customer routes
Route::group(['middleware' => ['auth', 'role:customer']], function () {
    // Define customer routes
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.home');
    // ...

});
});