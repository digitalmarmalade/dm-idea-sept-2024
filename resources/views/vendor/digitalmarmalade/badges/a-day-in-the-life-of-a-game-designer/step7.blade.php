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

        <p>Gameplay is the specific way in which players interact with your game, and there are lots of things to consider when designing it. </p>
        <p>In this game we are going to need to decide on the number of points awarded per answer, whether the answer time affects how many points are awarded, how the game will play, and how the levels will work. </p>
        <p>Let's start with the points per answer.</p>
        
        <form>
        
        
        <h3 class="feature-heading">Scoring</h3>
        <p>This is completely up to you – do you want to award lots of points for correct answers, or do you want to make each point mean something? There are pros and cons to both ways. As a general rule of thumb, if you are planning a relatively easy game then award high points (e.g. 100), and if it is going to be hard then lower the points (e.g. 10) though it really is up to you!</p>
        
        <p>
        <label for="points">How many points is a correct answer worth?</label>
        <input type="text" name="points" id="points" data-json-item="settings pointsPerCorrectAnswer" class="standard-form-control" maxlength="4" />
        </p>
        
        
        <h3 class="feature-heading">Pressure</h3>
        <p>Do you want to add a time pressure element into the game? This forces the player to be mentally alert, and will penalise slow readers. Think about what kind of game experience you are seeking – one where people can take their time, think it through and then come up with their answer, or one that is fast, frantic and relentless?</p>

        <p>Should the number of points awarded depend on how long it takes to answer?</p>

        
        <p>
        <span class="onoffswitch">
            <input type="checkbox" name="timer" class="onoffswitch-checkbox" id="timer" data-json-item="settings hasTimer" value="1">
            <label class="onoffswitch-label" for="timer">
                <span class="onoffswitch-inner"></span>
                <span class="onoffswitch-switch"></span>
            </label>
        </span>
           Switching this on means more points for quicker answers.
        </p>
        
        
        <!--/task-->
        <div class="lets-move-on visible" id="moveon">
{{--
        <p class="correct-message">
        
        <span class="tick-holder">
        <svg version="1.1" id="svgTick2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Well done! Time to test it all out.        
        </p>
--}}
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 7);
            oBadges.redirectIfPreviousStepNotCompleted(6, '{{$links['last']}}');
            oBadges.prevUrl = "{{$links['last']}}";
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-7.js', 'min' => false))</script>

@endsection