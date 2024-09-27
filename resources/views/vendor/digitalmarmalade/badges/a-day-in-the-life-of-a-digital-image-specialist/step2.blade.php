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
        <div class="progress-bar-fill" style="width: 40%;"></div>
        </div>
        
        </div>
        
        <h2 class="page-title">Analysing Imagery - Composition</h2>
        
        <p>The way an image is arranged to give meaning is called composition, it helps guide the viewer's eye to particular areas of the image. On this photo, click the focal point (the point to which your eye is immediately drawn).</p>
        
        <div class="focal-point-image">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-1-2-1.jpg" alt="" />
            <a href="#focalTask2" id="focalPoint1" class="focal-point-1"></a>
        </div>
        
        <div id="focalTask2" class="hide">
        
        <p>That's right. The lines of the train track guide the eye to the point at which they converge. These are called <strong>leading lines</strong>.</p>
        
        <p>Find the focal point on this image:</p>
        
            <div class="focal-point-image">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/task-1-2-2.jpg" alt="" />
                <a href="#focalTask3" id="focalPoint2" class="focal-point-2"></a>
            </div>
        
        </div>
        
        <div id="focalTask3" class="hide">
        
        <p>Spot on. In this instance, the focal point is created using the direction the subject is looking in - the viewer's eye is naturally drawn to the point where the subject's eyes are focused.</p>
        
        <p>Lastly, find the focal point on this image:</p>
        
            <div class="focal-point-image">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/task-1-2-3.jpg" alt="" />
                <a href="#moveon" id="focalPoint3" class="focal-point-3"></a>
            </div>
        
        </div>
        
        
        
        

        
        
        <div class="lets-move-on" id="moveon">
        
        <p>Correct. Automatically the eye is drawn to the face and eyes of the subject, but there are other composition techniques demonstrated here. By blurring the lady in the foreground, she automatically becomes excluded from the viewer's attention, which helps channel the eye towards the focal point. This, in photography, is called <strong>selective focusing</strong>.</p>

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Excellent. In this step we've learnt about composition. When choosing imagery to work in a piece of design (for example, a poster or a website) identifying the focal point of the image can be very useful to gain the viewer's attention.
        </p>

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">On to the next task</a></p>
        
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 2);
            oBadges.redirectIfPreviousStepNotCompleted(1, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-2.js', 'min' => false))</script>

@endsection