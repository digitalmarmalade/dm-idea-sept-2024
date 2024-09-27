

 <nav class="faux-tab-nav">
     <ul>
        <li class="{{ Request::route()->getName() === 'msuiteNewsEdit' ? 'on' : '' }}"><a href="{{ route('msuiteNewsArticleEdit', ['articleId' => $article->id]) }}">Content</a></li>
         <li class="{{ Request::route()->getName() === 'msuiteNewsArticleEditSeo' ? 'active' : '' }}"><a href="<!-- route('msuiteNewsArticleEditSeo', ['articleId' => $article->getId()]) -->">SEO</a></li>
     </ul>
</nav>
</nav>

