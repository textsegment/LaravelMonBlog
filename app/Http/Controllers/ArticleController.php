<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Afficher les articles
    public function afficherLesArticles() {
        return view('afficherLesArticles');
    }

    // Afficher un article
    public function afficherUnArticle(int $id) {
        return view('afficherUnArticle');
    }

    // Ajouter un article
    public function ajouterUnArticle() {
        return view('ajouterUnArticle');
    }

    public function ajouterUnArticleAction() {
        return view('ajouterUnArticleAction');
    }

    // Supprimer un article
    public function supprimerUnArticle(int $id) {
        return view('supprimerUnArticle');
    }

    public function supprimerUnArticleAction(int $id) {
        return __FUNCTION__;
    }

    // Mettre à jour un article
    public function mettreajourUnArticle(int $id) {
        return view('mettreajourUnArticle');
    }

    public function mettreajourUnArticleAction(int $id) {
        return __FUNCTION__;
    }
}
