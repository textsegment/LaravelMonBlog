@include('header')

<div>
    <article>
        <header>
            <h1>{{ $article->titre }}</h1>
            <time>{{ $article->created_at }}</time>
        </header>
        <main>
            {{ $article->contenu }}
        </main>
    </article>
</div>

@include('footer')