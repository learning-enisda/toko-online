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

Route::get('/home', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('layout.main_shop');
});

Route::get('/checkout', function () {
    return view('layout.main_checkout');
});

Route::get('/cart', function () {
    return view('layout.main_cart');
});

Route::get('/blog', function () {
    return view('layout.main_blog');
});

Route::get('/post', function () {
    return view('layout.main_post');
});

Route::get('/wp-admin', function () {
    return view('admin');
});
