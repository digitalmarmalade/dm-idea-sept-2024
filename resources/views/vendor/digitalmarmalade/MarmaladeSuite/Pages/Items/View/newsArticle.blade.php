<div class="grid">
    <article class="col-1-1 widget-header-output">
        <div class="column-content">
            <header class="">
                <h1>{{ $article->title }}</h1>
            </header>
            <h3>Author: {{ $article->author }}</h3>
            <p>{!! $article->content !!}</p>
        </div>
    </article>
</div>