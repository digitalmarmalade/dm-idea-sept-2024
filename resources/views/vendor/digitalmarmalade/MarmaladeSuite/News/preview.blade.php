@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('main')

<h1 class="page-header">{{ Config::get('msuite.app.name') }} {{ Config::get('msuite.app.version') }} - Preview Article</h1>
    
<div>
    <h1>{{ $article->title }}</h1>
    <h3>Author: {{ $article->author }}</h3>
    <p>{!! nl2br(e($article->content)) !!}</p>
</div>
    
</form>

@endsection