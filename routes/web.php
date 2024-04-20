<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;

Route::get('/', [PostController::class, 'frontPage'])->name('frontpage');

// Routes for blog posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// Routes for additional pages
Route::get('/datenschutz', [PageController::class, 'datenschutz'])->name('datenschutz');
Route::get('/impressum', [PageController::class, 'impressum'])->name('impressum');
Route::get('/kontakt', [PageController::class, 'kontakt'])->name('kontakt');


Route::get('/api/posts', [PostController::class, 'apiIndex']);



