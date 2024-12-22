<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

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

    public function ajouterUnArticleAction(Request $req) {
        $user_id = Auth::id();
        $article = new Article();
        $article->titre = $req->titre;
        $article->contenu = $req->contenu;
        $article->user_id = $user_id;
        $article->save();
        return redirect('/');
    }

    // Supprimer un article
    public function supprimerUnArticle(int $id) {
        $article = Article::find($id);
        $article->delete();
        return redirect('/');
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
