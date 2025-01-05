<aside>
    <ul> 
    @guest
    <li><a href="/login/">S'identifier</a></li>
    <li><a href="/register/">Créer un utilisateur</a></li>
    @endguest
    @auth
    <li><a href="/ajouterUnArticle/">Publier un article</a></li>
    @endauth
    </ul>
</aside>
