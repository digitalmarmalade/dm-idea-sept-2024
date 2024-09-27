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
        <div class="progress-bar-fill" style="width: 20%;"></div>
        </div>
        
        </div>
        
        <h2 class="page-title">Analysing Imagery - Eye Contact</h2>
        
        <p>Humans are very visual creatures. Scientific research suggests that half of all neural tissue in the brain is related to vision. People's attention spans are growing ever shorter (scientists in Canada are claiming that the average human now has a shorter attention span than a goldfish!), so using the right image in design is more important than ever.</p>
        
        <h2>Meaning in imagery</h2>
        
        <p>There is a lot more to choosing the correct image for a piece of communication than just going for something that is pleasing to the eye.</p>
        <p>The way an image is taken, lit, composed and treated can all alter the meaning of a subject.</p>

        
        <h2>Arranging an image</h2>
        
        <p>Which of these images catches your eye more?</p>
        
        <div class="side-by-side-images clearfix">
        <a href="#section1" id="imageLeft"><img src="/badge-assets/{{$url['slug']}}/_global/img/task1-1-1.jpg" alt="" /></a>
        <a href="#section1" id="imageRight"><img src="/badge-assets/{{$url['slug']}}/_global/img/task1-1-2.jpg" alt="" /></a>
        </div>
        
        <div class="reveal-section-1" id="section1">
        
        <p class="hide" id="mostPeople1">Statistically, most people click the image where the subject is making eye contact.</p>
        
        <p>An image where the subject is looking straight at the camera has an instant connection with the viewer. A subject looking away from the camera can feel more natural but distant – the viewer is watching something but not necessarily involved.</p>
        
        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">On to the next task</a></p>
        

        </div>
        
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 1);
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-1.js', 'min' => false))</script>

@endsection