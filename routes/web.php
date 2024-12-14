<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::redirect('/', '/all/');

// Show all posts
Route::get('/all/', function() { return 'show posts'; })->name('show_posts');

// Show single post
Route::get('/get/{post_id}/', function(int $post_id) { return 'show post'; })->name('show_post');


Route::middleware(['auth'])->group(function() {
    // Add blog post
    Route::get('/add/', function() { return 'add post'; })->name('add_post');
    Route::post('/add/', function() { return 'add post handler'; });
    
    // Delete blog post
    Route::get('/delete/{post_id}/', function(int $post_id) { return 'delete post'; })->name('delete_post');
    Route::post('/delete/{post_id}/', function(int $post_id) { return 'delete post handler'; });
    
    // Update blog post
    Route::get('/update/{post_id}/', function(int $post_id) { return 'update post'; })->name('update_post');
    Route::post('/update/{post_id}/', function(int $post_id) { return 'update post handler'; }); 
});