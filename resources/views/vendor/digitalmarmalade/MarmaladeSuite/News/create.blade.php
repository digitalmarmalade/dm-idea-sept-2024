@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('head')
    @parent
    {!! \DigitalMarmalade\Wysiwyg\WysiwygOutput::header() !!}
@endsection
@section('main')
<hgroup class="page-heading">
<h1 class="page-header">Edit a News Article <a href="{{ route('msuiteNews') }}">(Back to list)</a></h1>
    <form method="post" action="{{ route('msuiteNewsArticleDelete', ['articleId' => $article->id]) }}">
        {!! csrf_field() !!}
        <button type="submit" class="btn-secondary btn-delete">Delete</button>
    </form>
</hgroup>

@include('vendor.digitalmarmalade.MarmaladeSuite.FeedbackMessages.messages')

<form action="{{ route('msuiteNewsArticleUpdate', ['articleId' => $article->id]) }}" class="main-form" method="post" enctype="multipart/form-data">    
    {!! csrf_field() !!}        
	<p class="standard">
		<label for="title">Title </label><input type="text" name="title" value="{{ old('title', $article->title) }}" />
	</p>
	<p class="standard">
		<label>Author </label><input type="text" name="author" value="{{ old('author', $article->author ) }}" />
	</p>
	<p class="standard">
	    <label>Description</label>
            {!! $page->renderEdit() !!}
	</p>	
	<fieldset class="checkbox-list">
	<h2>Status</h2>
	<p>
            <select name="status" id="status">
                @foreach ($articleStatuses->get() as $id => $name)
                    <option value="{{ $id }}" {{ (($id === $article->status) ? 'selected' : '') }}>{{ $name }}</option>
                @endforeach
            </select>
	</fieldset>
	</p>
        @include('vendor.digitalmarmalade.MarmaladeSuite.Seo.edit', ['seo' => $seo])
	<div class="action-buttons">
		<!--<a class="btn btn-save" href="{{ route('msuiteNewsArticlePreview', ['articleId' => $article->id]) }}" target="_blank"><span>Preview</span></a>-->
		<!--<input type="submit" value="Save" class="btn btn-save" />-->
		<button type="submit" value="Save" class="btn btn-save" ><span>Submit</span></button>
	</div>
</form>

<aside class="widget-list" style="display: none;">
    <h1><a href="{{ route('msuitePagePreview', ['pageId' => $page->getId()]) }}" id="previewPage" class="show-preview-btn" target="_blank">Show Preview of Page</a> Add a Widget</h1>
    <p class="widget-control jsWidgetsPanelHideShow">Hide widget tools</p>
    <p class="widget-control jsWidgetsPanelHideShow">Hide widgets</p>
    <div id="widgetCarousel" class="">		
        <div id="widgetCarousel">
            <ul class="slides">
                @foreach (Config::get('msuite.news.allowed_pagebuilder_items') as $itemId)
                <li>				
                    <a href="{{ route('msuiteNewsArticleAddItem', ['pageId' => $page->getId(), 'itemId' => $itemId]) }}">
                        <div class="widget-img">
                            <img src="{{ asset(Config::get('msuite.pagebuilder.items.' . $itemId)['previewimage']) }}" />
                        </div>
                        {{ Config::get('msuite.pagebuilder.items.' . $itemId)['name'] }}
                    </a>
                </li>
                @endforeach			
            </ul>
        </div>
        <!--<ul class="flex-direction-nav"><li><a class="flex-prev flex-disabled" href="#">Previous</a></li><li><a class="flex-next flex-disabled" href="#">Next</a></li></ul>-->
    </div>
</aside>

@endsection