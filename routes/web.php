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

Route::get('/primipassi', function () {
    return view('PrimiPassi');
});

Route::get('/social', function () {
    return view('social');
});

Route::get('/galleria', function () {
    return view('galleria');
});

Route::get('/feedback', function () {
    return view('feedback');
});
