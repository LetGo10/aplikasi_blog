<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('/main');
});

Route::get('/destinasi', function () {
    return view('/destinasi');
});

Route::get('/hubungi', function () {
    return view('/hubungi');
});

Route::get('/about_us', function () {
    return view('/about_us');
});
