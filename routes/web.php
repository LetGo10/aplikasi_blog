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

Route::get('/posts', function () {
    return view('/posts');
})->name('posts');

Route::get('/contact', function () {
    return view('/contact');
})->name('contact');
