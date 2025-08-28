<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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
Route::put('/posts/{slug}/update', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');

Route::delete('posts/{slug}', [
    \App\Http\Controllers\PostController::class,
    'destroy'
])->name('posts.destroy');

Route::post('posts/{slug}/comments', [
    \App\Http\Controllers\CommentController::class,
    'store'
])->name('comments.store');

Route::delete('comments/{id}', [
    \App\Http\Controllers\CommentController::class,
    'destroy'
])->name('comments.destroy');

Route::middleware('auth')->group(function() {
    Route::get('admin/dashboard', [
        \App\Http\Controllers\DashboardController::class,
        'index'
    ])->name('admin.dashboard.index');
});

Route::get('login', [
    \App\Http\Controllers\AuthController::class,
    'showLogin'
])->name('login');

Route::get('register', [
    \App\Http\Controllers\AuthController::class,
    'showRegister'
])->name('register');

Route::post('login', [
    \App\Http\Controllers\LoginController::class,
    'login'
])->name('login');

Route::post('register', [
    \App\Http\Controllers\AuthController::class,
    'register'
])->name('register.post');

Route::post('logout', [
    \App\Http\Controllers\AuthController::class,
    'logout'
])->name('logout');

