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
       
        <div class="row">
        <div class="question-column">
        
        <div class="progress-holder">
        
        <div class="progress-bar">
        <div class="progress-bar-fill" style="width: {{$progress['percentage']}}%"></div>
        </div>
        
        </div>
        
        <h2 class="page-title centre-text">Your First Day</h2>

        </div>
        </div><!--/row-->
        <div class="row email-intro">
        
            <div class="get-email-envelope"></div>
            
            <div class="the-email">
            <div class="the-email-window">
            
                <ul class="reset-list">
                    <li>From: The Boss</li>
                    <li>To: YOU</li>
                    <li>Subject: We need you to sort this out</li>
                </ul>
                
                <div class="email-body">
                
                <p>A client has sent back this page. They're not happy - it doesn't look like the design. Everyone's really busy so we're going to drop you in at the deep end. Can you take a look at the page and correct the errors to make it look like the visual? Once you're happy, use the button at the bottom to send it for review. Bits that need correcting are outlined in red.</p>
                <p>Thanks,</p>
                <p>The Boss</p>
                
                <p class="centre-text"><a href="#getStarted" class="btn btn-primary">Get started</a></p>
                
                </div>
            
            </div>  
            </div>      
        
        </div><!--/row-->
        
        <div class="row clearfix" id="getStarted">
        
            <div class="sm-col-1-2">
                <div class="column-content">
                <h2 class="centre-text final-heading">The Design</h2>
                <div class="the-page">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/final-1-right.jpg" alt="" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/final-2-right.jpg" alt="" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/final-3-right.jpg" alt="" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/final-4-right.jpg" alt="" />
                <img src="/badge-assets/{{$url['slug']}}/_global/img/final-5-right.jpg" alt="" />
                </div>
                </div>
            </div>
            
            <div class="sm-col-1-2">
                <div class="column-content">
                <h2 class="centre-text final-heading">The Page</h2>
                <div class="the-page" id="completelyBroken">
                <a href="#" class="overlay-trigger" data-href="#task1Overlay" id="task1Trigger"><img src="/badge-assets/{{$url['slug']}}/_global/img/final-wrong.jpg" alt="" /></a>
                </div>
                <div class="the-page hide" id="pageToFix">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/final-1-right.jpg" alt="" />
                <span id="task2Holder">
                <a href="#" class="overlay-trigger" data-href="#task2Overlay" id="task2Trigger"><img src="/badge-assets/{{$url['slug']}}/_global/img/final-2-wrong.jpg" alt="" id="task2Outcome" /></a>
                </span>
                <span id="task3Holder">
                <a href="#" class="overlay-trigger" data-href="#task3Overlay" id="task3Trigger"><img src="/badge-assets/{{$url['slug']}}/_global/img/final-3-wrong.jpg" alt="" id="task3Outcome" /></a>
                </span>
                <span id="task4Holder">
                <a href="#" class="overlay-trigger" data-href="#task4Overlay" id="task4Trigger"><img src="/badge-assets/{{$url['slug']}}/_global/img/final-4-wrong.jpg" alt="" id="task4Outcome" /></a>
                </span>
                <img src="/badge-assets/{{$url['slug']}}/_global/img/final-5-right.jpg" alt="" />
                </div>
                </div>
            </div>
        
        </div><!--/row-->
        
        <div class="row with-footer">
        
        <p class="cta centre-cta"><a href="{{$links['success']}}" class="btn btn-primary animsition-link" id="review">Send for Review</a></p>
        
        </div>
        
        
        </div><!--/holder-->

        <div id="overlayBg" class="overlay-bg"></div>

<div class="overlay code-overlay" id="task1Overlay">
<p class="overlay-close"><span class="flaticon-delete85"></span></p>

<div class="overlay-question">
<h2>The page doesn't look at all right at the moment!</h2>
<p>It doesn't seem to have any styling at all. Something is missing, but what?</p>
<p>What Bootstrap files do we need to link to, to pick up the Bootstrap styling?</p>
<div id="task1Error" class="error">
    <p>Hmmm. That's not right.</p>
    <p>Remember, we're trying to style the page.</p>
</div> 
<p class="answer-buttons"><a href="#" class="btn btn-primary" id="task1A1">Stylesheet</a> <a href="#" class="btn btn-primary" id="task1A2">Javascript</a> <a href="#" class="btn btn-primary" id="task1A3">React</a></p>


</div>

</div>

<div class="overlay code-overlay" id="task2Overlay">
<p class="overlay-close"><span class="flaticon-delete85"></span></p>

<div class="overlay-question">
<h2>Some of the logo thumbnails are too wide</h2>
<div class="img-holder">
<img src="/badge-assets/{{$url['slug']}}/_global/img/final-2-wrong.jpg" alt="" />
</div>
<p>They should each cover a quarter of the width of the page rather than half of the width of the page.</p>
<p>We need to change the column class, so it covers one quarter of the twelve column grid. Remember, the number in the column class shows how many columns it covers.</p>

<div id="task2Error" class="error">
    <p>Hmmm. That's not right.</p>
    <p>Remember, there are twelve columns. We want to cover a quarter of them, so what's one quarter of twelve?</p>
</div>

<p class="answer-buttons"><a href="#" class="btn btn-primary" id="task2A1">col-md-12</a> <a href="#" class="btn btn-primary" id="task2A2">col-md-4</a> <a href="#" class="btn btn-primary" id="task2A3">col-md-3</a></p>

 
</div>

</div>

<div class="overlay code-overlay" id="task3Overlay">
<p class="overlay-close"><span class="flaticon-delete85"></span></p>

<div class="overlay-question">
<h2>This content is not centre aligned</h2>
<div class="img-holder">
<img src="/badge-assets/{{$url['slug']}}/_global/img/final-3-wrong.jpg" alt="" />
</div>
<p>The design shows that this content needs to be centred.</p>
<p>This content covers 10 out of the 12 columns and we need to add an 'offset class' to push it into the middle.</p>
<p>The formula for this was ([Number of columns in grid] - [Number of columns of thing we wish to centre])/2, so what's the right offset class?</p>

<div id="task3Error" class="error">
    <p>Hmmm. That's not right.</p>
    <p>There are 12 columns in the grid and we wish to centre 10, so the calculation is:</p>
    <p>(12 - 10) &divide; 2 which is the same as 2 &divide; 2.</p>
</div>

<p class="answer-buttons"><a href="#" class="btn btn-primary" id="task3A1">col-md-offset-0</a> <a href="#" class="btn btn-primary" id="task3A2">col-md-offset-1</a> <a href="#" class="btn btn-primary" id="task3A3">col-md-offset-2</a></p>

</div>

</div>

<div class="overlay code-overlay" id="task4Overlay">
<p class="overlay-close"><span class="flaticon-delete85"></span></p>


<div class="overlay-question">
<h2>There's a team member missing</h2>
<div class="img-holder">
<img src="/badge-assets/{{$url['slug']}}/_global/img/final-4-wrong.jpg" alt="" />
</div>
<p>In the design there are four team members, so we need to add another <strong>thumbnail component</strong>.</p>
<p>What is the definition of 'component'?</p>

<div id="task4Error" class="error">
    <p>Hmmm. That's not right.</p>
    <p>Individual components are included in Bootstrap to create the whole page.</p>
</div>

<p class="answer-buttons"><a href="#" class="btn btn-primary" id="task4A1">A part or element of a larger whole</a> <a href="#" class="btn btn-primary" id="task4A2">A device or program enabling a user to communicate with a computer</a> <a href="#" class="btn btn-primary" id="task4A3">A hypertext document connected to the World Wide Web</a></p>

</div>


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
            var slug = '{{$url['slug']}}';
            oBadges.setSlugAndStep('{{$url['slug']}}', 7);
            oBadges.redirectIfPreviousStepNotCompleted(6, '{{$links['last']}}');
        </script>
        <script>
        var oBadges = window.oBadges || {};

(function () {

    'use strict';

    oBadges.loadSs();

    var correctAnswers = 0;

    function showError() {
        $('body').addClass('show-error');
        setTimeout(function () {
            $('body').removeClass('show-error');
        }, 3000);
    }



    $('#helpTrigger').click(function () {

        $(this).toggleClass('on');
        $('#helpContent').toggleClass('expanded');
    });

    $('.help h3').click(function () {
        $(this).next('p').slideToggle();
    });

    $('#review').unbind().click(function () {
        if (correctAnswers === 4) {
            oBadges.stepCompleted();
            window.location.href = $(this).attr('href');
        } else {
            showError();
        }
        return false;
    });
    
    $('#task1A1').click(function () {
        $('#pageToFix').removeClass('hide');
        $('#completelyBroken').addClass('hide');
        $('#task1Error').removeClass('visible');
        $('#overlayBg').removeClass('overlay-bg-visible');
        $('#task1Overlay').removeClass('overlay-visible');
        correctAnswers++;
        return false;
    });
    $('#task1A2,#task1A3').click(function () {
        $('#task1Error').addClass('visible');
        return false;
    });
    
    $('#task2A3').click(function () {
        $('#task2Error').removeClass('visible');
        $('#overlayBg').removeClass('overlay-bg-visible');
        $('#task2Overlay').removeClass('overlay-visible');
        $('#task2Holder').html('<img src="/badge-assets/' + slug + '/_global/img/final-2-right.jpg" />');
        correctAnswers++;
        return false;
    });
    $('#task2A2,#task2A1').click(function () {
        $('#task2Error').addClass('visible');
        return false;
    });
    
    $('#task3A2').click(function () {
        $('#task3Error').removeClass('visible');
        $('#overlayBg').removeClass('overlay-bg-visible');
        $('#task3Overlay').removeClass('overlay-visible');
        $('#task3Holder').html('<img src="/badge-assets/' + slug + '/_global/img/final-3-right.jpg" />');
        correctAnswers++;
        return false;
    });
    $('#task3A1,#task3A3').click(function () {
        $('#task3Error').addClass('visible');
        return false;
    });
    
    $('#task4A1').click(function () {
        $('#task4Error').removeClass('visible');
        $('#overlayBg').removeClass('overlay-bg-visible');
        $('#task4Overlay').removeClass('overlay-visible');
        $('#task4Holder').html('<img src="/badge-assets/' + slug + '/_global/img/final-4-right.jpg" />');
        correctAnswers++;
        return false;
    });
    $('#task4A2,#task4A3').click(function () {
        $('#task4Error').addClass('visible');
        return false;
    });

}());
        </script>

@endsection