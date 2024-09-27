@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition">

        @include('vendor.digitalmarmalade.badges.a-day-in-the-life-of-a-digital-researcher.header', ['title' => 'Header'])
       
        <div class="row with-footer">
        <div class="question-column">
            
        <div class="progress-holder">
        
        <div class="progress-bar">
        <div class="progress-bar-fill" style="width: 20%;"></div>
        </div>
        
        </div>
        
        <h2 class="page-title">Building a viral marketing campaign</h2>
        
        <p class="lead">Researchers spend a lot of time searching online for information, contacting people to get opinions or advice and working out what further information is required to inform decisions. For this badge you are going to use some of the skills to help with the planning of a viral marketing campaign.</p>
        
        
        
        <div class="comment comment--client">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />
            
            <div class="comment-inner">
                
                <p>The Boss has just rung, she wants your help with planning a viral marketing campaign for the launch of a new line of trainers.</p>
                <img src="/badge-assets/{{$url['slug']}}/_global/img/trainers1.png" alt="" />
                <p>A viral marketing campaign is one where the marketing information is shared between people online. There’s an initial meeting where you are going to discuss this further but you’ve already got some jobs to do!</p>
                <p>You need to find out four bits of background information for discussion at the meeting.</p>
            </div>
        
        </div>
        
        
        
        
        
        
        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">Let's get started</a></p>
        

        
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
            oBadges.redirectIfPreviousStepNotCompleted(0, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-1.js', 'min' => false))</script>

@endsection