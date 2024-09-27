@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('head')
    @parent
    {!! Wysiwyg::header() !!}
@endsection


@section('site_navigation')

@parent

<ul class="suite-quicklinks">
    <li><a href="{{ route('msuiteHome') }}">Dashboard</a></li>
    <li><a href="{{ route('msuiteNews') }}">All News</a></li>
    <li class="right"><a href="{{ route('msuiteNewsArticleCreate') }}">Add a News Article</a></li>
</ul>

@stop


@section('main')



<!--IN PAGE NAVIGATION PANEL--> 
<div class="panel in-page-navigation-panel">

    <nav class="in-page-navigation">
        @include('vendor.digitalmarmalade.MarmaladeSuite.News.Navigation.subNavigation')
    </nav>

</div>
<!--IN PAGE NAVIGATION PANEL ENDS--> 

@include('vendor.digitalmarmalade.MarmaladeSuite.FeedbackMessages.messages')

<form action="{{ route('msuiteNewsArticleUpdate', ['articleId' => $article->id]) }}" class="main-form" method="post" enctype="multipart/form-data">    
    {!! csrf_field() !!}

    <div class="panel form-panel">

        <fieldset>

            <legend class="title-legend">Article<span class="colon @if (old('name', $article->title) !== '') hide @endif">:</span> <span class="panel-entered-title js-panel-entered-title">
                    @if (old('name', $article->title) !== '')
                    {{ old('name', $article->title) }}
                    @endif</span></legend>

            <p class="full-width-form-input">
                <label for="title">Title </label><input type="text" name="title" value="{{ old('title', $article->title) }}" class="js-panel-title-input" />
            </p>

            <p class="standard-form-input standard-form-input--textarea">
                <label for="teaser">News Teaser</label>
                <textarea id="teaser" name="teaser" maxlength="385">{{ old('teaser', $article->teaser) }}</textarea>
            </p>



            <!--
            include('vendor.SwimWales.Website.Partials.reusableImageInput', [
                'hasImage' => ($article->image_filepath ? true : false),
                'imagePath' => route('newsArticleTitleImage', $article->slug) . '?' . str_random(40),
                'altFieldId' => 'image_alt',
                'altFieldName' => 'image_alt',
                'altValue' => old('image_alt', $article->image_alt),
                'width' => $imageWidth,
                'height' => $imageHeight,
                'reuseInputName' => 'image_reuse',
                'reuseInputClass' => 'js-image-reuse',
                'fileInputName' => 'image_file',
                'aspectRatio' => $aspectRatio,
                'reuseButtonClass' => 'js-image-pick-existing-button',
                'overlayClassName' => 'js-reusable-images'
            ])-->

        </fieldset>

    </div>

    <!--PAGE BUILDER--> 

    <div class="js-news-page-wrapper">
        {!! $page->renderEdit() !!}
    </div>



    <!--ARTICLE STATUS--> 

    <div class="panel form-panel">

        <fieldset>

            <legend class="title-legend">Article Status</legend>
            <p class="standard-form-input">
                <label for="status">Status</label>
                <span class="select-wrapper">
                    <select id="status" name="status">
                        @foreach ($articleStatuses->get() as $id => $name)
                        <option value="{{ $id }}" {{ $id === old('status', $article->status) ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </span>
            </p>
        </fieldset>

    </div>

    <div class="action-buttons">

        <p><button type="submit" class="btn btn-primary btn--lg js-show-save-overlay">Save</button></p>

    </div>

</form>



@endsection