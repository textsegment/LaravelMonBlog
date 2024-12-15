<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
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


// Les routes principales

Route::redirect('/', 'afficherLesArticles');

// Afficher les articles
Route::get('/afficherLesArticles', [ArticleController::class, 'afficherLesArticles'])->name('afficherLesArticles');

// Afficher un article
Route::get('/afficherUnArticle/{id}/', [ArticleController::class, 'afficherUnArticle'])->name('afficherUnArticle');


Route::middleware(['auth'])->group(function() {
    // Ajouter un article
    Route::get('/ajouterUnArticle/', [ArticleController::class, 'ajouterUnArticle'])->name('ajouterUnArticle');
    Route::post('/ajouterUnArticle/', [ArticleController::class, 'ajouterUnArticleAction']);
    
    // Supprimer un article
    Route::get('/supprimerUnArticle/{id}/', [ArticleController::class, 'supprimerUnArticle'])->name('supprimerUnArticle');
    Route::post('/supprimerUnArticle/{id}/', [ArticleController::class, 'supprimerUnArticleAction']);
    
    // Mettre à jour un article
    Route::get('/mettreajourUnArticle/{id}/', [ArticleController::class, 'mettreajourUnArticle'])->name('mettreajourUnArticle');
    Route::post('/mettreajourUnArticle/{id}/', [ArticleController::class, 'mettreajourUnArticleAction']); 
});