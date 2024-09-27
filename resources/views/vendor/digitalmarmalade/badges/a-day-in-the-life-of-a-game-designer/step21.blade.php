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

        <p>What about how you have built your levels? Now is your final chance to decide on the gameplay, building on what you have learnt from the first two versions.</p>
        
        <form>
      
       <?php

        $numbers[1] = 'One';
        $numbers[2] = 'Two';
        $numbers[3] = 'Three';

        for($level = 0; $level < 3; $level++) {
            $levelDisplayNumber = $level + 1;
            $levelDisplayName = $numbers[$levelDisplayNumber];
            ?>

            <h3 class="feature-heading">Level {{$levelDisplayNumber}}</h3>

            <label for="numanswers{{$level}}" class="feature-label">How many questions?</label>
            <input type="range" id="numanswers{{$level}}" min="1" value="5" max="20" step="1" data-json-item="levels {{$level}} answersInLevel">
            <div class="range-indicators cf clearfix">
            <?php for($label = 1; $label <= 19; $label = $label + 1) { echo '<div class="range-indicator" style="width:'.(100/19).'%"></div>'; } ?>
            </div>
            <div class="range-labels"><div class="range-label">1</div><div class="range-label">20</div></div>

            <label for="accuracy{{$level}}" class="feature-label">Accuracy Level %</label>
            <input type="range" id="accuracy{{$level}}" min="0" value="50" max="100" step="10" data-json-item="levels {{$level}} correctAnswerPercentage">
            <div class="range-indicators cf clearfix">
            <?php for($label = 1; $label <= 10; $label = $label + 1) { echo '<div class="range-indicator" style="width:'.(100/10).'%"></div>'; } ?>
            </div>
            <div class="range-labels"><div class="range-label">0</div><div class="range-label">100</div></div>

            <?php
            for($category = 0; $category < 3; $category++) {
            $categoryId = $category + 1;
            ?>
            <p>
                <span class="onoffswitch">
                    <input type="checkbox" name="level{{$level}}usecat{{$categoryId}}" class="onoffswitch-checkbox jsLevelCatSelector" id="level{{$level}}usecat{{$categoryId}}" value="1">
                    <label class="onoffswitch-label" for="level{{$level}}usecat{{$categoryId}}">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </span>
               Include category '<span class="jsCategoryName{{$categoryId}}">#{{$categoryId}}</span>'
            </p>
            <?php
            }
            ?>
            <input type="hidden" id="level-{{$level}}-cats" value="" data-json-item="levels {{$level}} categories"/>
        <?php
        }
        ?>
        
        <ul class="advice-list">   
            <li class="negative" data-type="questions-toomanyinonecat">
                You have too many questions in one level!
            </li>
            <li class="negative" data-type="questions-toomanyoverall">
                There are too many questions overall
            </li> 
        </ul>
        
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 21);
            oBadges.redirectIfPreviousStepNotCompleted(20, '{{$links['last']}}');
            oBadges.prevUrl = "{{$links['last']}}";
            oBadges.categories = {!! $data['categories'] !!};
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-21.js', 'min' => false))</script>

@endsection