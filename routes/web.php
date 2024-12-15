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

// Afficher les articles
Route::get('/', [ArticleController::class, 'afficherLesArticles'])->name('afficherLesArticles');

// Afficher un article
Route::get('/afficher/{id}/', [ArticleController::class, 'afficherUnArticle'])->name('afficherUnArticle');


Route::middleware(['auth'])->group(function() {
    // Ajouter un article
    Route::get('/ajouter/', [ArticleController::class, 'ajouterUnArticle'])->name('ajouterUnArticle');
    Route::post('/ajouter/', [ArticleController::class, 'ajouterUnArticleAction']);
    
    // Supprimer un article
    Route::get('/supprimer/{id}/', [ArticleController::class, 'supprimerUnArticle'])->name('supprimerUnArticle');
    Route::post('/supprimer/{id}/', [ArticleController::class, 'supprimerUnArticleAction']);
    
    // Mettre à jour un article
    Route::get('/mettreajour/{id}/', [ArticleController::class, 'mettreajourUnArticle'])->name('mettreajourUnArticle');
    Route::post('/mettreajour/{id}/', [ArticleController::class, 'mettreajourUnArticleAction']); 
});