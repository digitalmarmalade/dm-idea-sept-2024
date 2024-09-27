@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
<style>
.holder { background: #17a7ef; }
.badge-holder { border-radius: 15px; }
</style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition">
     
         <header class="lockup">
            <a target="_blank" href="http://www.idea.org.uk">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="idea-logo" alt="iDEA Inspiring Digital Enterprise Awards" />
            </a>
        </header>
        
        <div class="big-intro-banner payoff-banner">
            <div class="row intro-page-banner">
                <div class="badge-holder"></div>
                <h1 class="intro-heading"  data-sr="wait 1s, enter top, move 50px"><span data-sr="wait 1.5s, opacity 0, scale up 20%">Well Done!</span></h1>
                <p class="payoff-sentence lead">Looks like you might have a future as a game designer!

                <p>In this badge you have learnt: </p>
                <p>- how games are often simple and can gain inspiration from previously successful games</p>
                <p>- what things you need to consider when designing a game</p>
                <p>- what factors you need to consider within a game’s gameplay<br/><br/></p>

                <p class="cta centre-cta"><a href="{{$links['submit']}}" class="btn btn-primary animsition-link" id="review">Claim your points and go back to iDEA</a></p>
                                
                <div class="intro-top-left" data-sr="wait .2s, enter left, move 50px"></div>
                <div class="intro-top-right" data-sr="wait .5s, enter right, move 50px"></div>
                <div class="coffee-cup" id="coffee" data-sr="wait .2s, enter left, move 50px"></div>
                <div class="pencil" data-sr="wait .5s, enter right, move 50px"></div>

            
            </div>

            </div>
        


        @include('vendor.digitalmarmalade.badges._global.partials.javascript');
        <script>
            oBadges.localStorageName = '{{$localStorageKey}}';
            oBadges.setSlugAndStep('{{$url['slug']}}', 23);
            oBadges.redirectIfPreviousStepNotCompleted(22, '{{$links['last']}}');
            oBadges.prevUrl = "{{$links['last']}}";
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/success.js', 'min' => false))</script>

@endsection