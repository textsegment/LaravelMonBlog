<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    // Afficher les articles
    public function afficherLesArticles() {
        $articles = Article::select(['*'])->orderBy('updated_at')->limit(100)->get();
        return view('afficherLesArticles', ['articles' => $articles]);
    }

    // Afficher un article
    public function afficherUnArticle(int $id) {
        $article = Article::find($id);
        $user = User::find($article->user_id);
        return view('afficherUnArticle', ['article' => $article, 'user' => $user]);
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
        return view('supprimerUnArticle', ['article' => $article]);
    }

    public function supprimerUnArticleAction(int $id) {
        $article = Article::find($id);
        $article->delete();
        return redirect('/');
    }

    // Mettre à jour un article
    public function mettreajourUnArticle(int $id) {
        return view('mettreajourUnArticle');
    }

    public function mettreajourUnArticleAction(int $id) {
        return __FUNCTION__;
    }
}
