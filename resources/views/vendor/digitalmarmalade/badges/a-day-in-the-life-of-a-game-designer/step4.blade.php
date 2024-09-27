@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition">

       @include('vendor.digitalmarmalade.badges.a-day-in-the-life-of-a-game-designer.header', ['title' => 'Header'])

        <div class="row with-footer">
        <div class="question-column">        
        
        <div class="progress-holder">
        
        <div class="progress-bar">
        <div class="progress-bar-fill" style="width: {{$progress['percentage']}}%;"></div>
        </div>
        
        </div>
        
        <h2 class="page-title">PLANNING THE GAME</h2>
        
        <p>So, now let's look at creating your own version of Total Swipeout.</p>
        <p>There are loads of ways of designing this game, and your task is to make the gameplay the best it can possibly be.</p>
        <p>We will take you through the process, reviewing and deciding on the following elements:</p>
        <ul>
            <li>Appearance</li>
            <li>Content</li>
            <li>Scoring </li>
            <li>Pressure</li>
            <li>Playability</li>
            <li>Levels</li>
        </ul>
        <p>We want you to try different settings so you understand how they affect the gameplay,
        and help make your final game as engaging and attractive as possible!</p>        
        
        <!--/task-->
        
        <div class="lets-move-on visible" id="moveon">

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link jsBtnNext">Continue</a></p>
        
        </div> <!--/lets-move-on-->
        
        
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
        <script src="/badge-assets/{{$url['slug']}}/_global/js/classie.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/selectFx.js"></script>
        <script>
            oBadges.localStorageName = '{{$localStorageKey}}';
            oBadges.setSlugAndStep('{{$url['slug']}}', 4);
            oBadges.redirectIfPreviousStepNotCompleted(3, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-4.js', 'min' => false))</script>

@endsection