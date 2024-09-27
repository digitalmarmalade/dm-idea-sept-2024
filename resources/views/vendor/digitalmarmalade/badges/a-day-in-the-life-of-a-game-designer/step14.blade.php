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
        
        <h3 class="feature-heading">Playability (UX)</h3>

        <p>It is critical that a game is intuitive to play and holds your audience's attention. </p>

        <div class="game-genre-container game-genre-container--no-side-margin">
            <div class="screenshot-container">
                <figure>                 
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/screenshot-flight-simulator.jpg" alt="Flight Simulator" />
                   <figcaption>Game with bad UX – Flight simulators</figcaption>
                </figure> 
            
                <figure>                   
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/screenshot-angry-birds.jpg" alt="Angry Birds" />
                     <figcaption>Game with good UX – Angry Birds</figcaption>
                </figure> 
            </div>
        </div>

        <p>It has to be logical, natural, instinctive and playable.</p>

        
        <?php
        $items = ['left', 'right', 'up', 'down'];

        foreach($items as $item) {
        $Item = ucfirst($item);
        ?>
        <fieldset class="action">
            <legend>Swipe {{$Item}}</legend>
            <ul class="reset-list">
                <li><input type="radio" class="question-radio" name="swipe{{$Item}}" id="swipe{{$Item}}1" data-json-item="actions swipes {{$item}}" value="correct"/> <label for="swipe{{$Item}}1">True</label></li>
                <li><input type="radio" class="question-radio" name="swipe{{$Item}}" id="swipe{{$Item}}2" data-json-item="actions swipes {{$item}}" value="incorrect"/> <label for="swipe{{$Item}}2">False</label></li>
                <li><input type="radio" class="question-radio" name="swipe{{$Item}}" id="swipe{{$Item}}3" data-json-item="actions swipes {{$item}}" value="pass"/> <label for="swipe{{$Item}}3">Pass</label></li>
                <li><input type="radio" class="question-radio" name="swipe{{$Item}}" id="swipe{{$Item}}4" data-json-item="actions swipes {{$item}}" value=""/> <label for="swipe{{$Item}}4">No Action</label></li>
            </ul>
        </fieldset>
        
        <?php
        }

        ?>
        
        <!--/task-->
        <div class="lets-move-on" id="moveon">
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 14);
            oBadges.redirectIfPreviousStepNotCompleted(13, '{{$links['last']}}');
            oBadges.prevUrl = "{{$links['last']}}";
            oBadges.categories = {!! $data['categories'] !!};
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-14.js', 'min' => false))</script>

@endsection