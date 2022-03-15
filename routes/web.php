<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return view('coba');
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
