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

        <p>Now let's have a look at a crucial element to building a game - playability.</p>
        
        <form>
              
        <h3 class="feature-heading">Playability (UX)</h3>
        <p>Playability – otherwise known as UX (User Experience) - is critical to the success of any digital product. </p>
        <p>It is important that the UX feels natural and obvious. You shouldn't even need to think about it – so it is important to get this aspect right. </p>
        <p>You will need to decide what happens when a player swipes in a specific direction.</p>
        <p>Get this wrong and no matter how pretty it looks, and how good the questions are, the game will fade away and die. </p>

        
        <h3 class="feature-heading">Actions</h3>
        
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 8);
            oBadges.redirectIfPreviousStepNotCompleted(7, '{{$links['last']}}');
            oBadges.prevUrl = "{{$links['last']}}";
            oBadges.categories = {!! $data['categories'] !!};
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-8.js', 'min' => false))</script>

@endsection