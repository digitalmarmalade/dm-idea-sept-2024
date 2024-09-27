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
        
        <h2 class="page-title">CSS Classes</h2>
        
        <p>In the last example we used the following line - 
        &lt;link rel="stylesheet" ref="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"&gt;
        This tells the web browser where to find the style sheet.</p>
        
        <p>Classes in HTML are used to control the way a block of code (or mark-up) is rendered (appears) in the browser. Each class corresponds to a class definition in the Bootstrap CSS (Cascading Style Sheet) file, which is where things like font-size and background colours (to name just a couple) are set.</p>
        
        <p>Bootstrap uses descriptive class names to show the purpose of the HTML components.</p>
        <p>In the last step, you found where to change the text by looking for the class="navbar-brand". This class controls how the site branding shows in the navbar - the site navigation or menu.</p>
        <p>Below is the carousel component, which is a slide show of banner images used on sites to promote things (to draw attention to a special offer for example). Look at the carousel component and drag the class names to the correct block of rendered HTML.</p>
        
        
        
        <div class="task task-little-padding">
        
        <div class="image-holder">
        	<div class="classes-dropzones">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/step-4-figure-1.jpg" alt="" width="685" height="480" />
            <div class="dropzone class-dropzone-1" id="droppable1"><p class="class-name"></p></div>
            <div class="dropzone class-dropzone-2" id="droppable2"><p class="class-name"></p></div>
            <div class="dropzone class-dropzone-3" id="droppable3"><p class="class-name"></p></div>
            <div class="dropzone class-dropzone-4" id="droppable4"><p class="class-name"></p></div>
            </div>
        </div>
        
        <div class="drag-options drag-options--carousel">
            <ul class="reset-list inline-list">
                <li><a href="#" class="drag-option draggable" id="answer_4_1">class="item"</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_4_2">class="carousel-indicators"</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_4_3">class="left-carousel-control"</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_4_4">class="right-carousel-control"</a></li>
            </ul>
        </div>
        
        <a href="#nextStep" id="clickTrigger"></a>
        
        </div>
        
        <div class="lets-move-on" id="nextStep">

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Perfect. Let's crack on.
        </p>
        
        
        
        <p>Below is the HTML mark-up for the Carousel component. Click Preview to view how it currently looks.</p>

        
        
<div class="code-window">
<div class="code-window-scroll">
<xmp> 1 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
 2  <!-- Indicators -->
 3  <ol class="carousel-indicators">
 4    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
 5    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
 6  </ol>
 7  <!-- Wrapper for slides -->
 8  <div class="carousel-inner" role="listbox">
 9        <div class="item active">
10          <img src="banner1.jpg" alt="...">
11          <div class="carousel-caption">
12            This is my caption
13          </div>
14        </div>
15  </div>
16
17  <!-- Controls -->
18  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
19    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
20    <span class="sr-only">Previous</span>
21  </a>
22  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
23    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
24    <span class="sr-only">Next</span>
25   </a>
26 </div>
</xmp>  
</div>
<a href="#revealSection1" class="preview-button overlay-trigger" data-href="#preview1" id="previewButton1">Preview the code</a>
  
</div><!--code-window-->

 </div> <!--/nextStep-->
 
 <div class="reveal-section-1" id="revealSection1">
 
<p>Note that there is currently only one slide when there are two dots on the 'carousel-indicator' suggesting there are two slides.</p>
<p>Create another slide by following these steps:</p>
<p>
<span class="task-number">1</span> <strong>Copy and paste this block of HTML into line 15 below.</strong> This copies the first slide which is defined in lines 9-14 of the code and creates a new one.</p>
<p>
<xmp class="copy-this"><div class="item active">
   <img src="banner1.jpg" alt="...">
   <div class="carousel-caption">
     This is my caption
   </div>
</div>
</xmp>
</p>
<p>Top tip: Every opening &lt;div&gt; tells the browser that a block of code has started. The &lt;/div&gt; tells the browser that this block of code has ended.</p>
<p><span class="task-number">2</span> <strong>Delete the word 'active'</strong> from the class in the code you just pasted in. This class tells the browser which slide is currently active (or visible) - there should only be one slide visible. Don't forget, you can a double click a word to select it all.</p>
<p><span class="task-number">3</span> <strong>Change the image</strong> the slide uses by changing the &lt;img src=""&gt; <strong>from 'banner1.jpg' to 'banner2.jpg'</strong> in the code you just pasted in. The src part of the &lt;img&gt; tag tells the browser which image to display.</p>


<div class="code-window">
<div class="code-window-scroll">
<xmp> 1 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
 2   <!-- Indicators -->
 3   <ol class="carousel-indicators">
 4     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
 5     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
 6   </ol>
 7   <!-- Wrapper for slides -->
 8   <div class="carousel-inner" role="listbox">
 9         <div class="item active">
10           <img src="banner1.jpg" alt="...">
11           <div class="carousel-caption">
12             This is my caption
13           </div>
14         </div>
</xmp>
<div class="enter-code">
   <span class="line-number">15</span>
    <textarea class="medium task-4-3" id="bannerInput" name="bannerInput"></textarea>
</div>
<xmp>16  </div>
17 
18   <!-- Controls -->
19   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
20     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
21     <span class="sr-only">Previous</span>
22   </a>
23   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
24     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
25     <span class="sr-only">Next</span>
26   </a>
27 </div>
</xmp>  
</div>
<a href="#moveOn" class="preview-button" data-href="#preview2" id="previewButton2">Preview the code</a>
  
</div><!--code-window-->

<div id="error3" class="error">
    <p>Something's not quite right. Try again.</p>
    <p>Your code block should look like this:</p>
    <p>
<xmp class="copy-this"><div class="item">
   <img src="banner2.jpg" alt="...">
   <div class="carousel-caption">
     This is my caption
   </div>
</div>
</xmp>
    </p>
</div> 

</div><!--/reveal-section-1--> 
 
        
        <div class="lets-move-on" id="moveOn">

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Superb. Let's move on.
        </p>

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link" id="review">On to the next task</a></p>
        
        </div> <!--/lets-move-on-->
        
        
        </div>
        </div>
        </div><!--/holder-->
        
        <div id="overlayBg" class="overlay-bg"></div>
        
        <div class="overlay code-overlay" id="preview1">
        <p class="overlay-close"><span class="flaticon-delete85"></span></p>
            <iframe src="{{ action('badgesController@overlay', ['overlay' => 2, 'badgeSlug' => Route::getCurrentRoute()->parameters()['badgeSlug'], 'step' => Route::getCurrentRoute()->parameters()['step']]) }}" class="code-iframe"></iframe>
        </div>
        
        <div class="overlay code-overlay" id="preview2">
        <p class="overlay-close"><span class="flaticon-delete85"></span></p>
            <iframe src="{{ action('badgesController@overlay', ['overlay' => 3, 'badgeSlug' => Route::getCurrentRoute()->parameters()['badgeSlug'], 'step' => Route::getCurrentRoute()->parameters()['step']]) }}" class="code-iframe"></iframe>
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