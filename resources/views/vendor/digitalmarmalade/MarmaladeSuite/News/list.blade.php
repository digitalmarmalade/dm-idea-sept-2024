@extends('vendor.digitalmarmalade.MarmaladeSuite.master')


@section('site_navigation')

@parent

<ul class="suite-quicklinks">
    <li><a href="{{ route('msuiteHome') }}">Dashboard</a></li>
</ul>

<form class="search-holder" action="" method="get">
    {!! $routingData->renderSearchFormInputs() !!}
    <label for="search" class="visuallyhidden">Search</label>
    <input type="text" name="search" placeholder="Search" value="{{ $routingData->getSearch() }}" />

    <button type="submit">
        <span class="glyph-icon flaticon-interface" aria-hidden="true"></span>
        <span class="visuallyhidden">Search</span>
    </button>
</form>

@stop

@section('main')



<!--PAGE HEADER-->    

<header class="page-header">

    <h1 class="page-title">News</h1>

    <p class="page-header-cta"><a href="{{ route('msuiteNewsArticleCreate') }}" class="btn btn-primary">Add a News Article</a></p> <!-- was route('newsArticleCreateView') -->

</header>

<!--PAGE HEADER ENDS-->

<!--FILTER PANEL--> 
<div class="panel filter-panel form-inline">
    <form action="" method="get" onchange="this.submit()">
        <h2>Filter:</h2>

        {!! $routingData->renderFilterFormInputs() !!}

            <label for="filterStatus">Status</label>
            <span class="select-wrapper">
                {!! $filterable['status']->render() !!}
            </span>
        </p>

    </form>
</div>
<!--FILTER PANEL ENDS-->

<!--LISTER PANEL-->
<div class="panel lister-panel">

    <div class="num-results-holder">

        <p>
            <span class="lister-total-results">{{$news->total()}} Article{{ ($news->total() == 0 || $news->total() > 1) ? 's' : '' }}</span>
        </p>
        
        @include('vendor.digitalmarmalade.MarmaladeSuite.Partials.pagination', ['model' => $news, 'type' => 'top'])

    </div><!--/num-results-holder-->

    <form action="" method="get" onchange="this.submit()">

        <table class="list-table">
            <thead>
                <tr>
                    <th>Published Date</th>
                    <th><a href="{{ route('msuiteNews', $routingData->getSortableRouteParameters('title')) }}">Article Name</a></th>
                    <th>Category</th>
                    <th>Region</th>
                    <th><a href="{{ route('msuiteNews', $routingData->getSortableRouteParameters('status')) }}">Status</a></th><!--published-->
                    <th colspan="2" class="lister-actions">Actions</th>
                </tr>
            </thead>
            @forelse ($news as $article)
            <tr>
                <td>
                    @if ($article->published_at)
                    {{ $article->published_at->format('d/m/Y H:i') }}
                    @endif
                </td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->news_category_names }}</td>
                <td>{{ $article->region_name }}</td>
                <td>{{ ArticleStatus::getName($article->status) }}</td>            
                <td class="icon-action">
                    <a href="{{ route('msuiteNewsArticleEdit', ['articleId' => $article->id]) }}" title="Edit">
                        <span class="glyph-icon flaticon-edit" aria-hidden="true"></span><span class="visuallyhidden"> Edit</span>
                    </a>
                </td>								
                <td class="icon-action">
                    <form method="post" action="{{ route('msuiteNewsArticleDelete', ['articleId' => $article->id]) }}">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn-icon">
                            <span class="glyph-icon flaticon-tool" aria-hidden="true"></span>
                            <span class="visuallyhidden"> Delete</span>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr class="no-results">
                <td colspan="6">No news articles found</td>        
            </tr>
            @endforelse

        </table>

        <div class="num-results-holder">

            <p>
                <span class="lister-total-results">{{$news->count()}} Article{{ ($news->count() == 0 || $news->count() > 1) ? 's' : '' }}</span>
            </p>


            @include('vendor.digitalmarmalade.MarmaladeSuite.Partials.pagination', ['model' => $news, 'type' => 'bottom'])

        </div><!--/num-results-holder-->

    </form>

</div>

<script>

    //  save filter display status when changed
    $('.jsPanel').click(function () {
        if (MSuite.localStorage && MSuite.sItemName !== undefined) {
            var el = $(this),
                sLSkeyName = 'msuite_' + MSuite.sItemName + '_panel_' + el.data('panel');
            localStorage.setItem(sLSkeyName, el.find('h2').hasClass('twisted'));
        }
    });

</script>

@endsection