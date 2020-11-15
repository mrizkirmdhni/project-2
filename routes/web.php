<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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
Route::get('admin', [HomeController::class, 'showAdmin']);

Route::get('layout', [HomeController::class, 'showLayout']);

Route::get('checkout', [HomeController::class, 'showCheckout']);

Route::get('contact', [HomeController::class, 'showContact']);

Route::get('experiance', [HomeController::class, 'showExperiance']);

Route::get('shop', [HomeController::class, 'showShop']);

Route::get('checkout2', [HomeController::class, 'showCheckout2']);

Route::get('contact2', [HomeController::class, 'showContact2']);

Route::get('experiance2', [HomeController::class, 'showExperiance2']);

Route::get('login2', [AuthController::class, 'showLogin2']);

Route::prefix('admin')->middleware('auth')->group(function(){
	Route::resource('shop2', ShopController::class);
	Route::resource('user', UserController::class);
});

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);







