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

        <h2 class="page-title">Building a Web Page</h2>

        <p>Web design is normally used to describe the design process relating to the front-end (client side) design of a website including writing the code (HTML mark-up) that displays the site in a browser.</p>
        <p>A Junior Web Designer will spend a lot of time writing and editing HTML. HTML (Hyper Text Mark-up Language) tells the browser what to display (Chrome/Safari/Firefox/Internet Explorer/Opera are the main browsers).</p>
        <p>Basically this means that you are designing how someone views web page content in a browser.</p>

        <div class="image-expander">
        <img src="/badge-assets/{{$url['slug']}}/_global/img/websites.jpg" alt="" width="800" height="414" />
        <p class="caption">Some of the most visited websites in the world</p>
        </div>

        <p>The first thing to understand is that a web page is formed of two main areas in the HTML.</p>
        <p>The <strong>head</strong> (marked by an opening &lt;head&gt; tag and a closing &lt;/head&gt; tag) is where the elements that are meant to be read by computers, not the user, usually sit. These may include things like telling the browser where the fonts are that it needs to display the designed site or telling the browser what language the web page is in. </p>
        <p>The <strong>body</strong> (denoted by an opening &lt;body&gt; tag and a closing &lt;/body&gt; tag) is where the code that dictates what appears on the screen usually sits.</p>

        <div class="task">

        <h3 class="task-instructions centre-text">Drag the elements below to the &lt;head&gt; or &lt;body&gt;</h3>

        <div class="row">
        <div class="sm-col-1-2">
            <div class="dropzone" id="droppable1">
                <p class="opening-tag">&lt;head&gt;</p>
                <p class="dropped-answers"></p>
                <p class="closing-tag">&lt;/head&gt;</p>
            </div>
            <div class="dropzone" id="droppable2">
                <p class="opening-tag">&lt;body&gt;</p>
                <p class="dropped-answers"></p>
                <p class="closing-tag">&lt;/body&gt;</p>
            </div>

        </div>

        <div class="sm-col-1-2">
            <div class="drag-options">
            <ul class="reset-list">
                <li><a href="#" class="drag-option draggable" id="answer_1_1">A big feature image</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_1_2">The link to the font files</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_1_3">The main text of the web page</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_1_4">The site navigation/menu</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_1_5">The link to the site styles</a></li>
            </ul>
            </div>


            <a href="#moveon" id="clickTrigger"></a>
        </div>
        </div>

        
        </div><!--/task-->

        <div class="lets-move-on" id="moveon">

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Good. That's the basics, now let's move on to something a little more interesting.
        </p>

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link" id="review">On to the next task</a></p>

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
            oBadges.setSlugAndStep('{{$url['slug']}}', 1);
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-1.js', 'min' => false))</script>

@endsection
