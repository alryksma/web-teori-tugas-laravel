<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home",
        "nama" => "Alif Arya Kusuma",
        "image" => "images/alipganteng.png",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title'=> 'about',
    ]);
});

Route::get('/services', function () {
    return view('services',[
        'title'=> 'services',
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio',[
        'title'=> 'portfolio',
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        'title'=> 'contact',
    ]);
});



