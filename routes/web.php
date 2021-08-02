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

Route::get('/services', function () {
    return "<h1>Halaman Services</h1>";
});

Route::get('/about', function () {
    return "<h1>Halaman About</h1>";
});

Route::get('/contact', function () {
    return "<h1>Halaman Contact</h1>";
});
