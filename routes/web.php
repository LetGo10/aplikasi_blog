<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('/main');
})->name('main');

Route::get('/about', function () {
    return view('/about');
})->name('about');
