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

    $data = [
                "stringa"=>'Hello World!'
            ];

    return view("home", $data);
});


Route::get('/product', function () {
    return view("product");
});

Route::get('/contact', function () {
    return view("contact");
});