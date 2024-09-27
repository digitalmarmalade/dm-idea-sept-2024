@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition">

        @include('vendor.digitalmarmalade.badges.a-day-in-the-life-of-a-digital-researcher.header', ['title' => 'Header'])
       
        <div class="row with-footer">
        <div class="question-column">
        
        <div class="progress-holder">
            <div class="progress-bar">
            <div class="progress-bar-fill" style="width: 80%;"></div>
            </div>
        </div>
        
        <h2 class="page-title">Further Information</h2>
        
        <h2>Technology</h2>
        
        <div class="comment comment--client" id="q1">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />
            
            <div class="comment-inner">
                
                <p>You also need to be able to tell the Boss about some of the underlying technology that is involved in Pokémon Go and which she wants to use for the launch. You need to be able to tell her how geocaching and augmented reality might be used. </p>

                
            </div>
        
        </div>
        
        <p>Geocaching is about going to specific locations and can be used as part of games such as Pokémon Go. Identify which of the following are GPS location based games (you will probably need to open a new webpage to search for these games). </p>
        
        <div class="task">
        
            <p>Are these games GPS location based?</p>

            <ul class="reset-list yes-no-list happy-list clearfix">
            
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="zombiesRun" class="onoffswitch-checkbox" id="zombiesRun">
                    <label class="onoffswitch-label" for="zombiesRun">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Zombies, Run!
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="candyCrush" class="onoffswitch-checkbox" id="candyCrush">
                    <label class="onoffswitch-label" for="candyCrush">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Boom Beach
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="angryBirds" class="onoffswitch-checkbox" id="angryBirds">
                    <label class="onoffswitch-label" for="angryBirds">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                   Game of War: Fire Age
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="landlord" class="onoffswitch-checkbox" id="landlord">
                    <label class="onoffswitch-label" for="landlord">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Landlord
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="parallelKingdom" class="onoffswitch-checkbox" id="parallelKingdom">
                    <label class="onoffswitch-label" for="parallelKingdom">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Parallel Kingdom
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="footballManager" class="onoffswitch-checkbox" id="footballManager">
                    <label class="onoffswitch-label" for="footballManager">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Dots
                </li>
        
            </ul>
            
            <p class="cta centre-cta"><a href="#question2" class="btn btn-primary" id="q1Check">Check</a></p>
            <a href="#q1" id="errorTrigger"></a> 
        
        </div>
        
        <div class="task-reveal" id="question2">
        
        <div class="comment comment--client">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />
            
            <div class="comment-inner">
                
               <p>Augmented reality is also being widely used. Ingress has been a really popular game in this genre for some time. Who were the developers who built it?</p>
                
            </div>
        
        </div>
        
        <div class="task">
            <p>
            <label for="q3-2">Who are the developers behind Ingress?</label>
            <input type="text" class="standard-form-control" name="q3-2" id="q3-2" />
            </p>
            <p class="cta centre-cta"><a href="#question3" class="btn btn-primary" id="q3Check">Check</a></p>
            <a href="#question2" id="errorTrigger"></a> 
        </div>
        
        
        
        </div><!--/question2-->
        
        <div class="task-reveal" id="question3">
        
            <h2>Location</h2>
            
            <div class="comment comment--client">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />
                
                <div class="comment-inner">
                    
                    <p>Your final job is to check where popup stores should be located. The Boss has asked that it is located close to the centre of the town (where there are lots of people and so high "footfall") but at least 200m from the nearest store. Use the interactive map below to firstly click on the stores to highlight them and secondly to identify the central location for the popup store.</p>
                    
                </div>
            
            </div>
            
            <div class="task">
                <ul class="map-controls reset-list clearfix">
                    <li><a href="#" id="heatMapToggle">Show footfall heat map</a></li>
                    <li><a href="#" id="radiusToggle">Show 200m radius from main store</a></li>
                </ul>
                <div class="map-holder">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/map.gif" alt="" class="base-map" />
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/map-heatmap.gif" alt="" class="heat-map" id="heatMap" />
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/map-radius.png" alt="" class="radius-map" id="radius" />
                    
                    <a href="#" class="pin pin1" id="pin1">?</a>
                    <a href="#" class="pin pin2" id="pin2">?</a>
                    <a href="#" class="pin pin3" id="pin3">?</a>
                    <a href="#" class="pin pin4" id="pin4">?</a>
                    
                </div>
                
            </div>
        
        </div>        

        
        
        <div class="lets-move-on" id="moveon">

        
        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Excellent work!
        </p>
        
        <p>So the researcher's job is very varied. This badge involved looking at a lot of different areas (marketing, tech habits, location based services, augmented reality, trends and games). Here the tasks have related to launching a new product but they could equally well be to do with a news story or working out where to invest a company’s money.</p>
  
        
        
        
        
        
        <p class="cta centre-cta"><a href="{{$links['success']}}" class="btn btn-primary animsition-link">On to the next step</a></p>
        
        </div>
        

        </div>
        </div>
        </div><!--/holder-->
        
        <div class="not-right">
            <p>Hmmm. That's not right. Take another look.</p>
        </div>
        
        <div class="location-not-right">
            <p>Hmmm. <span id="errorMessage"></span></p>
        </div>
        
        <div class="overlay-bg" id="overlayBg"></div>
        <div class="overlay location-overlay" id="site1">
            <a href="#" class="overlay-close"></a>
            <h2>Site 1</h2>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/vacant-shop.jpg" alt="" />
            <h3>Empty shop</h3>
            
            <p class="stat">Distance from main shop: <span>280m</span></p>
            <p class="stat">Footfall heat rating: <span class="cold">Cold</span></p>
            <p class="cta centre-cta"><a href="#" class="btn btn-primary btn-select-site" id="selectSite1">Select this site</a></p>
        </div>
        
        <div class="overlay location-overlay" id="site2">
            <a href="#" class="overlay-close"></a>
            <h2>Site 2</h2>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/vacant-shop.jpg" alt="" />
            <h3>Empty shop</h3>
            
            <p class="stat">Distance from main shop: <span>320m</span></p>
            <p class="stat">Footfall heat rating: <span class="warm">Warm</span></p>
            <p class="cta centre-cta"><a href="#" class="btn btn-primary btn-select-site" id="selectSite2">Select this site</a></p>
        </div>
        
        <div class="overlay location-overlay" id="site3">
            <a href="#" class="overlay-close"></a>
            <h2>Site 3</h2>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/vacant-shop.jpg" alt="" />
            <h3>Empty shop</h3>
            
            <p class="stat">Distance from main shop: <span>110m</span></p>
            <p class="stat">Footfall heat rating: <span class="hot">Hot</span></p>
            <p class="cta centre-cta"><a href="#" class="btn btn-primary btn-select-site" id="selectSite3">Select this site</a></p>
        </div>
        
        <div class="overlay location-overlay" id="site4">
            <a href="#" class="overlay-close"></a>
            <h2>Site 3</h2>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/vacant-shop.jpg" alt="" />
            <h3>Empty shop</h3>
            
            <p class="stat">Distance from main shop: <span>220m</span></p>
            <p class="stat">Footfall heat rating: <span class="hot">Hot</span></p>
            <p class="cta centre-cta"><a href="#moveon" class="btn btn-primary btn-select-site" id="selectSite4">Select this site</a></p>
        </div>
        
        
        
        <div class="small-screen">
            <div class="small-screen-message">
                <h2>Sorry</h2>
                <p>Your screen is too small to complete these tasks.</p>
                <p>Please try again when you have access to a larger screen.</p>
            </div>
        </div>
        
        @include('vendor.digitalmarmalade.badges._global.partials.javascript');
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 4);
            oBadges.redirectIfPreviousStepNotCompleted(3, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-4.js', 'min' => false))</script>

@endsection