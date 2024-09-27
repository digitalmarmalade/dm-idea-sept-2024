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
        
        <h2 class="page-title">Grid Layout</h2>
        
        <p>Both the components we've used so far stretch the full width of the page. This isn't always what you want - text that spans a full width of a page can be difficult to read on screen.</p>
        <p>To solve this, we're going to use Bootstrap's grid.</p>
        <p>Bootstrap pages are based on a 12 column grid.</p>
        <p>Columns are holders for the components.</p>
        
        <p>The number of columns an item covers is defined by a class: col-md-x where x is the number of columns.</p>
        <p>Adjust the slider below to update the class name and see how that affects the item width.</p>
        
        <div class="range-holder">
        
        <p><span class="range-start">1</span> <input type="range" min="1" max="12" step="1" id="range1" value="1" /> <span class="range-end">12</span></p>
        
        </div>
        
        <p class="slider-class">&lt;div class="col-md-<span id="slider-num-id1">1</span>"&gt;&lt;/div&gt;</p>
        
        <div class="grid-preview">
            <span class="grid-col-preview">1</span>
            <span class="grid-col-preview">2</span>
            <span class="grid-col-preview">3</span>
            <span class="grid-col-preview">4</span>
            <span class="grid-col-preview">5</span>
            <span class="grid-col-preview">6</span>
            <span class="grid-col-preview">7</span>
            <span class="grid-col-preview">8</span>
            <span class="grid-col-preview">9</span>
            <span class="grid-col-preview">10</span>
            <span class="grid-col-preview">11</span>
            <span class="grid-col-preview">12</span>       
            
            <div class="grid-col-demo col-1" id="grid-slider-1">Content</div>
            
            <a href="#revealSection1" id="clickTrigger"></a>
            
        </div>
        
        
         <div class="reveal-section-1" id="revealSection1">
         
            <p>Each row of columns needs to be wrapped in a div with the class 'row' (i.e. an opening &lt;div class="row"&gt; is needed before you set your columns and a closing &lt;/div&gt; is needed when all of your columns have been defined). This stops your layout from re-flowing incorrectly if the columns covered don't add up to 12 (the 12 column grid is not full).</p>
            <p>We want our text to cover two thirds of the page. Change the column class below to the cover the correct number of columns (col-md-?) and preview it.</p> 
            <p><strong>Don't forget that a Bootstrap webpage is made up of 12 columns. If 6 columns covers half a page, how many columns will cover two-thirds of the page?</strong></p>
        
<div class="code-window">
<div class="code-window-scroll">
<div class="enter-code">
<textarea id="setColTask">
<div class="row">
    <div class="col-md-1">This is the column content</div>
</div>
</textarea>  
</div>
</div>
<a href="#revealSection2" class="preview-button overlay-trigger" data-href="#preview1" id="previewButton1">Preview the code</a>
 <a href="#revealSection1" id="errorTrigger1"></a> 
</div><!--code-window-->

<div id="error1" class="error">
    <p>Something's not quite right. Try again.</p>
    <p>Two thirds of 12 is 8, so you need to set your column class to 8. Your code should look like this:</p>
<xmp class="copy-this"><div class="row">
    <div class="col-md-8">This is the column content</div>
</div>
</xmp>
</div> 

        
        
               
         
         </div><!--/revealSection1-->
         
         <div class="reveal-section-2" id="revealSection2">
         
         <p>The text is the now the right width but it would look better centred in the window.</p>
         <p>Fortunately, Bootstrap can do this for us using an 'offset' class which takes this format: <strong>col-md-offset-x</strong>, where x is the number of columns you wish to offset by. To centre the column there is a simple formula: ([Number of columns in grid] - [Number of columns of thing we wish to centre])/2. So in this instance: (12-8)/2.</p>
         <p>The offset class is used alongside the column class in this pattern: <strong>class="[number of columns class] [offset class]"</strong>. For example: class="col-md-4 col-md-offset-4".</p>
         <p>Use the slider below to set the right offset class to centre the column.</p>
         
         <div class="range-holder">
        
        <p><span class="range-start">0</span> <input type="range" min="0" max="4" step="1" id="range2" value="0" /> <span class="range-end">4</span></p>
        
        </div>
        
        <p class="slider-class">&lt;div class="col-md-8 col-md-offset-<span id="slider-num-id2">0</span>"&gt;&lt;/div&gt;</p>
        
        <div class="grid-preview">
            <span class="grid-col-preview">1</span>
            <span class="grid-col-preview">2</span>
            <span class="grid-col-preview">3</span>
            <span class="grid-col-preview">4</span>
            <span class="grid-col-preview">5</span>
            <span class="grid-col-preview">6</span>
            <span class="grid-col-preview">7</span>
            <span class="grid-col-preview">8</span>
            <span class="grid-col-preview">9</span>
            <span class="grid-col-preview">10</span>
            <span class="grid-col-preview">11</span>
            <span class="grid-col-preview">12</span>       
            
            <div class="grid-col-demo col-8" id="grid-slider-2">Content</div>
            <div class="grid-offset-demo col-0" id="grid-slider-3">Offset</div>
            
            <a href="#moveOn" id="clickTrigger2"></a>
            
        </div>
         
         
         
         </div>
        
        <div id="error2" class="error">
    <p>Something's not quite right. Try again.</p>
    <p>The calculation you need is ([Number of columns in grid] - [Number of columns of thing we wish to centre])/2.</p>
    <p>There are 12 columns in the grid and we wish to centre 8, so the calculation is:</p>
    <p>(12 - 8) &divide; 2 which is the same as 4 &divide; 2.</p>
</div> 
 
        
        <div class="lets-move-on" id="moveOn">

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Outstanding. On to the next task.
        </p>

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link" id="review">On to the next task</a></p>
        
        </div> <!--/lets-move-on-->
        
        
        </div>
        </div>
        </div><!--/holder-->

        <div id="overlayBg" class="overlay-bg"></div>

        <div class="overlay code-overlay" id="preview1">
        <p class="overlay-close"><span class="flaticon-delete85"></span></p>
            <iframe src="{{ action('badgesController@overlay', ['overlay' => 2, 'badgeSlug' => Route::getCurrentRoute()->parameters()['badgeSlug'], 'step' => Route::getCurrentRoute()->parameters()['step']]) }}" class="code-iframe" id="theColiFrame"></iframe>
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 5);
            oBadges.redirectIfPreviousStepNotCompleted(4, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-5.js', 'min' => false))</script>

@endsection