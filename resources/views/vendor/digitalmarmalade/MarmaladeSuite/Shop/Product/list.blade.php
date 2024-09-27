@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('main')

@section('site_navigation')

@parent

<ul class="suite-quicklinks">
    <li><a href="{{ route('msuiteHome') }}">Dashboard</a></li>
    <li><a href="{{ route('msuiteShop') }}">Shop</a></li>
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

    <h1 class="page-title">Products</h1>

    <p class="page-header-cta"><a href="{{ route('msuiteShopAddProductView') }}" class="btn btn-primary">Add a Product</a></p>

</header>

<!--PAGE HEADER ENDS-->

<!--FILTER PANEL--> 
<!--<div class="panel filter-panel form-inline">
    <form action="" method="get" onchange="this.submit()">
        <h2>Filter:</h2>

        !! $routingData->renderFilterFormInputs() !!

        <p>
            <label for="filterSection">No Filters</label>
        </p>

    </form>
</div>-->
<!--FILTER PANEL ENDS-->

<!--LISTER PANEL-->
<div class="panel lister-panel">

    <div class="num-results-holder">

        <p>
            <span class="lister-total-results">{{$products->total()}} Product{{ $products->total() !== 1 ? 's' : '' }}</span>
        </p>

        @include('vendor.digitalmarmalade.MarmaladeSuite.Partials.pagination', ['model' => $products, 'type' => 'top', 'parameters' => $routingData->getPaginationRouteParameters()])

    </div><!--/num-results-holder-->

    <form action="" method="get" onchange="this.submit()">

        <table class="list-table">

            <thead>
                <tr>
                    <th class="column-page-title sortable">Name</th>
                    <th class="lister-actions">Actions</th>
                </tr>
            </thead>

            <tbody>


                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td class="icon-action"><a href="{{ route('msuiteShopEditProductView', ['productId' => $product->id]) }}" title="Edit"><span class="glyph-icon flaticon-edit" aria-hidden="true"></span><span class="visuallyhidden"> Edit</span></a></td>
                </tr>
                @endforeach

            </tbody>

        </table>


        <div class="num-results-holder">
            <p>
                <span class="lister-total-results">{{$products->total()}} Product{{ $products->total() !== 1 ? 's' : '' }}</span>
            </p>

            @include('vendor.digitalmarmalade.MarmaladeSuite.Partials.pagination', ['model' => $products, 'type' => 'bottom'])

        </div><!--/num-results-holder-->

    </form>

</div>
<!--LISTER PANEL ENDS-->


@endsection


