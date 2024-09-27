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
        
        <p>Time to test your updated version. Again, you are checking to see if it makes sense. Does it play well? Is it better than last time? Can it be improved?</p>
        
        <iframe src="/{{$url['slug']}}/game" scrolling="no" class="example-game"></iframe>

        <p>So, what worked better and worse compared to your first version? Your final version should take the best elements of what you’ve learnt from the first two versions, so your game is the best it can be. Let’s make the final changes!</p>
        
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 16);
            oBadges.redirectIfPreviousStepNotCompleted(15, '{{$links['last']}}');
            oBadges.prevUrl = "{{$links['last']}}";
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-16.js', 'min' => false))</script>

@endsection