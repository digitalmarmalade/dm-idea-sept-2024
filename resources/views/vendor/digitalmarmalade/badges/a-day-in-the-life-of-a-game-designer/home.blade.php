@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition">
        
            <div class="big-intro-banner">
            <div class="row intro-page-banner">
                
                <div class="fruit-mask" id="scene">
                
                    <div class="title"><span class="visuallyhidden">A day in the life of a Game Designer</span></div>
                    <div class="orange layer" data-depth="0.4"></div>
                    <div class="pineapple layer" data-depth="0.4"></div>
                    <div class="strawberry layer" data-depth="0.4"></div>
                    <div class="bananas layer" data-depth="0.6"></div>
                    <div class="kiwi layer" data-depth="0.6"></div>
                    <div class="pear layer" data-depth="0.8"></div>                
                    <div class="grapes layer" data-depth="0.8"></div>
                    <div class="apple layer" data-depth="0.8"></div>
                    
                </div>
                <div class="ground"></div>
                <div class="hero-move" id="hero">
                    <div class="hero-sprite"></div>
                </div>
                
                
                
                
                
                <a href="#content" class="down-arrow"></a>

            
            </div>
            
            </div>
            
            <div class="row with-footer" id="content">
            
                <div class="sm-col-3-4 md-col-2-3 lg-col-1-2 centre-col">
                
                
                <div class="column-content">
                <p class="lead">As a game designer, you are creative and intelligent, and able to turn your passion into a real and exciting career. Unlike many jobs, every day will be different as you work on ever changing projects with challenges that require a lot of creative thinking. You’ll get to try out new ideas to produce games with the right level of challenge, engagement, and motivation to make them a success!</p>
                
                <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">Start</a></p>
                
                </div>
                </div>
            
            
            </div>
            
            <header class="lockup">
                <a target="_blank" href="http://www.idea.org.uk">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="idea-logo" alt="iDEA Inspiring Digital Enterprise Awards" />
                </a>
            </header>
        
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
        var lastPosition;
        var tid = setInterval(moveMan, 2000);
        function moveMan() {
            if(Math.floor((Math.random() * 3) + 1) > 1) {
                thisPosition =  (Math.random() * 900);
                $('#hero').css('left', thisPosition + 'px');
                
                if(thisPosition > lastPosition) {
                    $('.hero-sprite').addClass('flip');    
                } else {
                    $('.hero-sprite').removeClass('flip');
                }
                lastPosition = thisPosition;

            }
        }
        
        
        
      
        </script>
        
        <script>
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
        </script>

@endsection