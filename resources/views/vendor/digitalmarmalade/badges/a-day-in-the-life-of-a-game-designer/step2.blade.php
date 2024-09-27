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
        
        <h2 class="page-title">What makes a good game?</h2>
        
        <p>So, what makes a game a good game? Is it a game that becomes a phenomenon? A must play game?</p>
        <p>Does a game need to have a very detailed design? </p>
        <p>Does a game need to be really complex?</p>
        <p>No, not necessarily. Often the best games are simple, taking a good idea from the past and re-imagining it for a modern audience.</p>
        
        <h3 class="feature-heading">Instructions:</h3>
        <p>Below are 6 hugely successful games – can you work out which game came from which?</p>
        <p>Drag what you think was the first game that then led to the next:</p>



<style>
.drag-image-holder-holder { margin-left:24px; }
.drag-hitarea-holder { width: 206px; height: 166px; }
.drag-image-holder { width: 200px; height: 160px; }
.drag-hitarea-holder-container { max-width: 475px; }
.drag-hitarea-arrow { margin-top: 45px; }
.correct-message a { color: #fff; }
</style>

<div class="drag-image-holder-holder clearfix">
    <div class="drag-hitarea-holder drag-hitarea-holder-src jsDragTargetSrc"><div class="drag-image-holder jsDragItem" data-name="snake" data-type="new"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-image-14.jpg" alt="" /></div></div>
    <div class="drag-hitarea-holder drag-hitarea-holder-src jsDragTargetSrc"><div class="drag-image-holder jsDragItem" data-name="mario" data-type="new"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-to2.jpg" alt="" /></div></div>
    <div class="drag-hitarea-holder drag-hitarea-holder-src jsDragTargetSrc"><div class="drag-image-holder jsDragItem" data-name="poke" data-type="old"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-from1.jpg" alt="" /></div></div>
    <div class="drag-hitarea-holder drag-hitarea-holder-src jsDragTargetSrc"><div class="drag-image-holder jsDragItem" data-name="mario" data-type="old"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-from2.jpg" alt="" /></div></div>
    <div class="drag-hitarea-holder drag-hitarea-holder-src jsDragTargetSrc"><div class="drag-image-holder jsDragItem" data-name="snake" data-type="old"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-image-7.jpg" alt="" /></div></div>
    <div class="drag-hitarea-holder drag-hitarea-holder-src jsDragTargetSrc"><div class="drag-image-holder jsDragItem" data-name="poke" data-type="new"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-image-4.jpg" alt="" /></div></div>
</div>

<div class="drag-hitarea-holder-holder clearfix">

    <div class="drag-hitarea-holder-row clearfix">
        <div class="drag-hitarea-holder-container">
            <div class="drag-hitarea-holder drag-hitarea-holder-dst drag-hitarea-holder-from jsDragTargetDst" data-type="old" data-row="1"></div>
            <div class="drag-hitarea-arrow"></div>
            <div class="drag-hitarea-holder drag-hitarea-holder-dst drag-hitarea-holder-to jsDragTargetDst" data-type="new" data-row="1"></div>
        </div>
        <div class="match-details hide jsDragTargetDetails" data-row="1">
            <p class="hide" data-name="snake">We take Snake from 1997 and make Slither in 2016</p>
            <p class="hide" data-name="poke">We take Pokémon cards from 1996 and make Pokémon Go in 2016.</p>
            <p class="hide" data-name="mario">We take Super Mario Bros, cross that with Helicopter Game and we get Flappy Bird.</p>
        </div>
    </div>

    <div class="drag-hitarea-holder-row clearfix">
        <div class="drag-hitarea-holder-container">
            <div class="drag-hitarea-holder drag-hitarea-holder-dst drag-hitarea-holder-from jsDragTargetDst" data-type="old" data-row="2"></div>
            <div class="drag-hitarea-arrow"></div>
            <div class="drag-hitarea-holder drag-hitarea-holder-dst drag-hitarea-holder-to jsDragTargetDst" data-type="new" data-row="2"></div>
        </div>
        <div class="match-details hide jsDragTargetDetails" data-row="2">
            <p class="hide" data-name="snake">We take Snake from 1997 and make Slither in 2016</p>
            <p class="hide" data-name="poke">We take Pokémon cards from 1996 and make Pokémon Go in 2016.</p>
            <p class="hide" data-name="mario">We take Super Mario Bros, cross that with Helicopter Game and we get Flappy Bird.</p>
        </div>
    </div>

    <div class="drag-hitarea-holder-row clearfix">
        <div class="drag-hitarea-holder-container">
            <div class="drag-hitarea-holder drag-hitarea-holder-dst drag-hitarea-holder-from jsDragTargetDst" data-type="old" data-row="3"></div>
            <div class="drag-hitarea-arrow"></div>
            <div class="drag-hitarea-holder drag-hitarea-holder-dst drag-hitarea-holder-to jsDragTargetDst" data-type="new" data-row="3"></div>
        </div>
        <div class="match-details hide jsDragTargetDetails" data-row="3">
            <p class="hide" data-name="snake">We take Snake from 1997 and make Slither in 2016</p>
            <p class="hide" data-name="poke">We take Pokémon cards from 1996 and make Pokémon Go in 2016.</p>
            <p class="hide" data-name="mario">We take Super Mario Bros, cross that with Helicopter Game and we get Flappy Bird.</p>
        </div>
    </div>

</div>

        <div class="info-panel first hide">
        
            <div class="info-block">
                <div class="info-from">
                    <div class="image-holder"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-image-7.jpg" alt="Snake" /></div>
                </div>
                <div class="info-to">
                    <div class="image-holder"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-image-14.jpg" alt="Slither" /></div>
                </div>
                
                <p>We take Snake from 1997 and make Slither in 2016.</p>
            </div>
        
        </div>
        
        <div class="info-panel hide">
        
            <div class="info-block">
                <div class="info-from">
                    <div class="image-holder"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-from1.jpg" alt="Pok&eacute;mon cards" /></div>
                </div>
                <div class="info-to">
                    <div class="image-holder"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-image-4.jpg" alt="Pok&eacute;mon Go" /></div>
                </div>
                
                <p>We take Pok&eacute;mon cards and make Pok&eacute;mon Go.</p>
            </div>
        
        </div>
        
        <div class="info-panel last hide">
        
            <div class="info-block">
                <div class="info-from">
                    <div class="image-holder"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-from2.jpg" alt="Snake" /></div>
                </div>
                <div class="info-to">
                    <div class="image-holder"><img src="/badge-assets/{{$url['slug']}}/_global/img/game-to2.jpg" alt="Slither" /></div>
                </div>
                
                <p>We take Super Mario Bros and cross that with Helicopter Game and we get Flappy Bird.</p>
            </div>
        
        </div>
        
        <div class="lets-move-on" id="moveon">
        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>

<span>WELL DONE!!</span><br/>


        It is really simple - you need a <a href="#" class="tooltip tooltip--bottom">
   <strong>good idea</strong>
    <span class="tooltip-text">
        <strong>Good Idea</strong><br />
        Using a phone to chase Pok&eacute;mons in the real world
    </span>
</a>, something that is <a href="#" class="tooltip tooltip--bottom">
   <strong>easy to understand</strong>
    <span class="tooltip-text">
        <strong>Easy to Understand</strong><br />
        Simplicity is the name of the game here. Is there anything more simple than hitting a screen to pass through a gap? Bingo! Flappy Bird.
    </span>
</a> with a hint of <a href="#" class="tooltip tooltip--bottom">
   <strong>addictiveness</strong>
    <span class="tooltip-text">
        <strong>Addictiveness</strong><br />
        It’s that feeling – go on, just one more try – a game that gives enough lives to make it playable, and levels that are oh so close to being completed, so you can’t resist having another go. Candy Crush anyone? 
    </span>
</a> and a slice of <a href="#" class="tooltip tooltip--bottom">
   <strong>promotion</strong>
    <span class="tooltip-text">
        <strong>Promotion</strong><br />
        Why has Slither grown so quickly? How did you find out it? Friends? TV? YouTube? Pewdiepie? Find the right person/place, get the ball rolling, sit back and watch the internet break!!
    </span>
</a>.
<br><br>
<b>HINT:</b> ROLL OVER WORDS FOR MORE DETAIL

</p>
        


        
        <!--/task-->
        


        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">Continue</a></p>
        
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 2);
            oBadges.redirectIfPreviousStepNotCompleted(1, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-2.js', 'min' => false))</script>
        
        <script>
			$('.tooltip').click(function() {
				return false;
			});
		</script>

@endsection