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
        <div class="progress-bar-fill" style="width: 60%;"></div>
        </div>
        
        </div>
        
        <h2 class="page-title">Analysing Imagery - Position of the Camera</h2>
        
        <p>The meaning of an image conveyed in the composition and content of an image can be reinforced by where the camera was when the picture was shot, i.e. the <strong>framing</strong> of the image.</p>
        <p><strong>This puts the viewer in the position of the camera</strong>.</p>
        <p>Take a look at this image and then pick a word from below to describe it:</p>
        
        <div class="camera-angle-task">
            <div class="camera-angle-image">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2-1-1.jpg" alt="" />
            </div>
            
            <ul class="image-descriptors reset-list" id="imageDescriptor1">
                <li><a href="#cameraAngleTask">Weakness</a></li>
                <li><a href="#cameraAngleTask">Power</a></li>
                <li><a href="#cameraAngleTask">Happy</a></li>
            </ul>
        
        </div>
        
        <div class="hide" id="cameraAngleTask">
        
            <p>Correct. The subject appears powerful and dominant because the camera was looking up at him when the photograph was taken, reinforcing the powerful pose.</p>
            <p>If the camera had been looking down at the subject when the photograph was taken, the meaning of the image would subtly change from one of power, to the subject being more vulnerable.</p>
            
            <p>How about this image?</p>
            
            <div class="camera-angle-task">
                <div class="camera-angle-image">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2-1-2.jpg" alt="" />
                </div>
                
                <ul class="image-descriptors reset-list" id="imageDescriptor2">
                    <li><a href="#cameraZoomTask1">Weakness</a></li>
                    <li><a href="#cameraZoomTask1">Power</a></li>
                    <li><a href="#cameraZoomTask1">Happy</a></li>
                </ul>
            
            </div>
        
        </div>
        
        <div class="hide" id="cameraZoomTask1">
        
            <p>That's right. In this image, the camera is looming over the subject giving them an air of weakness. The viewer is placed as though they are standing over the subject.</p>
            
            <p>So the angle the photograph is taken from can affect the mood of an image. The distance that the subject is from the camera, and how much the subject fills the frame also has an effect on the meaning that can be drawn from an image.</p>
            <p>What would you do to the image below to make the image feel more intimate?</p>
            
            <div class="camera-angle-task">
                <div class="camera-angle-image">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2-2-1a.jpg" alt="" id="zoomSwap1" />
                </div>
                
                <ul class="image-descriptors reset-list" id="imageZoom1">
                    <li><a href="#cameraZoomTask2">Zoom In</a></li>
                    <li><a href="#cameraZoomTask2">Zoom Out</a></li>
                </ul>
            
            </div>
        
        </div>
        
        <div class="hide" id="cameraZoomTask2">        
        
            <p>Good. By moving the camera closer to the subject, the viewer is drawn into the image, suggesting you're at the table with the subject rather than observing from another table.</p>
            
            <p>What would you do to this image to suggest solitude?</p>
            
            <div class="camera-angle-task">
                <div class="camera-angle-image">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2-2-2a.jpg" alt="" id="zoomSwap2" />
                </div>
                
                <ul class="image-descriptors reset-list" id="imageZoom2">
                    <li><a href="#moveon">Zoom In</a></li>
                    <li><a href="#moveon">Zoom Out</a></li>
                </ul>
            
            </div>
        
        </div>
        
    
        
        
        
        
        

        
        
        <div class="lets-move-on" id="moveon">
        
        <p>Excellent. By zooming out, the camera places the viewer further away from the subject and the figure takes up much less of the frame, creating a sense of isolation.</p>

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Well done. So, in this step, we've seen how the position of the camera and how much the subject fills the image can reinforce the composition and in some instances even alter the meaning.
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 3);
            oBadges.redirectIfPreviousStepNotCompleted(2, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-3.js', 'min' => false))</script>

@endsection