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
        <div class="progress-bar-fill" style="width: {{$progress['percentage']}}%;"></div>
        </div>
        
        </div>
        
        <h2 class="page-title">Getting started with Bootstrap</h2>
        
        <p>This is the HTML for a Navbar component, which we want to look like this:</p>
        
        <div class="image-holder">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3-figure-1.jpg" alt="" width="685" height="480" />
        </div>
        
        <p>Click Preview to see the code in action.</p>

        
        
<div class="code-window">
<div class="code-window-scroll">
<xmp> 1 <html>
 2 <head>
 3
 4 </head>
 5 <body>
 6     <nav class="navbar navbar-default">
 7       <div class="container-fluid">
 8         <div class="navbar-header">
 9           <a class="navbar-brand" href="#">iDEA</a>
10         </div>
11         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
12           <ul class="nav navbar-nav">
13             <li><a href="#what">What's the Big iDEA?</a></li>
14             <li><a href="#thebadges">Badges</a></li>
15             <li><a href="#theawards">Awards</a></li>
16           </ul>
17         </div><!-- /.navbar-collapse -->
18       </div><!-- /.container-fluid -->
19     </nav>
20 </body>
21 </html>
</xmp>  
</div>
<a href="#revealSection1" class="preview-button overlay-trigger" data-href="#preview1" id="previewButton1">Preview the code</a>
  
</div><!--code-window-->
<div class="reveal-section-1" id="revealSection1">
        <p>Hang on. That doesn’t look right. We haven’t told the browser that we are using Bootstrap, so it doesn’t know how to display the Navbar.</p>
        <p>We tell the browser we are using Bootstrap, by including links to the Bootstrap files in the section of the page that has information for the browser - the &lt;head&gt;&lt;/head&gt.</p>
        <p>Paste this line into the code below on line 3 between the &lt;head&gt; and &lt;/head&gt; and then click to Preview the code again:</p>
        <p class="line-to-copy">&lt;link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"&gt;</p>
        <p>This will tell the browser to use the Bootstrap stylesheet.</p>

<div class="code-window">
<div class="code-window-scroll">
<xmp> 1 <html>
 2 <head></xmp>
 <div class="enter-code">
 <span class="line-number">&nbsp;3</span>
 <textarea class="small" id="stylesheetInput" name="stylesheetInput"></textarea>
 </div>
<xmp> 4 </head>
 5 <body>
 6     <nav class="navbar navbar-default">
 7       <div class="container-fluid">
 8         <div class="navbar-header">
 9           <a class="navbar-brand" href="#">iDEA</a>
10         </div>
11         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
12           <ul class="nav navbar-nav">
13             <li><a href="#what">What's the Big iDEA?</a></li>
14             <li><a href="#thebadges">Badges</a></li>
15             <li><a href="#theawards">Awards</a></li>
16           </ul>
17         </div><!-- /.navbar-collapse -->
18       </div><!-- /.container-fluid -->
19     </nav>
20 </body>
21 </html>
</xmp>  
</div>
<a href="#revealSection2" class="preview-button" data-href="#preview2" id="previewButton2">Preview the code</a>
  
</div><!--code-window-->

</div>

<div id="error2" class="error">
    <p>Something's not quite right. Try again. Copy the code and paste it into line 3.</p>
</div> 

<div class="reveal-section-2" id="revealSection2">

        <p>This is better, but it still isn't quite the same as our design:</p>
        
        <div class="image-holder">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3-figure-1.jpg" alt="" width="685" height="480" />
        </div>
        
        <p>We need to replace the text that says the name of the site with an image.</p>
        <p>Look for class="navbar-brand" on line 9, highlight the site title, iDEA, and paste this code over it:</p>
        <p class="line-to-copy">&lt;img src="idea-logo.png" alt="iDEA" height="20" /&gt;</p>
        <p>Top tip: Did you know you can double click the a word to highlight all of it? Try double-clicking iDEA on line 9 to highlight it.</p>
        
<div class="code-window">
<div class="code-window-scroll">
<xmp id="codeSelection"> 1 <html>
 2 <head>
 3 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 4 </head>
 5 <body>
 6     <nav class="navbar navbar-default">
 7       <div class="container-fluid">
 8         <div class="navbar-header">
</xmp> 
  <div class="enter-code navbar-brand-text">
 <span class="line-number">&nbsp;9</span>
                   <textarea name="navbarBrandText" id="codeSelectionInput" class="code-selection-input task-3-3"><a class="navbar-brand" href="#">iDEA</a></textarea>
</div>
 <xmp id="codeSelection2">10         </div>
11         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
12           <ul class="nav navbar-nav">
13             <li><a href="#what">What's the Big iDEA?</a></li>
14             <li><a href="#thebadges">Badges</a></li>
15             <li><a href="#theawards">Awards</a></li>
16          </ul>
17         </div><!-- /.navbar-collapse -->
18       </div><!-- /.container-fluid -->
19     </nav>
20 </body>
21 </html>
</xmp>  
</div>
<a href="#moveOn" class="preview-button" data-href="#preview3" id="previewButton3">Preview the code</a>
<div class="selection-error"><p>You selected the wrong bit.<br>
You selected<br>
<span class="selection-text"></span>
Try again.</p></div>  
</div><!--code-window-->
        
 </div>   
 
 		<div id="error3" class="error">
        	<p>Not quite. Try again.</p>
        	<p>Your code should looks like this:</p>
        	<p><xmp class="copy-this"><a class="navbar-brand" href="#">
<img src="idea-logo.png" alt="iDEA" height="20" />
</a></xmp></p>
        	<p>
        </div>    
        
        <div class="lets-move-on" id="moveOn">

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Perfect. So on this page we've done two things - we've added a style sheet so the page looks a certain way and we've used an image which we can use for navigation. Ok, let's crack on.
        </p>

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link" id="review">On to the next task</a></p>
        
        </div> <!--/lets-move-on-->
        
        
        </div>
        </div>
        </div><!--/holder-->
        
        <div id="overlayBg" class="overlay-bg"></div>
        
        <div class="overlay code-overlay" id="preview1">
        <p class="overlay-close"><span class="flaticon-delete85"></span></p>
            <iframe src="{{ action('badgesController@overlay', ['overlay' => 1, 'badgeSlug' => Route::getCurrentRoute()->parameters()['badgeSlug'], 'step' => Route::getCurrentRoute()->parameters()['step']]) }}" class="code-iframe"></iframe>
        </div>
        
        <div class="overlay code-overlay" id="preview2">
        <p class="overlay-close"><span class="flaticon-delete85"></span></p>
            <iframe src="{{ action('badgesController@overlay', ['overlay' => 2, 'badgeSlug' => Route::getCurrentRoute()->parameters()['badgeSlug'], 'step' => Route::getCurrentRoute()->parameters()['step']]) }}" class="code-iframe"></iframe>
        </div>
        
        <div class="overlay code-overlay" id="preview3">
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 3);
            oBadges.redirectIfPreviousStepNotCompleted(2, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-3.js', 'min' => false))</script>

@endsection