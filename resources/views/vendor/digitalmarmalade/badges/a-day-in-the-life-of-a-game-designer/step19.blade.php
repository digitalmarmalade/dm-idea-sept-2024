@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
<style>
.feature-label { font-size: 1.6em; }
.range-indicators { width:100%; height:4px; padding:0 15px; margin-top:-5px; margin-bottom:5px; }
.range-indicator { height:4px; display:inline-block; border-right:1px solid #333;  }
.range-indicators .range-indicator:first-child { border-left:1px solid #333; }

.range-labels { width:100%; height:16px; margin-bottom:15px; }
.range-label { height:16px; display:inline-block; width:30px; text-align:center; float:right;  }
.range-labels .range-label:first-child { float:left; }

</style>
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
        
        <h2 class="page-title">Create Your Game - <br>
        The Gameplay</h2>

        <p>This is the last chance to adjust elements that affect gameplay in your version of Total Swipeout. From the first two versions you should have a good idea what worked well and what didn't.</p>
        
        <form>
        
        <p>
        <label for="points">How many points is a correct answer worth?</label>
        <input type="text" name="points" id="points" data-json-item="settings pointsPerCorrectAnswer" class="standard-form-control" maxlength="4" />
        </p>
        
        <ul class="advice-list">   
            <li class="show">
                Is lots of points a good thing?
            </li>              
        </ul>

        
        
        <p>
        <span class="onoffswitch">
            <input type="checkbox" name="timer" class="onoffswitch-checkbox" id="timer" data-json-item="settings hasTimer" value="1">
            <label class="onoffswitch-label" for="timer">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        </span>
           Should the number of points awarded depend on how long it takes to answer?
        </p>
        
        <ul class="advice-list">   
            <li class="positive" data-type="timer-active">
                Well done using the time – this means even if someone knows all the answers, they will need to work hard to retain top spot.
            </li>
            <li class="negative" data-type="timer-inactive">
                Why not try using time to award points? Imagine everyone gets the right answers, how would we tell who was best and who should get the highest points?
            </li>                
        </ul>
        
        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary jsBtnNext animsition-link">Continue</a></p>
        
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

        @include('vendor.digitalmarmalade.badges._global.partials.javascript')
        <script>
            oBadges.localStorageName = '{{$localStorageKey}}';
            oBadges.setSlugAndStep('{{$url['slug']}}', 19);
            oBadges.redirectIfPreviousStepNotCompleted(18, '{{$links['last']}}');
            oBadges.prevUrl = "{{$links['last']}}";
            oBadges.categories = {!! $data['categories'] !!};
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-19.js', 'min' => false))</script>

@endsection