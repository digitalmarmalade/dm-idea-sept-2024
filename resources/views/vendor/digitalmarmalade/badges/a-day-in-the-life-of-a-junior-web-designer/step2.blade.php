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
        
        <h2 class="page-title">Introducing Frameworks</h2>
        
        <p>In the &lt;head&gt;&lt;/head&gt; section of the web page, files can be included which provide the standardised appearance of elements that appear regularly in websites, defining things like colours and fonts.</p>
<p>These are called <strong>frameworks</strong>, and an example of a popular framework is <strong>Bootstrap</strong>.</p>
<p>Bootstrap is a free and open-source front-end web framework for designing websites and web applications. It contains HTML- and CSS-based design templates for typography, forms, buttons, navigation and other interface components.</p>
<p>Take a look at this page:</p>

        <div class="image-holder">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2-figure-1.jpg" alt="" width="685" height="480" />
        </div>
        
        <p>This page is made up of a number of Bootstrap components. A component is:</p>
        
        <div class="definition">
            <blockquote>
            <p>a part or element of a larger whole</p>
            <footer>Oxford English Dictionary</footer>
            </blockquote>
        </div>
        
        <p>In Bootstrap, components are commonly used interface elements.</p>
        <p>Below is a list of the components used to make up the page. Drag them on to the right part of the page.</p>
        
        <div class="task">
        
        <h3 class="task-instructions centre-text">Drag the components below to the right part of the page.</h3>
        
        <div class="row">
        <div class="sm-col-2-3">
        
            <div class="component-dropzones">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2-figure-2.jpg" alt="" width="452" height="437" />
            
            <div class="dropzone img-dropzone-1" id="droppable1"><p class="component-name"></p></div>
            <div class="dropzone img-dropzone-2" id="droppable2"><p class="component-name"></p></div>
            <div class="dropzone img-dropzone-3" id="droppable3"><p class="component-name"></p></div>
            <div class="dropzone img-dropzone-4" id="droppable4"><p class="component-name"></p></div>
            <div class="dropzone img-dropzone-5" id="droppable5"><p class="component-name"></p></div>
            </div>
        
        </div>
        
        <div class="sm-col-1-3">
            <div class="drag-options">
            <ul class="reset-list">
                <li><a href="#" class="drag-option draggable" id="answer_2_1">Navbar</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_2_2">Thumbnails</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_2_3">Carousel</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_2_4">Page Heading</a></li>
                <li><a href="#" class="drag-option draggable" id="answer_2_5">Paragraph</a></li>
            </ul>
            </div>
        </div>
        </div>
        
        <a href="#moveOn" id="clickTrigger"></a>
        </div><!--/task-->
        
        <div class="lets-move-on" id="moveOn">

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Excellent. Next, we'll look at how you create a component.
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 2);
            oBadges.redirectIfPreviousStepNotCompleted(1, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-2.js', 'min' => false))</script>

@endsection