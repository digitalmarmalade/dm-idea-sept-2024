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
             <a target="_blank" href="http://www.idea.org.uk"><img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg"  class="idea-logo" alt="iDEA Inspiring Digital Enterprise Awards" /></a>
        </header>
       
        <div class="big-intro-banner payoff-banner">
            <div class="row intro-page-banner">
                <div class="badge-holder"></div>
                <h1 class="intro-heading"  data-sr="wait 1s, enter top, move 50px"><span data-sr="wait 1.5s, opacity 0, scale up 20%">Well Done!</span></h1>
                <p class="payoff-sentence lead">Looks like you might have a future as a web designer!</p>
                <p class="cta centre-cta"><a href="{{$links['submit']}}" class="btn btn-primary animsition-link" id="review">Claim your points and go back to iDEA</a></p>
                
                
                <div class="intro-top-left" data-sr="wait .2s, enter left, move 50px"></div>
                <div class="intro-top-right" data-sr="wait .5s, enter right, move 50px"></div>
                <div class="coffee-cup" id="coffee" data-sr="wait .2s, enter left, move 50px"></div>
                <div class="pencil" data-sr="wait .5s, enter right, move 50px"></div>

            
            </div>

            </div>
        

        
        
        </div><!--/holder-->


        
        
        <div class="small-screen">
            <div class="small-screen-message">
                <h2>Sorry</h2>
                <p>Your screen is too small to complete these tasks.</p>
                <p>Please try again when you have access to a larger screen.</p>
            </div>
        </div>
        
        @include('vendor.digitalmarmalade.badges._global.partials.javascript');
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 8);
            oBadges.redirectIfPreviousStepNotCompleted(7, '{{$links['last']}}');
        </script>

@endsection