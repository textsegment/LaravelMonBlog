@include('header')

@foreach ($articles as $article)
    
    <a href="/afficherUnArticle/{{ $article->id }}">
        <article>
            <header>
                <h1>{{ $article->titre }}</h1>
                <time>{{ $article->created_at }}</time>
            </header>
        </article>
    </a>
@endforeach

</div>

@include('footer')