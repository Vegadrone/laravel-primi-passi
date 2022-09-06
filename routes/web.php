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
    return view('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/laravel', function () {
    return view('laravel');
});

Route::get('/magic', function () {
    return view('magic');
});
Route::get('/shop', function () {
    return view('shop');
});
