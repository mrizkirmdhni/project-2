<?php

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
Route::get('/layout', function () {
    return view('admin.layout');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/experiance', function () {
    return view('experiance');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/checkout2', function () {
    return view('checkout2');
});
Route::get('/contact2', function () {
    return view('contact2');
});
Route::get('/experiance2', function () {
    return view('experiance2');
});
Route::get('/shop2', function () {
    return view('shop2');
});
Route::get('/login2', function () {
    return view('login2');
});
