<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="en" />
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <title>Loading...</title>
        <meta name="description" content="">
        <meta content="True" name="HandheldFriendly">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/the-game/css/main.css">

    </head>
    <body class="branding-main-bg">

	    <div class="loading-screen jsLoadingScreen branding-main-bg">
            
            <div class="spinner">
              <div class="double-bounce1"></div>
              <div class="double-bounce2"></div>
            </div>
            
        </div>
        
        <div class="intro-screen jsIntroScreen branding-main-bg">
            <div class="intro-flex">
                <div class="intro-page">
                <h1 id="gameTitle" class="game-title jsGameTitle branding-main-fg"></h1>
                <h2 id="gameSummary" class="game-summary jsGameSummary branding-main-fg"></h2>
                <p class="start-the-game"><button class="jsStartGame btn btn-primary branding-accent-bg branding-accent-fg">Play</button></p>
                
                </div>
            </div>
            
            <p class="hold-the-help"><button class="jsHowToPlay btn btn-help">?</button></p>
        
        </div>
        
        <div class="about-the-game-screen branding-main-bg">
        

            
                   
                    <div class="intro-flex">
                    <div class="intro-page">
                    
                    <h2 class="branding-main-fg">How to Play</h2>
                    <p class="game-instructions jsGameInstructions branding-main-fg"></p>
                    <p class="back-from-help"><button class="jsBackFromHelp btn btn-primary branding-accent-bg branding-accent-fg">Back</button></p>
                    
                    </div>
                    </div>
                    
                    
            

        
        </div>

	    <div class="level-intro jsLevelIntro branding-main-bg hide">
            <div class="intro-flex">
                <div class="intro-page">
                    <h1 class="game-title jsGameTitle branding-main-fg"></h1>
                    <h2 class="level-name jsLevelName branding-main-fg">Level One</h2>
                    <p class="level-details jsLevelDetails branding-main-fg"></p>
                    <button class="jsStartLevel btn btn-primary branding-accent-bg branding-accent-fg">Start Level</button>
                </div>
                </div>
        </div>

        <div class="home jsPageHome hide">
            <div class="the-intro">
                <h1>Select your<br>categories</h1>
                <ul class="jsCategoryHolder checkboxes">
                </ul>
                <button class="jsStartGame btn btn-primary branding-accent-bg branding-accent-fg hide">Play</button>
            </div>
        </div>

        <div class="background jsBackground hide">
            <ul class="timer-animation">
                <li class="circle circle1"><span></span></li>
                <li class="circle circle2"><span></span></li>
                <li class="circle circle3"><span></span></li>
                <li class="circle circle4"><span></span></li>
                <li class="circle circle5"><span></span></li>
                <li class="circle circle6"><span></span></li>
                <li class="circle circle7"><span></span></li>
                <li class="circle circle8"><span></span></li>
                <li class="circle circle9"><span></span></li>
                <li class="circle circle10"><span></span></li>
            </ul>
        </div>

        <div class="score-holder branding-accent-bg branding-accent-fg"><div class="jsScoreQuestion score-added"></div> <div class="score jsScoreHolder">0</div></div>

        <div class="the-game jsTheGame">
            <div class="question jsQuestionHolder"></div>
            <div class="equals-holder hide">=</div>

            <div class="the-meat">
                <div class="answer jsAnswerDrag branding-main-fg">
                    <p><span class="drag-the-answer jsAnswerHolder branding-accent-sbg  branding-accent-fg"></span></p>
                </div>

                <a href="#" class="answer-button jsAnswerButton hide correct branding-main-bg">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
                      <path d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"/>
                    </svg>
                </a>
                <a href="#" class="answer-button jsAnswerButton hide incorrect branding-main-bg">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.9 21.9" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 21.9 21.9">
                      <path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z"/>
                    </svg>
                </a>
                <a href="#" class="answer-button jsAnswerButton hide pass branding-main-bg">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 26 26">
                      <g>
                        <path d="m14,22h-2c-0.6,0-1,0.4-1,1v2c0,0.6 0.4,1 1,1h2c0.6,0 1-0.4 1-1v-2c0-0.6-0.4-1-1-1z"/>
                        <path d="M13,0C8,0,4,4,4,9c0,0.5,0,1,0.1,1.5c0.1,0.6,0.7,0.9,1.3,0.8l1.9-0.6c0.5-0.1,0.8-0.6,0.7-1.1C8,9.4,8,9.2,8,9   c0-2.8,2.2-5,5-5s5,2.2,5,5c0,1.7-1,2.5-2.8,4c-1.7,1.4-3.7,3-4.2,5.9c-0.1,0.6,0.4,1.1,1,1.1h2c0.5,0,0.9-0.3,1-0.8   c0.3-1.2,1.2-2,2.7-3.1C19.6,14.6,22,12.7,22,9C22,4,18,0,13,0z"/>
                      </g>
                    </svg>
                </a>

            </div>

        </div>

        <div class="total-score jsPageGameEnded branding-main-bg hide">

            <!--<p class="personal-best-score">Personal Best: <span class="jsScoreBest">0</span></p>-->
            <div class="scores">
                <h2 class="your-final-score-heading branding-main-fg">Your Score</h2>
                <p class="your-final-score jsScoreHolder branding-accent-bg branding-accent-fg">0</p>

                <p class="play-again"><a href="#" class="jsGoToGameStatistics btn btn-primary branding-accent-bg branding-accent-fg hide">Continue</a></p>
                <p class="play-again"><a href="#" class="jsNextLevel btn btn-primary branding-accent-bg branding-accent-fg">On To Next Level</a></p>
                <!--<p><a href="#" class="jsRestartLevel btn btn-secondary branding-accent-bg">Play Level Again?</a></p>-->
            </div>

            <!--<p class="jsPersonalBestAlert personal-best-alert branding-main-fg branding-accent-bg">New personal best!</p>-->
        </div>

	    <div class="game-statistics jsGameStatistics branding-main-bg hide">
            
            <div class="scores">
                <h2 class="your-final-score-heading branding-main-fg">Total Score</h2>
                <p class="your-final-score jsScoreHolder branding-accent-bg branding-accent-fg">0</p>
                <ul class="levels-overview jsLevelsOverview branding-main-fg"></ul>
                    <button class="jsRestartGame btn btn-primary branding-accent-bg branding-accent-fg">Play Again</button>
            </div>
                    
        </div>

        <script src="/badge-assets/{{$url['slug']}}/the-game/js/vendor/jquery-1.10.2.min.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/the-game/js/vendor/jquery.color.min.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/the-game/js/vendor/TweenMax.min.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/the-game/js/vendor/Draggable.min.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/the-game/js/app-core.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/the-game/js/app-functions.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/the-game/js/app-setup.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/the-game/js/app-handlers.js"></script>

        <script>
        @if(isset($gameJson))
            var data = {!!$gameJson!!};
            oApp.init(data);
        @else
            var data = oApp.getLS('{{$localStorageKey}}');
            oApp.init(data.data);
        @endif
        </script>


    </body>
</html>
