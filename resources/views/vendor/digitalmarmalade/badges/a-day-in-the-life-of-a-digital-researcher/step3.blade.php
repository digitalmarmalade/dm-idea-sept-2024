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
        <div class="progress-bar-fill" style="width: 60%;"></div>
        </div>

        </div>

        <h2 class="page-title">Marketing Channels</h2>

        <h2>Choosing your approach</h2>

        <div class="comment comment--client">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />

            <div class="comment-inner">

                <p>All your background research information went down really well at the planning meeting – the Boss was certainly impressed! The end result is that the Boss wants to launch the new line of trainers in a couple of months. They need to be a success in stores as well as online and she is worried that they’re not going to sell enough to people in the shops, as everyone is shopping online now. You need to think again about how you're going to do things.</p>

            </div>

        </div>

        <p>At the planning meeting some ideas were suggested for different ways of promoting sales online and in the shops. Which approaches might work best online and in shops? Rearrange the post-it notes to work out which are going to be work best for the store promotions.</p>



        <div class="task">

        <div class="row whiteboard">
            <div class="approach-bucket xs-col-1-3">

                <h2>Online</h2>
                <div class="dropzone" id="droppable1">

                </div>
            </div>
            <div class="approach-bucket xs-col-1-3">
                <h2>Both</h2>
                <div class="dropzone" id="droppable2">

                </div>
            </div>
            <div class="approach-bucket xs-col-1-3">
                <h2>In Store</h2>
                <div class="dropzone" id="droppable3">

                </div>
            </div>
        </div><!--/row-->
           <a href="#question2" id="clickTrigger"></a>
            <ul class="postits reset-list">
            <li><div class="postit" id="postit1">Cheaper</div></li>
            <li><div class="postit" id="postit2">Discounts</div></li>
            <li><div class="postit" id="postit3">Exclusive / limited editions</div></li>
            <li><div class="postit" id="postit4">Customisable trainers</div></li>
            <li><div class="postit" id="postit5">Customisable laces</div></li>
            <li><div class="postit" id="postit6">Vouchers</div></li>
        </ul>

        </div>

        <div class="task-reveal" id="question2">

            <div class="comment comment--client">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />

                <div class="comment-inner">

                    <p>We want to create a buzz so people come into the stores but the Boss has also thought of the idea of creating some popup shops – marquees in the centres of towns and cities where some additional trainers can be sold. She wants to use the Pokémon Go effect to drive people into the popup shops and stores but isn’t really sure how this works. So, further jobs for you to do!</p>

                </div>

            </div>

            <h2>Social Media Use</h2>

            <div class="comment comment--client">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />

                <div class="comment-inner">

                    <p>Firstly you need to provide some further information for her on how people share information online so we can maximise the impact of the viral marketing campaign and she can work out how best to drive interest for the stores and popup shops. You need to open up a new webpage and search for <strong>The rise of Social media in 2018 by Our World in Data</strong> and use the chart to help you identify how many monthly active users Facebook, Instagram and YouTube had in 2018:</p>

                </div>

            </div>

            <div class="task">
                <p>
                <label for="q2-1">Facebook users per month</label>
                <input type="text" class="standard-form-control standard-form-control--medium-width" name="q2-1" id="q2-1" maxlength="4" /> billion
                </p>

                <p>
                <label for="q2-2">YouTube users per month</label>
                <input type="text" class="standard-form-control standard-form-control--medium-width" name="q2-2" id="q2-2" maxlength="4" /> billion
                </p>

                <p>
                <label for="q2-3">Instagram users per month</label>
                <input type="text" class="standard-form-control standard-form-control--medium-width" name="q2-3" id="q2-3" maxlength="4" /> billion
                </p>

                <div class="users-graph">
                    <ul class="reset-list">
                        <li><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
<g>
	<circle style="fill:#3B5998;" cx="56.098" cy="56.098" r="56.098"/>
	<path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34
		c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"/>
</g>

</svg><span class="social-bar facebook-bar" id="facebookBar"></span></li>
<li><svg id="Capa_2" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#d80027;}</style></defs><rect class="cls-1" x="57" y="105" width="402" height="296"/><path class="cls-2" d="M209.35,312.11l114.92-59.59-114.92-60Z"/><path class="cls-2" d="M256,0C114.62,0,0,114.61,0,256S114.62,512,256,512,512,397.39,512,256,397.38,0,256,0ZM430.43,341.45c-4.43,19.22-20.16,33.4-39.08,35.51-44.82,5-90.18,5-135.36,5s-90.55,0-135.38-5c-18.92-2.11-34.64-16.29-39.06-35.51-6.3-27.38-6.3-57.27-6.3-85.45s.07-58.08,6.37-85.45C86,151.33,101.76,137.14,120.69,135c44.83-5,90.2-5,135.38-5s90.54,0,135.35,5c18.93,2.12,34.66,16.29,39.08,35.52,6.3,27.38,6.25,57.27,6.25,85.45S436.73,314.07,430.43,341.45Z"/></svg><span class="social-bar youtube-bar" id="youtubeBar"></span>
</li>
<li><svg version="1.1" id="Capa_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 112.196 112.196" style="enable-background:new 0 0 112.196 112.196;" xml:space="preserve">
<g>
	<circle id="XMLID_115_" style="fill:#6A453B;" cx="56.098" cy="56.097" r="56.098"/>
	<path style="fill:#FFFFFF;" d="M79.124,22.506h-46.05c-5.83,0-10.56,4.73-10.56,10.57v46.05c0,5.83,4.73,10.56,10.56,10.56h46.05
		c5.83,0,10.56-4.73,10.56-10.56v-46.05C89.684,27.236,84.954,22.506,79.124,22.506z M71.983,30.276l8.44-0.02h0.02
		c0.81-0.01,1.47,0.65,1.47,1.45v8.47c0,0.81-0.65,1.46-1.46,1.46l-8.43,0.03c-0.81,0-1.46-0.65-1.46-1.45l-0.03-8.47
		C70.523,30.936,71.173,30.286,71.983,30.276z M45.804,50.326c0.22-0.38,0.45-0.76,0.71-1.12c2.15-2.98,5.64-4.93,9.58-4.93
		c3.95,0,7.44,1.95,9.59,4.93c0.26,0.36,0.49,0.74,0.71,1.13c0.96,1.7,1.53,3.67,1.53,5.76c0,6.52-5.31,11.82-11.83,11.82
		c-6.52,0-11.82-5.3-11.82-11.82C44.273,54.006,44.834,52.036,45.804,50.326z M83.144,76.706c0,3.55-2.89,6.44-6.44,6.44h-41.21
		c-3.55,0-6.44-2.89-6.44-6.44v-27.5h10.03c-0.25,0.61-0.47,1.25-0.65,1.89c-0.46,1.59-0.7,3.27-0.7,5
		c0,10.13,8.24,18.37,18.36,18.37c10.13,0,18.37-8.24,18.37-18.37c0-1.73-0.25-3.41-0.7-5c-0.19-0.64-0.4-1.28-0.65-1.89h10.03
		V76.706z"/>
</g>

</svg><span class="social-bar instagram-bar" id="instagramBar"></span></li>
                    </ul>
                </div>

                <p class="cta centre-cta"><a href="#question3" class="btn btn-primary" id="q2Check">Check</a></p>
                <a href="#question2" id="errorTrigger"></a>
            </div>



        </div><!--/question2-->

        <div class="task-reveal" id="question3">

            <div class="comment comment--client">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />

                <div class="comment-inner">

                    <p>Using information from <strong>The rise of Social media in 2018 by Our World in Data</strong>, what was the first social media site to reach a million monthly active users? And when was this milestone achieved?</p>

                </div>

            </div>

            <div class="task">
              <p class="question">

                <label for="q2-4">Using information from The rise of Social media in 2018 by Our World in Data. What was the first social media site to reach a million monthly active users? And when was this milestone achieved?</label>
                <ul class='input-list'>
                  <li><span>Social Media:</span><input type="text" class="standard-form-control" name="q2-4" id="q2-4" /></li>
                  <li><span>Year:</span><input type="text" class="standard-form-control" name="q2-5" id="q2-5" /></li>
                </ul>
              </p>
              <p class="cta centre-cta"><a href="#moveon" class="btn btn-primary" id="q4Check">Check</a></p>
              <a href="#question3" id="errorTrigger"></a>
            </div>

            <!-- <div class="task with-pie-chart">
                    <p class="question">
                    <label for="q2-4">Percentage of marketers who thought social media developed loyal fans.</label>
                    <input type="text" class="standard-form-control standard-form-control--small-width" name="q2-4" id="q2-4" maxlength="2" />%
                    </p>
                    <p class="cta centre-cta"><a href="#moveon" class="btn btn-primary" id="q4Check">Check</a></p>
                    <a href="#question3" id="errorTrigger"></a>
                    <div class="pie-holder">
                        <div class="pie" id="pieSlice" data-start="0" data-value="10"></div>
                    </div>
            </div> -->

        </div><!--/question3-->

        <div class="lets-move-on" id="moveon">

        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Excellent work!
        </p>

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link">On to the next step</a></p>

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
            oBadges.setSlugAndStep('{{$url['slug']}}', 3);
            oBadges.redirectIfPreviousStepNotCompleted(2, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-3.js', 'min' => false))</script>

@endsection
