@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body class="landing-page">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="banner" class="research-banner">
        
        
        
        <img src="/badge-assets/{{$url['slug']}}/_global/img/banner-bg.png" alt="" class="research-banner-image" />
        
        <div class="banner-text">
        
        <h1 class="intro-heading"  data-sr="wait 1s, enter top, move 50px">A Day in the Life of a <span data-sr="wait 1.5s, opacity 0, scale up 20%">Digital Researcher</span></h1>
        
        <p class="intro-text" data-sr="wait 2s, opacity 0, scale up 20%">As a researcher you need to be able to find and organise relevant information quickly so you can pass this on to others. What you are asked to find out about can be completely different each and every day. You could be finding out information as a journalist or as part of a business intelligence team, or you could simply use these skills as part of working in marketing or being an entrepreneur. If you are interested in developing the digital searching skills linked to this role try doing the Digital Researching badge!</p>
        
        <p class="cta centre-cta" data-sr="wait 2s, opacity 0, scale up 20%"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">Start</a></p>
        
        </div>
                
                

                
               <!-- <a href="#content" class="down-arrow"></a>-->
        
        </div>

        <header class="lockup">
            <a href="http://www.idea.org.uk"><img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="idea-logo" alt="iDEA Inspiring Digital Enterprise Awards" /></a>
        </header>

        @include('vendor.digitalmarmalade.badges._global.partials.javascript');
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 0);
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/home.js', 'min' => false))</script>

@endsection