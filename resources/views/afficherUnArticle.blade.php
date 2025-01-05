@include('header')

<div>
    <article>
        <header>
            <h1>{{ $article->titre }}</h1>
            <div>Publié le {{ $article->created_at }}</div>
            <div>Autheur: {{ $user->name }}</div>
        </header>
        <main>
            {{ $article->contenu }}
        </main>
    </article>
</div>

@include('footer')