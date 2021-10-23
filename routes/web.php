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

// ini adalah route untuk halaman utama admin 
Route::get('/wp-admin', function () {
    return view('admin');
});

// Ini adalah route untuk welcome Laravel 
Route::get('/', function () {
    return view('welcome');
});

// ini adalah route untuk tampilan home user 
Route::get('/home', function () {
    return view('home');
});

// ini adalah route untuk tampilan shop user 
Route::get('/shop', function () {
    return view('layout.main_shop');
});

// ini adalah route untuk tampilan checkout user 
Route::get('/checkout', function () {
    return view('layout.main_checkout');
});

// ini adalah route untuk tampilan cart user 
Route::get('/cart', function () {
    return view('layout.main_cart');
});

// ini adalah route untuk tampilan blog 
Route::get('/blog', function () {
    return view('layout.main_blog');
});

// ini adalah route untuk tampilan post 
Route::get('/post', function () {
    return view('layout.main_post');
});

// ini adalah route untuk tampilan kontak 
Route::get('/contact', function () {
    return view('layout.main_contact');
});
