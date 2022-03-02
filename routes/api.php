<?php

use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('v1/login', [AuthController::class, 'login']);
Route::resource('v1/product', ProductController::class)->except('edit', 'create');
Route::post('v1/product/sorting', [ProductController::class, 'sorting']);
// Route::group(['middleware' => 'auth:sanctum'], function () {
//     Route::resource('v1/product', ProductController::class)->except('edit', 'create');
//     // Route::get('v1/product', [ProductController::class, 'index']);
// });
