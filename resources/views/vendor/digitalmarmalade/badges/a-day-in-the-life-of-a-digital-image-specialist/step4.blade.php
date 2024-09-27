@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition">
        
        @include('vendor.digitalmarmalade.badges.a-day-in-the-life-of-a-digital-image-specialist.header', ['title' => 'Header'])
       
        <div class="row with-footer">
        <div class="question-column">
        
        
        
        
        
        <div class="progress-holder">
        
        <div class="progress-bar">
        <div class="progress-bar-fill" style="width: 80%;"></div>
        </div>
        
        </div>
        
        <h2 class="page-title">Analysing Imagery - Lighting and Colour</h2>
        
        
        <div id="treatment">
            
                    
                
                
                
                <h2>Treating images</h2>
                
                <p>Conveying meaning in an image doesn't stop when a photograph is taken. Images can be <strong>treated</strong> to further reinforce or even change the mood by applying filters, adjusting the image contrast (high contrast equals more colours from each end of the spectrum, low contrast means fewer) or hue (colour or shade) and saturation (the intensity of a colour) of the image. To find out more about hue, saturation and lightness you can try our Colour Badge after this badge!</p>
                <p>Making images Sepia (a reddish-brown colour) can instantly suggest that they are old.</p>
                
                <p>Select the treatment for these images to convey the meaning below:</p>
                
                <div class="task task--image-choice clearfix">
                
                <h3>Make this image feel more nostalgic and old</h3>
                
                <img src="/badge-assets/{{$url['slug']}}/_global/img/3-1-original.jpg" class="start-image" alt="" />
                
                <a href="#taskChoice2" class="image-option" id="taskChoice1a">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/3-1-retro.jpg" alt="" />
                    <p>Option A: Make sepia and add a shadow that comes in from the edges of the frame</p>
                </a>
                
                <a href="#taskChoice2" class="image-option" id="taskChoice1b">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/3-1-saturation.jpg" alt="" />
                    <p>Option B: Increase the saturation of the image</p>
                </a>
                
                </div>
        
        </div>
        
        <div class="reveal-section-1" id="taskChoice2">
        
            <p class="correct-message">
            <span class="tick-holder">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
            </span>
            That's right. By converting the image to black and white and applying a sepia tint, the image appears vintage. Adding the shadow infers that the image was taken on older equipment.
            </p>
        
            <div class="task task--image-choice clearfix">
            
            <h3>Make this image feel more dramatic</h3>
            
            <img src="/badge-assets/{{$url['slug']}}/_global/img/3-2-original.jpg" class="start-image" alt="" />
            
            <a href="#taskChoice3" class="image-option" id="taskChoice2a">
            
            <img src="/badge-assets/{{$url['slug']}}/_global/img/3-2-reduce-contrast.jpg" alt="" />
            <p>Option A: Reduce contrast and soften focus with a slight blur</p>
            </a>
            
            <a href="#taskChoice3" class="image-option" id="taskChoice2b">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/3-2-increase-contrast.jpg" alt="" />
            <p>Option B: Increase contrast and add clouds to background</p>
            </a>
            
            </div>
        
        </div>
        
        <div class="reveal-section-1" id="taskChoice3">
        
            <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
         Correct. By increasing the contrast it makes the image more visually interesting, whereas reducing the contrast and blurring the image slightly softerns the image, making it calmer and less dramatic.
        </p>
        
            <div class="task task--image-choice clearfix">
            
            <h3>Make this image feel more happy</h3>
            
            <img src="/badge-assets/{{$url['slug']}}/_global/img/3-3-original.jpg" class="start-image" alt="" />
            
            <a href="#dragGame" class="image-option" id="taskChoice3a">
            
            <img src="/badge-assets/{{$url['slug']}}/_global/img/3-3-contrast.jpg" alt="" />
            <p>Option A: Increase contrast and saturation</p>
            </a>
            
            <a href="#dragGame" class="image-option" id="taskChoice3b">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/3-3-bw.jpg" alt="" />
            <p>Option B: Desaturate and increase contrast</p>
            </a>
            
            </div>
                
        </div>
        
        
        <div class="reveal-section-1" id="dragGame">
        
        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Well done. Increasing the contrast makes the colours brighter and more cheerful. Desaturating the image and increasing the contrast increases the areas of darkness in the photo, giving a more mysterious feel.
        </p>
        
        <p>Drag these images to the mood that sums them up:</p>
        
        <div class="image-drag-thing">
            
            <div class="images-to-drag">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cat-image-1.jpg" alt="" style="opacity: 0" />

                <img src="/badge-assets/{{$url['slug']}}/_global/img/cat-image-1.jpg" alt="" id="catImage1" class="draggable image-drag image-drag-1" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cat-image-2.jpg" alt="" id="catImage2" class="draggable image-drag image-drag-2" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cat-image-3.jpg" alt="" id="catImage3" class="draggable image-drag image-drag-3" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cat-image-4.jpg" alt="" id="catImage4" class="draggable image-drag image-drag-4" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cat-image-5.jpg" alt="" id="catImage5" class="draggable image-drag image-drag-5" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cat-image-6.jpg" alt="" id="catImage6" class="draggable image-drag image-drag-6" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cat-image-7.jpg" alt="" id="catImage7" class="draggable image-drag image-drag-7" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cat-image-8.jpg" alt="" id="catImage8" class="draggable image-drag image-drag-8" />
            </div>
            
            <div class="drop-area cheerful" id="droppable1">
                <h3>Happy/Cheerful</h3>
                <div class="dropped-answers"></div>
            </div>
            
            <div class="drop-area mysterious" id="droppable2">
                <h3>Mysterious/Foreboding</h3>
                <div class="dropped-answers"></div>
            </div>
            
            <div class="drop-area retro" id="droppable3">
                <h3>Old/Retro</h3>
                <div class="dropped-answers"></div>
            </div>
            
            <div class="drop-area calming" id="droppable4">
                <h3>Calm/Relaxed</h3>
                <div class="dropped-answers"></div>
            </div>
            
            <a href="#wordWithMood" id="clickTrigger"></a>
            
        
        </div>
        
        </div>
        
        
       <div id="wordWithMood" class="reveal-section-1">
       
        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Well done!
        </p>
            
            <div class="task">
            
            <p>Which two of these words did the <strong>foreboding/mysterious</strong> images have in common?</p>
            
            <a href="#q2" id="clickTrigger1"></a>
            
            <ul class="reset-list yes-no-list mysterious-list clearfix">
            
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="thumb" class="onoffswitch-checkbox" id="q1-colourful">
                    <label class="onoffswitch-label" for="thumb">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Colourful
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="col-12" class="onoffswitch-checkbox" id="q1-dark">
                    <label class="onoffswitch-label" for="col-12">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Dark
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="row" class="onoffswitch-checkbox" id="q1-light">
                    <label class="onoffswitch-label" for="row">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Light
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="navbar" class="onoffswitch-checkbox" id="q1-high-contrast">
                    <label class="onoffswitch-label" for="navbar">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    High Contrast
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="offset-2" class="onoffswitch-checkbox" id="q1-low-contrast">
                    <label class="onoffswitch-label" for="offset-2">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Low Contrast
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="carousel" class="onoffswitch-checkbox" id="q1-sepia">
                    <label class="onoffswitch-label" for="carousel">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Sepia
                </li>
        
            </ul>
            
            </div>
            
            
            <div class="reveal-section-1" id="q2">
            <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Excellent! Dark colours and black in an image, often caused by stark lighting, can suggest foreboding and apprehension, with the focus on the areas in the light, while the mind fills in the blanks bits for itself.
        </p>
        
        <div class="task">
            
            <p>Which two of these words did the <strong>happy/cheerful</strong> images have in common?</p>
            
            <a href="#q3" id="clickTrigger2"></a>
            
            <ul class="reset-list yes-no-list happy-list clearfix">
            
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="thumb" class="onoffswitch-checkbox" id="q2-colourful">
                    <label class="onoffswitch-label" for="thumb">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Colourful
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="col-12" class="onoffswitch-checkbox" id="q2-dark">
                    <label class="onoffswitch-label" for="col-12">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Dark
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="row" class="onoffswitch-checkbox" id="q2-light">
                    <label class="onoffswitch-label" for="row">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Light
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="navbar" class="onoffswitch-checkbox" id="q2-high-contrast">
                    <label class="onoffswitch-label" for="navbar">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    High Contrast
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="offset-2" class="onoffswitch-checkbox" id="q2-low-contrast">
                    <label class="onoffswitch-label" for="offset-2">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Low Contrast
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="carousel" class="onoffswitch-checkbox" id="q2-sepia">
                    <label class="onoffswitch-label" for="carousel">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Sepia
                </li>
        
            </ul>
            
            </div>
            
            </div>
            
            </div><!--/#word mood-->
            
            <div class="reveal-section-1" id="q3">
            
            <p class="correct-message" id="q2-explanation">
        <span class="tick-holder">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        That's right. Bright vivid colours usuall convey a sense of happiness and cheerfulness. Vivid colours that contrast with each other and compete for the eyes attention can create tension and excitement.
        </p>
        
        <div class="task">
            
            <p>Finally, which two of these words did the <strong>calm/relaxed</strong> images have in common?</p>
            
            <a href="#moveon" id="clickTrigger3"></a>
            
            <ul class="reset-list yes-no-list relaxed-list clearfix">
            
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="thumb" class="onoffswitch-checkbox" id="q3-colourful">
                    <label class="onoffswitch-label" for="thumb">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Colourful
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="col-12" class="onoffswitch-checkbox" id="q3-dark">
                    <label class="onoffswitch-label" for="col-12">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Dark
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="row" class="onoffswitch-checkbox" id="q3-light">
                    <label class="onoffswitch-label" for="row">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Light
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="navbar" class="onoffswitch-checkbox" id="q3-high-contrast">
                    <label class="onoffswitch-label" for="navbar">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    High Contrast
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="offset-2" class="onoffswitch-checkbox" id="q3-low-contrast">
                    <label class="onoffswitch-label" for="offset-2">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Low Contrast
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="carousel" class="onoffswitch-checkbox" id="q3-sepia">
                    <label class="onoffswitch-label" for="carousel">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    Sepia
                </li>
        
            </ul>
            
            </div>
            
            </div><!--/q3-->
            
            
        
        
        
        
        

        
        
        
        <div class="lets-move-on" id="moveon">
        
        <p class="correct-message" id="q3-explanation">
                    <span class="tick-holder">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
                    </span>
                    Colours that are more subdued and muted tend to create a feeling of calmness and peacefulness in the viewer, as the contrast in the image is much lower. There are less elements competing for attention, so the eye is less overwhelmed.<br>
<br>
We've seen here how things like the colour and treatment of an image can alter its meaning. Seems like you're ready to have your first day as a Digital Image Setter.
                    </p>

        

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">Start your first day</a></p>
        
        </div> <!--/lets-move-on-->
        
        
        </div>
        </div>
        </div><!--/holder-->
        
        <div class="not-right">
            <p>Hmmm. That's not right. Take another look.</p>
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