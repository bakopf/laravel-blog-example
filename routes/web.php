<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);

Route::get('/', [PostController::class, 'frontPage'])->name('frontpage');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::resource('posts', PostController::class);
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');


// START API
// Get all posts
Route::get('/api/posts', [PostController::class, 'indexApi']);

// Get post by ID
Route::get('/api/posts/{id}', [PostController::class, 'showApi']);

// Get posts by author
Route::get('/api/posts/author/{author}', [PostController::class, 'showByAuthor']);



