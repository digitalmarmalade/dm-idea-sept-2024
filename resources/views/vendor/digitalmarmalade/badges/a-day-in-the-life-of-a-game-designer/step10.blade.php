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
        
        <h2 class="page-title">Test Your Game</h2>
        
        <p>Time to test your creation from beginning to end - remember, you are checking to see if it makes sense. Does it play well? Is it something you would play? Can it be improved? Would it be something your friends would enjoy playing?</p>
        
        <iframe src="/{{$url['slug']}}/game" scrolling="no" class="example-game"></iframe>

        <p>Great Work! You've built the first version of the game.</p>
        <p>Let’s review what you did, and see if we can iterate and improve on it. </p>
        
        <!--/task-->
        
        <div class="lets-move-on visible" id="moveon">

        <p class="cta centre-cta">
            <a href="{{$links['next']}}" class="btn btn-primary animsition-link">Make Changes</a>
        </p>
        
        </div> <!--/lets-move-on-->
        
        
        </div>
        </div>
        </div><!--/holder-->
        
        <form action="{{$links['publish']}}" method="post" class="hide">
            {!! csrf_field() !!}
            <textarea name="json" id="json"></textarea>
        </form>
        
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 10);
            oBadges.redirectIfPreviousStepNotCompleted(9, '{{$links['last']}}');
            oBadges.prevUrl = "{{$links['last']}}";
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-10.js', 'min' => false))</script>

@endsection