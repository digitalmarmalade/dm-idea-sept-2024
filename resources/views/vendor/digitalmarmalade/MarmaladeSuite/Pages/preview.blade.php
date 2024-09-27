<!doctype html>
<html class="no-js">
	<head>
    
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>MSUITE3.0 Core - Pagebuilder Preview</title>
    <title><!-- strlen($seo->getTitle()) ? $seo->getTitle() : 'Swim Wales' --></title>
    <!--<meta name="description" content=" $seo->getDescription() ">
	<meta name="keywords" content=" $seo->getKeywords() ">-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('vendor/digitalmarmalade/DefaultPreview/css/main-default-preview.css') }}">        
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="_global/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
    <script src="{{ URL::asset('vendor/SwimWales/_global/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('vendor/SwimWales/_global/js/main.js') }}"></script>
    
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('vendor/SwimWales/_global/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('vendor/SwimWales/_global/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('vendor/SwimWales/_global/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('vendor/SwimWales/_global/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('vendor/SwimWales/_global/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('vendor/SwimWales/_global/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('vendor/SwimWales/_global/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('vendor/SwimWales/_global/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('vendor/SwimWales/_global/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('vendor/SwimWales/_global/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('vendor/SwimWales/_global/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('vendor/SwimWales/_global/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('vendor/SwimWales/_global/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('vendor/SwimWales/_global/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ URL::asset('vendor/SwimWales/_global/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    
    @section('head')    
    @show
		
</head>		
<body>

<div id="wrap">
<div id="holder">
<article>    
       
    <div class="row custom-header no-image">
        <div class="col lg-col-1-1">
            <div class="column-content">                    
                <h1>{{ $page->getName() }}</h1>                                        
            </div>
        </div>
    </div>

    {!! $page->render() !!}	

</article>	
</div><!--#holder end-->        
</div><!--#wrap end"-->



<!--include('vendor.digitalmarmalade.MarmaladeSuite.Debug.debug')-->

</body>
</html>
