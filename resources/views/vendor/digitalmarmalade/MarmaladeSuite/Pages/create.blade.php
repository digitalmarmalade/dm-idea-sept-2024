@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('head')
@parent
{!! \DigitalMarmalade\Wysiwyg\WysiwygOutput::header() !!}
{!! Cropper::header() !!}
@endsection

@section('site_navigation')

@parent

<ul class="suite-quicklinks">
    <li><a href="{{ route('msuiteHome') }}">Dashboard</a></li>
    <li><a href="{{ route('msuitePages') }}">All Pages</a></li>
    <li class="right"><a href="{{ route('msuitePageCreateView') }}">Add a Custom Page</a></li>
</ul>

@stop

@section('main')
<!-- old content was here-->


<!--IN PAGE NAVIGATION PANEL--> 
<div class="panel in-page-navigation-panel">

    <nav class="in-page-navigation">
        @include('vendor.digitalmarmalade.MarmaladeSuite.Pages.Navigation.subNavigation')
    </nav>

    <nav class="language-selector">
        <ul>
            @foreach (LocaleManager::getAvailable() as $code => $locale)                
            <li @if (App::getLocale()==$code) class="on" @endif><a href="{{ $locale['route'] }}" >{{ $code }}</a></li>
            @endforeach
        </ul>
    </nav>

</div>
<!--IN PAGE NAVIGATION PANEL ENDS--> 

<!--ADD A WIDGET-->

<nav class="add-a-widget">
    <div class="add-heading"><span class="glyph-icon flaticon-cross"></span><span class="visuallyhidden">Add</span></div>
    <ul>
        @foreach (Config::get('msuite.app.pagebuilder.items') as $itemId => $item)
        @if (Auth::user()->digitalmarmalade || (!Auth::user()->digitalmarmalade))
        <li>				
            <a class="js-pagebuilder-add-item-button" href="{{ route('msuitePageCreateViewAddSessionItem', ['itemId' => $itemId]) }}">
                {{ $item['name'] }}
            </a>
        </li>
        @endif
        @endforeach	

    </ul>

</nav>


<!--ADD A WIDGET ENDS-->

@include('vendor.digitalmarmalade.MarmaladeSuite.FeedbackMessages.messages')

<form action="{{ route('msuitePageCreateAction', ['pageId' => $page->getId()]) }}" method="post" enctype="multipart/form-data" class="main-form pagebuilder-form">
    {!! csrf_field() !!}



    <!--PAGE TITLE-->
    <div class="panel form-panel">

        <fieldset>

            <legend class="title-legend">
                Page Title
                <span class="colon @if (old('name', $page->getName()) === '') hide @endif">:</span> <span class="panel-entered-title js-panel-entered-title">
                    @if (old('name', $page->getName()) !== '')
                        {{ old('name', $page->getName()) }}
                    @endif
                </span>
            </legend>

            <p class="full-width-form-input">
                <label for="page-name">Page Title</label>
                <input type="text" placeholder="Text" id="page-name" type="text" name="name" value="{{ old('name', $page->getName()) }}" class="js-panel-title-input" maxlength="45" />
            </p>
        </fieldset>
    </div>    


    <!--SORTBALE PANELS--> 

    <div class="sortable-panels js-pagebuilder-items-wrapper">
        @forelse ($page->getItems() as $item)
        <div class="panel form-panel js-pagebuilder-item-wrapper">

            
            <ul class="panel-controls">
                <li><a class="js-form-panel-delete-button" href="{{ route('msuiteDeletePageItem', ['pageId' => $page->getId(), 'itemId' => $item->getId()]) }}"><span class="glyph-icon flaticon-tool"></span><span class="visuallyhidden">Delete widget</span></a></li>
                <li><a class="js-form-panel-move-up-button" href="#"><span class="glyph-icon flaticon-arrows-7"></span><span class="visuallyhidden">Move up</span></a></li>
                <li><a class="js-form-panel-move-down-button" href="#"><span class="glyph-icon flaticon-arrows-6"></span><span class="visuallyhidden">Move down</span></a></li>
            </ul>
            

            <div class="js-form-panel-render-edit-wrapper">
                {!! $item->renderEdit() !!}
            </div>

        </div>
        @empty
        <!--<p class="no-widgets-added"></p>-->
        @endforelse
    </div>
    
    <div class="panel form-panel js-pagebuilder-item-wrapper js-pagebuilder-render-edit-item-wrapper-template" style="display: none;">
        <ul class="panel-controls">
            <li><a class="js-form-panel-delete-button" href="#"><span class="glyph-icon flaticon-tool"></span><span class="visuallyhidden">Delete widget</span></a></li>
            <li><a class="js-form-panel-move-up-button" href="#"><span class="glyph-icon flaticon-arrows-7"></span><span class="visuallyhidden">Move up</span></a></li>
            <li><a class="js-form-panel-move-down-button" href="#"><span class="glyph-icon flaticon-arrows-6"></span><span class="visuallyhidden">Move down</span></a></li>
        </ul>

        <div class="js-form-panel-render-edit-wrapper">

        </div>
    </div>


    <div class="action-buttons">
        <p>
            <button type="submit" value="Save" class="btn btn-primary btn--lg js-show-save-overlay">Save</button>
        </p>
    </div>



</form>
<script>

    ($(function() {
        $('.sortable-panels').on('click', '.js-form-panel-move-up-button', function(event) {
            event.preventDefault();
            var panel = $(this).closest('.panel');
            var previousPanel = panel.prev('.panel');
            
            if (previousPanel.length) {
                panel.insertBefore(previousPanel);
            }
       }).on('click', '.js-form-panel-move-down-button', function(event) {
            event.preventDefault();
            var panel = $(this).closest('.panel');
            var nextPanel = panel.next('.panel');
            
            if (nextPanel.length) {
                panel.insertAfter(nextPanel);
            }
       })
       
       $('body').on('click', '.js-pagebuilder-add-item-button', function(event) {
           event.preventDefault();
           $.get($(this).attr('href'), function(response) {
               var newItem = $('.js-pagebuilder-render-edit-item-wrapper-template').clone();
               newItem.removeClass('js-pagebuilder-render-edit-item-wrapper-template');
               newItem.find('.js-form-panel-delete-button').attr('href', response.deleteUrl);
               newItem.find('.js-form-panel-render-edit-wrapper').html(response.renderEdit);
               newItem.show();
               $('.js-pagebuilder-items-wrapper').append(newItem);
           });
       });
       $('.js-pagebuilder-items-wrapper').on('click', '.js-form-panel-delete-button', function(event) {
           event.preventDefault();
           var self = this;
            $.get($(this).attr('href'), function(response) {
                $(self).closest('.js-pagebuilder-item-wrapper').remove();
            });
       });
    }));

</script>






@endsection


@section('common-javascript')
@parent
<script>
    $(document).ready(function () {
        // $('.sections-wrapper-sortable').sortable({items: '.section-wrapper'});
    });
    function showFeedback() {
        $('body').addClass('show-feedback');
    }
    setTimeout(showFeedback, 0);

    function hideFeedback() {
        $('body').removeClass('show-feedback');
    }
    setTimeout(hideFeedback, 5000);
</script>
@endsection