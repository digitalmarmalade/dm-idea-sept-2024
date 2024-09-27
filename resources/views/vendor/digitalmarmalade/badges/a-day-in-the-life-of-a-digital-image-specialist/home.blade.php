@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition">
        
            <div class="big-intro-banner">
            <div class="row intro-page-banner">
                
                <h1 class="intro-heading"  data-sr="wait 1s, enter top, move 50px">A Day in the Life of a <span data-sr="wait 1.5s, opacity 0, scale up 20%">Digital Image Specialist</span></h1>
                
                

                
                <a href="#content" class="down-arrow"></a>

            
            </div>
            
            
            <div class="row with-footer" id="content">
            
                <div class="sm-col-3-4 md-col-2-3 lg-col-1-2 centre-col">
                
                
                <div class="column-content">
                <p>Every digital agency needs to source, treat and supply images for use in their digital projects – but how does that process work?</p>
                <p>How does an idea from a client get to delivery – and who connects the dots between the agency design, the client and the photographer?</p>
                <p>In this badge you can try out being a digital image specialist working with a client, a Creative Director and a photographer.</p>
                <p>Digital image specialists select the best possible image for any given task. Others on the team edit and publish the picture the specialist selects.</p>
                <p>Your Creative Director has agreed a brief with the client, the photographer is out doing the shots, now it's over to you. So let's start with the basics.</p>               
                <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">Start</a></p>
                
                </div>
                </div>
            
            
            </div>
            </div>
            
            <header class="lockup">
                <a target="_blank" href="http://www.idea.org.uk">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="idea-logo" alt="iDEA Inspiring Digital Enterprise Awards" />
                </a>
            </header>
        
        </div><!--/holder-->

        @include('vendor.digitalmarmalade.badges._global.partials.javascript');
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/home.js', 'min' => false))</script>

@endsection