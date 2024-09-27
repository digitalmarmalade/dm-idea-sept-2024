<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Game Directory</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/the-directory/_global/css/main.css">

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder">
        
        <div class="row">
        	
            <h1>The Game Directory</h1>
            
            <ul class="game-selector reset-list jsGamesListSelector">
                <li class="active" data-targetid="plays"><a href="#">Most Popular First</a></li>
                <li data-targetid="time"><a href="#">Newest First</a></li>
            </ul>

        </div>
        
        <div class="games-list jsGamesList" data-id="plays">
            @foreach ($games['plays-d'] as $game)
            <div class="game-link jsGamesListItem" style="background:<?php echo isset($game['bg']) ? $game['bg'] : '#900';?>;color:<?php echo isset($game['fg']) ? $game['fg'] : '#fff';?>">
                <a class="overlay-trigger" href="#gamePreview">
                <h2>{{$game['title']}}</h2>
                <p class="game-plays">{{$game['plays']}}<span> play<?php if($game['plays'] != 1) { echo 's'; } ?></span></p>
                <div class="game-text">
                    <p>{{$game['summary']}}</p>
                </div>
                <p class="game-url">{{ action('aDayInTheLifeOfAGameDesignerController@showGame', [$game['url']]) }}</p>
                </a>
            </div>
            @endforeach
        </div>

        <div class="games-list jsGamesList hide" data-id="time">
            @foreach ($games['time-d'] as $game)
            <div class="game-link jsGamesListItem" style="background:<?php echo isset($game['bg']) ? $game['bg'] : '#900';?>;color:<?php echo isset($game['fg']) ? $game['fg'] : '#fff';?>">
                <a class="overlay-trigger" href="#gamePreview">
                <h2>{{$game['title']}}</h2>
                <p class="game-plays">{{$game['plays']}}<span> play<?php if($game['plays'] != 1) { echo 's'; } ?></span></p>
                <div class="game-text">
                    <p>{{$game['summary']}}</p>
                </div>
                <p class="game-url">http://local.dmpuzzles.co.uk/b/{{$game['url']}}</p>
                </a>
            </div>
            @endforeach
        </div>
        
        <nav class="pagination pagination--large jsPaginationHolder"></nav>
        
        
        
        </div><!--/holder-->
        
        <div id="overlayBg" class="overlay-bg"></div>
        <div class="overlay" id="gamePreview">
        
            <p class="overlay-close"><span class="flaticon-cancel22"></span></p>
        
        
            <h2 id="gameHeading"></h2>
            <div id="gameText"></div>
            <div id="gameURL" class="overlay-game-url"></div>

        </div>
        
        @include('vendor.digitalmarmalade.badges._global.partials.javascript');
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/dir.js', 'min' => false))</script>


    </body>
</html>