@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition">
                    
         <header class="lockup">
            <a target="_blank" href="http://www.idea.org.uk"><img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="idea-logo" alt="iDEA Inspiring Digital Enterprise Awards" /></a>
        </header>
       
        <div class="big-intro-banner payoff-banner">
            <div class="row intro-page-banner">
                <div class="badge-holder"></div>
                <h1 class="intro-heading"  data-sr="wait 1s, enter top, move 50px"><span data-sr="wait 1.5s, opacity 0, scale up 20%">Well Done!</span></h1>
                <p class="payoff-sentence lead">Looks like you might have a future in digital imagery!</p>
                <p class="cta centre-cta"><a href="{{$links['submit']}}" class="btn btn-primary animsition-link jsBtnSubmit" id="review">Claim your points and go back to iDEA</a></p>
            
            </div>

            </div>
        

        
        
        </div><!--/holder-->
        
        @include('vendor.digitalmarmalade.badges._global.partials.javascript');
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 6);
            oBadges.redirectIfPreviousStepNotCompleted(5, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/success.js', 'min' => false))</script>

@endsection