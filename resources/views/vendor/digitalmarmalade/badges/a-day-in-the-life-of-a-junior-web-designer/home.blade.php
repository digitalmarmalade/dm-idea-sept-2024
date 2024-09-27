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
                
                <h1 class="intro-heading"  data-sr="wait 1s, enter top, move 50px">A Day in the Life of a <span data-sr="wait 1.5s, opacity 0, scale up 20%">Junior Web Designer</span></h1>
                
                
                <div class="intro-top-left" data-sr="wait .2s, enter left, move 50px"></div>
                <div class="intro-top-right" data-sr="wait .5s, enter right, move 50px"></div>
                <div class="coffee-cup" id="coffee" data-sr="wait .2s, enter left, move 50px"></div>
                <div class="pencil" data-sr="wait .5s, enter right, move 50px"></div>
                
                <a href="#content" class="down-arrow"></a>

            
            </div>
            <div class="row intro-page-times">
                
                <div class="sm-col-1-2 lg-col-1-3 xl-col-1-4 intro-time intro-time--1"  data-sr="wait 1s, enter bottom, move 50px">
                    
                    <div class="overflow-container">
                    <div class="time-1-arm"></div>
                    </div>
                    
                    <div class="intro-clock intro-clock--1" data-sr="wait 1.5s, opacity 0, scale up 20%"></div>
                </div>
                
                <div class="sm-col-1-2 lg-col-1-3 xl-col-1-4 intro-time intro-time--2"  data-sr="wait 1.5s, enter bottom, move 50px">
                
                    <div class="overflow-container">
                    <div class="time-2-arm"></div>
                    </div>
                
                    <div class="intro-clock intro-clock--2" data-sr="wait 2s, opacity 0, scale up 20%"></div>
                </div>
                
                <div class="sm-col-1-2 lg-col-1-3 xl-col-1-4 intro-time intro-time--3"  data-sr="wait 2s, enter bottom, move 50px">
                
                    <div class="overflow-container">
                    <div class="time-3-arm"></div>
                    </div>
                
                    <div class="intro-clock intro-clock--3" data-sr="wait 2.5s, opacity 0, scale up 20%"></div>
                </div>
                
                <div class="sm-col-1-2 lg-col-1-3 xl-col-1-4 intro-time intro-time--4"  data-sr="wait 2.5s, enter bottom, move 50px">
                
                    <div class="overflow-container">
                    <div class="time-4-arm"></div>
                    </div>
                
                    <div class="intro-clock intro-clock--4" data-sr="wait 3s, opacity 0, scale up 20%"></div>
                </div>
            
            </div>
            </div>
            
            <div class="row with-footer" id="content">
            
                <div class="sm-col-3-4 md-col-2-3 lg-col-1-2 centre-col">
                
                
                <div class="column-content">
                <p class="lead">As a web designer, you are creative and intelligent, able to turn your passion into a real and exciting career. Unlike many jobs, every day will be different as you work on ever changing projects with challenges that require a lot of creative thinking. You'll get to try out new ideas and technologies, shaping brands and customer thinking in an industry that is growing and showing no sign of stopping!</p>
                
                <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">Start</a></p>
                
                </div>
                </div>
            
            
            </div>
            
            <header class="lockup">
                <a target="_blank" href="http://www.idea.org.uk">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg"  class="idea-logo" alt="iDEA Inspiring Digital Enterprise Awards" />
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
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/home.js', 'min' => false))</script>

@endsection