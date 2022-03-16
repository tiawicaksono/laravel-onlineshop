<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('showproduct/{id}', 'showProduct');
});

Route::controller(UserController::class)->group(function () {
    Route::get('formlogin', 'FormLogin')->name('formlogin');
    Route::post('prosesregister', 'RegisterSignUp');
    Route::post('prosessignin', 'SignIn');
    Route::get('logout', 'Logout');
});


Route::controller(AdminController::class)->group(function () {
    Route::get('user', 'ShowUser');
    Route::post('user/show', 'listUser');
    Route::post('user/approveUser', 'ApproveUser');
    Route::post('user/approveUserChecked', 'ApproveUserChecked');
});

// Route::view('/', 'login');
// Route::post('login', 'LoginController');
// Route::get('dashboard', 'DashboardController@index');
// // Route::resource('retribusi', "RetribusiController");
// // Route::post('search', 'RetribusiController@searchProduct')->name('search');
// Route::group(['prefix' => 'cashier', 'as' => 'cashier.'], function () {
//     Route::get('create', 'RetribusiController@create')->name('create');
//     Route::post('fetch_data', 'RetribusiController@fetchData');
//     Route::post('search', 'RetribusiController@searchProduct');
//     Route::post('list', 'RetribusiController@listProduct');
//     Route::post('store', 'RetribusiController@store');
//     Route::get('print', 'RetribusiController@test');
// });

// /**
//  * ======================================================================
//  * MASTER
//  * ======================================================================
//  */

// Route::group(['prefix' => 'productPrices', 'as' => 'productPrices.'], function () {
//     Route::get('/', 'ProductPricesController@index')->name('index');
//     Route::post('update', 'ProductPricesController@update')->name('update');
//     Route::post('store', 'ProductPricesController@store')->name('store');
//     Route::post('destroy', 'ProductPricesController@destroy')->name('delete');
//     Route::post('detail', 'ProductPricesController@detailProduct')->name('detail');
//     Route::post('selectpicker', 'ProductPricesController@selectpicker');
//     Route::post('show', 'ProductPricesController@show');
// });

// Route::group(['prefix' => 'distributorProduct', 'as' => 'distributorProduct.'], function () {
//     Route::get('/', 'DistributorProductController@index')->name('index');
//     Route::post('store', 'DistributorProductController@store');
//     Route::post('destroy', 'DistributorProductController@destroy')->name('delete');
//     Route::post('show', 'DistributorProductController@show');
// });

// Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
//     Route::get('/', 'ProductController@index')->name('create');
//     Route::post('update', 'ProductController@update')->name('update');
//     Route::post('store', 'ProductController@store')->name('store');
//     Route::post('destroy', 'ProductController@destroy')->name('delete');
//     Route::post('show', 'ProductController@show');
// });

// Route::group(['prefix' => 'data', 'as' => 'data.'], function () {
//     Route::get('/', 'DataController@index')->name('create');
//     Route::post('update', 'DataController@update')->name('update');
//     Route::post('store', 'DataController@store')->name('store');
//     Route::post('destroy', 'DataController@destroy')->name('delete');
//     Route::post('show', 'DataController@show');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
