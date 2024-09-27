@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('main')

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


<!--PAGE HEADER-->    

<header class="page-header">

    <h1 class="page-title">Pages</h1>

    <p class="page-header-cta"><a href="{{ route('msuitePageCreateView') }}" class="btn btn-primary">Add a Custom Page</a></p>

</header>

<!--PAGE HEADER ENDS-->

<!--FILTER PANEL--> 
<div class="panel filter-panel form-inline">
    <form action="" method="get" onchange="this.submit()">
        <h2>Filter:</h2>

        {!! $routingData->renderFilterFormInputs() !!}

        <p>
            <label for="filterSection">No Filters</label>
        </p>

    </form>
</div>
<!--FILTER PANEL ENDS-->

<!--LISTER PANEL-->
<div class="panel lister-panel">

    <div class="num-results-holder">

        <p>
            <span class="lister-total-results">{{$pages->total()}} Page{{ $pages->total() !== 1 ? 's' : '' }}</span>
        </p>

        @include('vendor.digitalmarmalade.MarmaladeSuite.Partials.pagination', ['model' => $pages, 'type' => 'top', 'parameters' => $routingData->getPaginationRouteParameters()])

    </div><!--/num-results-holder-->

    <form action="" method="get" onchange="this.submit()">

        <table class="list-table">

            <thead>
                <tr>
                    <th class="column-page-title sortable">
                        <a href="{{ route('msuitePages', $routingData->getSortableRouteParameters('name')) }}">
                            Page
                            <span class="glyph-icon flaticon-arrows-6" aria-hidden="true"></span>
                            <!--
                            TODO: if sorted by this column descended:
                            -->
                            <!--
                            <span class="glyph-icon flaticon-arrows" aria-hidden="true"></span>
                            -->
                            <!--
                            TODO: if sorted by this column ascended:
                            -->
                            <!--
                            <span class="glyph-icon flaticon-arrows-1" aria-hidden="true"></span>
                            -->
                        </a>
                    </th>
                    <th colspan="2" class="lister-actions">Actions</th>
                </tr>
            </thead>

            <tbody>


                @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->name }}</td>
                    <td class="icon-action"><a href="{{ route('msuitePageEdit', ['pageId' => $page->id]) }}" title="Edit"><span class="glyph-icon flaticon-edit" aria-hidden="true"></span><span class="visuallyhidden"> Edit</span></a></td>
                    <td class="icon-action">
                        <a href="{{ route('msuitePagePreview', ['pageId' => $page->id]) }}" title="Preview" target="_blank">
                            <span class="glyph-icon flaticon-photo" aria-hidden="true"></span>
                            <span class="visuallyhidden"> Preview</span>
                        </a>
                    </td> 		
                </tr>
                @endforeach

            </tbody>

        </table>


        <div class="num-results-holder">
            <p>
                <span class="lister-total-results">{{$pages->total()}} Page{{ $pages->total() !== 1 ? 's' : '' }}</span>
            </p>

            @include('vendor.digitalmarmalade.MarmaladeSuite.Partials.pagination', ['model' => $pages, 'type' => 'bottom'])

        </div><!--/num-results-holder-->

    </form>

</div>
<!--LISTER PANEL ENDS-->


@endsection


