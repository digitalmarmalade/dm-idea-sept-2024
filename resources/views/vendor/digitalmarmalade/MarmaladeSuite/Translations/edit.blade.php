@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('main')

<hgroup class="page-heading">
	<h1 class="page-header">Label Translations</h1>      
	<p>{{$translations->total()}} Label{{ ($translations->total() == 0 || $translations->total() > 1) ? 's' : '' }}</p>	  
</hgroup>

<!--FILTER PANEL--> 
<div class="panel filter-panel form-inline">
    <form action="" method="get" onchange="this.submit()">
        <h2>Filter:</h2>

        {!! $routingData->renderFilterFormInputs() !!}

        <p>
            <label for="filterSection">Group</label>
            <span class="select-wrapper">
                {!! $filterable['group']->render() !!}
            </span>
        </p>

    </form>
</div>

<form action="{{ route('msuiteTranslationsUpdate') }}" method="post">
    <!--LISTER PANEL-->
    <div class="panel lister-panel">

        <div class="num-results-holder">

            @include('vendor.digitalmarmalade.MarmaladeSuite.Partials.pagination', ['model' => $translations, 'type' => 'top', 'parameters' => $routingData->getPaginationRouteParameters()])

        </div><!--/num-results-holder-->


        {{ csrf_field() }}

        <table class="list-table translations">

            <thead>
                <tr>
                    <th class="column-section">English Label</th>
                    <th class="column-sub-section">{{ $altLocale['name'] }} Label</th>
                    <th class="column-page-title">Section</th>
                </tr>
            </thead>

            <tbody>


                @foreach ($translations as $translation)
                <tr>
                    <td><input type="text" name="translations[{{ $translation->group }}][{{ $translation->item }}][en]" value="{{ $translation->english_text }}" /></td>
                    <td><input type="text" name="translations[{{ $translation->group }}][{{ $translation->item }}][{{ $altLocale['code'] }}]" value="{{ $translation->alt_text }}" /></td>
                    <td>{{ $translation->displayGroup }}</td>
                </tr>
                @endforeach

            </tbody>

        </table>


        <div class="num-results-holder">
            <p>
                <span class="lister-total-results">{{$translations->total()}} Translation{{ ($translations->total() == 0 || $translations->total() > 1) ? 's' : '' }}</span>
            </p>

            @include('vendor.digitalmarmalade.MarmaladeSuite.Partials.pagination', ['model' => $translations, 'type' => 'bottom'])

        </div><!--/num-results-holder-->


    </div>
    <!--LISTER PANEL ENDS-->

    <div class="action-buttons large">
        <p>
            <button type="submit" value="Save" class="btn btn-primary btn--lg js-show-save-overlay">Save</button>
        </p>
    </div>

</form>

@endsection
