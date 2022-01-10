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
    return view('master');
});
Route::get('/new', function () {
    return view('new');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/sale', function () {
    return view('sale');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/bookroom', function () {
    return view('bookroom');
});
Route::get('/bookroom-more', function () {
    return view('bookroom-more');
});
Route::get('/result', function () {
    return view('result');
});
Route::get('/check-out', function () {
    return view('check-out');
});

