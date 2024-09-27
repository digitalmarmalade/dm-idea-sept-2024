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
        
        <h2 class="page-title">GAME DEMO</h2>

        <p>
            In this badge, we are going to develop a swipe based game called Total Swipeout. 
        </p>
        
        <p>
            Try playing the demo version below, so you gain some understanding of the game before you build your own version.
        </p>
        
        {{--
        <p>Together we are going to design a swipe based game – for this example we don't need to work out the gameplay – we just need to understand the idea.</p>
        <p>Before we start, let's look at what we mean by a swipe based game.</p>
        --}}


        <iframe src="/badge-assets/{{$url['slug']}}/demo" scrolling="no" class="example-game"></iframe>

        {{--        
        <p>So we are looking, in this badge, for you to create your own version of Total Swipeout – you will need to construct a game which is engaging and attractive to the player.</p> 
        <p>We will take you through the process – you will need to decide on colour schemes, the number of levels, the number of questions, points and the best categories to make the gameplay the best it can possibly be.</p>

        <p>From there we will build into branding your game, producing different difficulty levels and promoting the game to your friends.</p>
        <p>Take a look at various games that have already been created using this badge to get a feel of what is possible, and the competition you will need to beat.</p>
        <iframe src="/{{$url['slug']}}/dir" scrolling="no" class="example-game"></iframe>
        --}}
        
        
        <!--/task-->
        
        <div class="lets-move-on visible" id="moveon">

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">Right, let's make a game</a></p>
        
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
        <script>
            oBadges.localStorageName = '{{$localStorageKey}}';
            oBadges.setSlugAndStep('{{$url['slug']}}', 3);
            oBadges.redirectIfPreviousStepNotCompleted(2, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-3.js', 'min' => false))</script>

@endsection