<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactEntryController;

Route::get('/', [PostController::class, 'frontPage'])->name('frontpage');

// Routes for blog posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/contact-entries', [ContactEntryController::class, 'index'])->name('contact-entries.index');


// Routes for additional pages
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/imprint', [PageController::class, 'imprint'])->name('imprint');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::get('/api/posts', [PostController::class, 'apiIndex']);

Route::get('/contact', [ContactController::class, 'showForm'])->name('pages.contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('pages.contact.submit');




