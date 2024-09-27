@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition">
        
        @include('vendor.digitalmarmalade.badges.a-day-in-the-life-of-a-junior-web-designer.header', ['title' => 'Header'])
       
        <div class="row with-footer">
        <div class="question-column">

        <div class="progress-holder">
        
        <div class="progress-bar">
        <div class="progress-bar-fill" style="width: {{$progress['percentage']}}%"></div>
        </div>
        
        </div>
        
        <h2 class="page-title">Multiple Columns</h2>
        
        <p>Let's try something with multiple columns using the Thumbnail component.</p>
        
        <div class="image-holder">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/step-6-figure-1.jpg" alt="" width="685" height="480" />
        </div>
        
        <p>To split our 12 column grid into 3 different thumbnails components each covering a third of the grid, what classes will we need?</p>
        
        <p>We'll need a class <strong>row</strong> of columns to stop the layout from flowing incorrectly, a <strong>thumbnail component</strong> (remember the descriptive class names that Bootstrap employs) and a class to set the <strong>width of the columns to cover one third of the grid (or four twelfths)</strong>.</p>
        
        <div class="task">
        
            <ul class="reset-list yes-no-list clearfix">
            
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="thumb" class="onoffswitch-checkbox" id="thumb">
                    <label class="onoffswitch-label" for="thumb">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    class="thumb"
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="col-12" class="onoffswitch-checkbox" id="col-12">
                    <label class="onoffswitch-label" for="col-12">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    class="col-md-12"
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="row" class="onoffswitch-checkbox" id="row">
                    <label class="onoffswitch-label" for="row">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    class="row"
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="navbar" class="onoffswitch-checkbox" id="navbar">
                    <label class="onoffswitch-label" for="navbar">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    class="navbar"
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="offset-2" class="onoffswitch-checkbox" id="offset-2">
                    <label class="onoffswitch-label" for="offset-2">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    class="col-md-offset-2"
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="carousel" class="onoffswitch-checkbox" id="carousel">
                    <label class="onoffswitch-label" for="carousel">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    class="carousel"
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="offset-4" class="onoffswitch-checkbox" id="offset-4">
                    <label class="onoffswitch-label" for="offset-4">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    class="col-md-offset-4"
                </li>
                <li>
                    <div class="onoffswitch">
                    <input type="checkbox" name="col-4" class="onoffswitch-checkbox" id="col-4">
                    <label class="onoffswitch-label" for="col-4">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                    </div>
                    class="col-md-4"
                </li>
        
            </ul>
            
            <a href="#revealSection1" id="clickTrigger"></a>
        
        </div>
        
        <div class="reveal-section-1" id="revealSection1">

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        That's right.
        </p>
        
        <p>Now drag these into the right order to create the thumbail markup. Remember every opening &lt;div&gt; needs a closing &lt;/div&gt; to tell the browser that the block of code has finished.</p>
        
        <div class="task">
        
        <h3 class="task-instructions centre-text">Drag the elements into the correct order; set up <strong>a row</strong>, then <strong>a column</strong>, then the <strong>thumbnail</strong> and finally the <strong>content</strong>. Then you need to close them all.</h3>
        
        <div class="row">
        <div class="sm-col-1-2">
            <div class="dropzone dropzone--one-line" id="droppable1"></div>
            <div class="dropzone dropzone--one-line dropzone-indent-1" id="droppable2"></div>
            <div class="dropzone dropzone--one-line dropzone-indent-2" id="droppable3"></div>
            <div class="dropzone dropzone--one-line dropzone-indent-3" id="droppable4"></div>
            <div class="dropzone dropzone--one-line dropzone-indent-2" id="droppable5"></div>
            <div class="dropzone dropzone--one-line dropzone-indent-1" id="droppable6"></div>
            <div class="dropzone dropzone--one-line" id="droppable7"></div>

        </div>
        
        <div class="sm-col-1-2">
            <div class="drag-options">
            <ul class="reset-list">
                <li><a href="#" class="drag-option draggable" id="answer_6_1">&lt;div class="row"&gt;</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_6_2">&lt;/div&gt;</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_6_3">&lt;div class="col-md-4"&gt;</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_6_4">&lt;/div&gt;</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_6_5">&lt;div class="thumbnail"&gt;</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_6_6">&lt;/div&gt;</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_6_7">Thumbnail Content</a></li>
            </ul>
            </div>
        </div>
        <a href="#moveOn" id="clickTrigger2"></a>
        </div>
        
        
        </div><!--/task-->

        </div><!--/reveal-1-->
        
        <div class="lets-move-on" id="moveOn">

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Excellent!
        </p>
        
        <p>Well done - you seem ready to take on your first day as a Junior Web Developer - this is your chance to earn your badge.</p>

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link" id="review">Start your first day</a></p>
        
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 6);
            oBadges.redirectIfPreviousStepNotCompleted(5, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-6.js', 'min' => false))</script>

@endsection