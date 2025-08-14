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

/*Route::get('/posts', function () {
    return view('posts.index');
})->name('posts.index');*/

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{slug}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{slug}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');

Route::post('/posts/store', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::post('/posts/{slug}/update', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
