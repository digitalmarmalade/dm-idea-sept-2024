@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    <style>
    .answer-removed { opacity:0.2; pointer-events:none; }
    .question-radio:checked+label { background: inherit; }
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
        
        <h2 class="page-title">A brief history of gaming</h2>
        
        <p class="lead">Games are everywhere!</p>

        <p class="lead">They started with early coin operated machines developed in the 80s, they then moved onto computers and consoles, and now they are available online, on your phone, and even in virtual reality. </p>
        
        <p class="lead">They have been with us for a long time, but they always change and grow to keep giving people what they want. </p>

        
        <p class="lead">So let's play a little game – can guess the decade these games were released?</p>
        
        <div class="quiz">
        
            <?php 
            $i=1;
            
            $gameName = array(
            1 => 'Football Manager on ZX Spectrum', 
            'Tomb Raider on Playstation', 
            'Angry Birds on iPhone', 
            'Pokemon Go', 
            'Space Invaders on coin operated machine',
            'Doom on PC',
            'Snake on Nokia',
            'Candy Crush on mobile',
            'Space Invaders on Atari VCS',
            'Wii Sports on Wii',
            'Sonic on Sega Megadrive',
            'Grand Theft Auto III on Xbox',
            'Super Mario Bros on Nintendo',
            'Slither');
            
            
            
            
            while($i<=14) {
            ?>
            
            <div class="question<?php if($i === 1) { ?> active<?php } ?>" id="question<?php echo $i; ?>">
                <h3><?php echo $gameName[$i]; ?></h3>
                
                <img src="/badge-assets/{{$url['slug']}}/_global/img/game-image-<?php echo $i; ?>.jpg" alt="<?php echo $gameName[$i]; ?>" />
                
                <ul class="question-options reset-list clearfix">
                    <li><input type="radio" class="question-radio" name="q<?php echo $i; ?>" id="q<?php echo $i; ?>a" /> <label for="q<?php echo $i; ?>a">A. 1970s</label></li>
                    <li><input type="radio" class="question-radio" name="q<?php echo $i; ?>" id="q<?php echo $i; ?>b" /> <label for="q<?php echo $i; ?>b">B. 1980s</label></li>
                    <li><input type="radio" class="question-radio" name="q<?php echo $i; ?>" id="q<?php echo $i; ?>c" /> <label for="q<?php echo $i; ?>c">C. 1990s</label></li>
                    <li><input type="radio" class="question-radio" name="q<?php echo $i; ?>" id="q<?php echo $i; ?>d" /> <label for="q<?php echo $i; ?>d">D. 2000s</label></li>
                    <li><input type="radio" class="question-radio" name="q<?php echo $i; ?>" id="q<?php echo $i; ?>e" /> <label for="q<?php echo $i; ?>e">E. 2010s</label></li>
                </ul>
            </div>

            
            <?php
            $i++;
            }
            ?>
            
            <div class="question" id="question15">
                
                <p class="correct-answers visuallyhidden"><span id="correctAnswerTotal"></span>/14</p>
                
            </div>
            
            <ul class="quiz-right-wrong reset-list clearfix">
            
            <?php
            $j = 1;
            while($j<=14) {
            ?>
            
                <li id="rightWrong<?php echo $j; ?>"></li>
            
            <?php
            $j++;
            }
            ?>
            
            </ul>
            

            
        </div>
        
        <!--/task-->
        
        <div class="lets-move-on" id="moveon">

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        <span class="visuallyhidden"><span id="correctAnswerTotal2"></span>/14. <span id="completeMessage"></span><br /></span>
        Well done! 
        <br />
        Like most things, we can only improve if we take time to look at what’s been done before and use this to inspire us to develop new ideas for new audiences.
        </p>

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">On to the next task</a></p>
        
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 1);
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-1.js', 'min' => false))</script>

@endsection