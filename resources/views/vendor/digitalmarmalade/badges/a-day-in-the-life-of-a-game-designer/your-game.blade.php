@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition payoff-page">
        
        @include('vendor.digitalmarmalade.badges.a-day-in-the-life-of-a-game-designer.header', ['title' => 'Header'])
       
        <div class="row complete-row">
        
        <p class="your-puzzle-name"><a href="{{action('aDayInTheLifeOfAGameDesignerController@showGame', [$game['url']])}}">Your game is live! You can view it here:<br>
        <span class="game-name">Game Name</span><br>{{action('aDayInTheLifeOfAGameDesignerController@showGame', [$game['url']])}}</a></p>
        
        <ul class="complete-actions reset-list clearfix">
        
            <li>
            <div class="plays">
            <span class="play-bar" id="playBar"></span>
            <span class="play-label">Plays</span>
            <span class="play-number" id="playNumber">{{$game['plays']}}</span>
            </div>
            </li>
            <li><a href="{{$links['dir']}}">View the Game Directory</a></li>
            <li><a href="{{$links['edit']}}"><span>Amend your game <span class="small">(this will reset your play count)</span></span></a></li>
            
        
        </ul>
        
        </div>
        
        <div class="row with-footer">
        <div class="question-column">
        
        <h3 class="feature-heading">The next step: Market your game</h3>
        
        <p>All that remains is for you to get 100 plays – which will come down to your marketing skills – skills you possibly don't even know you already have.</p>
        
        <p>So lets start by working out who you will target to play this puzzle – could it be friends, family, maybe special interest groups?</p>
        
        <p>Next up is how we reach those people. Firstly we need to let them know that the game is available. That's down to you – you can either message them directly to check out your creations, or post the link somewhere they might see – on your Social Networks or possibly even try to be more creative and use blogs or game listings. Think about how you would find it.</p>
        
        <p>To get you started, we’ve automatically added it to our portfolio of games that others have created.</p>
        
        <p>Don’t forget to keep coming back to check how many people have played your game – and know that once you hit the 100 mark you will have succeeded and made a game that will award your badge – however there are bonus points for the most played games, and if your game hits the 500 / 1,000 plays mark.</p>
        
        

        


        
        
        <!--/task-->
        
        <div class="lets-move-on visible" id="moveon">

        <p class="cta centre-cta"><a href="http://www.idea.org.uk" class="btn btn-primary animsition-link">Back to iDEA</a></p>
        
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
        <script>oBadges.localStorageName = '{{$localStorageKey}}';</script>
        <script>
            oBadges.localStorageName = '{{$localStorageKey}}';
            oBadges.prevUrl = "{{$links['last']}}";
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/your-game.js', 'min' => false))</script>

@endsection