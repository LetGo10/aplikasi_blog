<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
})->name('main');

/*Route::get('/about', function () {
    return view('about');
})->name('about');*/

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');

/*Route::get('/posts', function () {
    return view('posts.index');
})->name('posts.index');*/

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
