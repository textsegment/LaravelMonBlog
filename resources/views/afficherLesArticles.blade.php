@include('header')

@foreach ($articles as $article)
    
    <a href="/afficherUnArticle/{{ $article->id }}">
        <article>
            <header>
                <h1>{{ $article->titre }}</h1>
                <div>{{ $article->created_at }}</div>
            </header>
        </article>
    </a>
@endforeach

</div>

@include('footer')