@include('header')

<div>
    Voulez-vous supprimer l'article : <b>{{ $article->titre }}</b>?
    <form method="post">
        @csrf 
        <a href="/">Non</a>
        <input value="Oui" type="submit"/>
    </form>
</div>

@include('footer')