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
        <div class="progress-bar-fill" style="width: 40%;"></div>
        </div>
        
        </div>
        
        <h2 class="page-title">Finding Out</h2>
        
        <h2>Trends</h2>
        
        <div class="comment comment--client">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />
            
            <div class="comment-inner" id="q1">
                
                <p>Firstly the Boss wants to know what <strong>trainer trends</strong> were happening in <strong>2023</strong> and had recently read an article about this in <strong>Vogue</strong> which suggested that collaborations are hot right now between brands. So what collaboration should be created for the new trainers? Open a new window or tab and use your favourite search engine to find out what is trending in terms of trainer collaboration trends in 2023. Can you find the website address first? Paste this in below to check it’s the right article.</p>
                
            </div>
        
        </div>
        
        <div class="task">
        <p>
        <label for="q1-1">Vogue article web address</label>
        <input type="text" class="standard-form-control standard-form-control--full-width" name="q1-1" id="q1-1" placeholder="E.g. http://www.webaddress.co.uk/article-name" />
        </p>
        <p class="cta centre-cta"><a href="#question2" class="btn btn-primary" id="q1-1Check">Check</a></p>
        <a href="#q1" id="errorTrigger1"></a>
        </div>
        
        <div class="task-reveal" id="question2">
        
            <div class="comment comment--client">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />
                
                <div class="comment-inner">
                    
                    <p>Yes! That's the article the boss was talking about! Okay so let’s find out what brand Jacquemus collaborated with in the article...</p>
                    
                </div>
            
            </div>
            
            <div class="task">
            <p>
            <label for="q1-2">What was the brand Jacquemus collaborated with?</label>
            <input type="text" class="standard-form-control standard-form-control--medium-width" name="q1-2" id="q1-2" />
            <p class="cta centre-cta"><a href="#question3" class="btn btn-primary animsition-link" id="q1-2Check">Check</a></p>
            <a href="#question2" id="errorTrigger2"></a>
            </p>
                <ul class="trainer-preview reset-list clearfix">
                    <li id="trainerColour1"><img src="/badge-assets/{{$url['slug']}}/_global/img/trainer-template.png" alt="" /></li>
                    <li id="trainerColour2"><img src="/badge-assets/{{$url['slug']}}/_global/img/trainer-template.png" alt="" /></li>
                </ul>
            </div>
        
        </div><!--/question2-->
        
        <div class="task-reveal" id="question3">
        
            <h2>Tech Habits</h2>
            
            <div class="comment comment--client">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />
                
                <div class="comment-inner">
                    
                    <p>The Boss is worried about how we are going to reach our teenage audience. She’s especially worried that we may not be able to reach pre-teenagers (11 and 12 year olds). There’s been some news stories about kids breaking Social Network rules that you remember hearing about on the BBC website. Open a new web page and search online for "<strong>Kids breaking Social Network rules</strong>". Find out what percentage of 11 and 12 year olds have a social media profile and enter this below.</p>
                    
                </div>
            
            </div>
            
            <div class="task">
            <p>
            <label for="q1-3">What percentage of 11 and 12 year olds have a social media profile</label>
            <input type="text" class="standard-form-control standard-form-control--small-width" name="q1-3" id="q1-3" maxlength="2" />%
            </p>
            
            
            <div class="info-graphic children">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/inforgraphic-children.png" alt="" class="info-bg" />
                <div class="infographic-bar" id="social-bar"></div>
                <img src="/badge-assets/{{$url['slug']}}/_global/img/inforgraphic-children.png" alt="" class="info-fg" />
            </div>
            
            <p class="cta centre-cta"><a href="#question4" class="btn btn-primary" id="q1-3Check">Check</a></p>
             <a href="#question3" id="errorTrigger3"></a>           
            </div>
        
        </div><!--/question3-->
        
        <div class="task-reveal" id="question4">
        
            <h2>Opinions and Quotes</h2>
            
            <div class="comment comment--client">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />
                
                <div class="comment-inner">
                    
                    <p>Fantastic! You’ve also been asked to find a set of celebrities, who endorse current marketing campaigns, so we can think about how they promote their products. The Boss wants you to rank their quotes so we can see how their quotes and messages chime with our planned campaign.</p>
                    
                </div>
            
            </div>
        
            <p>You’ve collected the following quotes by well-known celebrities but you need to decide whether they are suitable or not for the audience.</p>
            
            <div class="task">
            
                <ul class="trainer-quotes reset-list clearfix">
                    <li class="quote-holder"><div class="quote">I've got ten pairs of trainers. That's one for every day of the week. <small>Samantha Fox</small></div>
                        <ul id="quote1">
                            <li><a href="#" class="btn-suitable">Suitable</a></li>
                            <li><a href="#" class="btn-not-suitable">Not Suitable</a></li>
                        </ul>
                    </li>
                    <li class="quote-holder"><div class="quote">The only thing I change mainly is my trainers. I love trainers. <small>Idris Elba</small></div>
                        <ul id="quote2">
                            <li><a href="#" class="btn-suitable">Suitable</a></li>
                            <li><a href="#" class="btn-not-suitable">Not Suitable</a></li>
                        </ul>
                    </li>
                    <li class="quote-holder"><div class="quote">I'm more comfortable in heels than I am in trainers. <small>Shay Mitchell</small></div>
                        <ul id="quote3">
                            <li><a href="#" class="btn-suitable">Suitable</a></li>
                            <li><a href="#" class="btn-not-suitable">Not Suitable</a></li>
                        </ul>
                    </li>
                    <li class="quote-holder"><div class="quote">Trainers are not my thing. <small>Barry Manilow</small></div>
                        <ul id="quote4">
                            <li><a href="#" class="btn-suitable">Suitable</a></li>
                            <li><a href="#" class="btn-not-suitable">Not Suitable</a></li>
                        </ul>
                    </li>
                    <li class="quote-holder"><div class="quote">If there was something that I was going to endorse, it would probably be something like trainers. <small>Justin Timberlake</small></div>
                        <ul id="quote5">
                            <li><a href="#" class="btn-suitable">Suitable</a></li>
                            <li><a href="#" class="btn-not-suitable">Not Suitable</a></li>
                        </ul>
                    </li>
                    <li class="quote-holder"><div class="quote">I'm super into trainers! I'm totally addicted. I'm always looking for the freshest kicks. <small>Dexter Darden</small></div>
                        <ul id="quote6">
                            <li><a href="#" class="btn-suitable">Suitable</a></li>
                            <li><a href="#" class="btn-not-suitable">Not Suitable</a></li>
                        </ul>
                    </li>
                </ul>
                
                <p class="cta centre-cta"><a href="#question5" class="btn btn-primary" id="q1-4Check">Check</a></p>
            
            </div>
        
        </div><!--/question4-->
        
        <div class="task-reveal" id="question5">
        
                <h2>Promotion</h2>
                
                <div class="comment comment--client">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" class="person" />
                    
                    <div class="comment-inner">
                        
                        <p>Finally we need to find a group of bloggers that we are going to approach to promote our viral marketing campaign. The Boss mentioned that she met some people recently who had won the <strong>Business Fashion & Beauty</strong> award at the <strong>UK Blog Awards in 2018</strong>. She can't remember the name of the company though. Can you find this out?  This <a href="https://fashionunited.uk/news/people/most-popular-uk-fashion-blogs/2018060830115" target="_blank">blog post</a> should help.</p>
                        
                    </div>
                
                </div>
        
                
                <div class="task">
                <p>
                <label for="q1-4">Name of the Business Fashion & Beauty Winners</label>
                <input type="text" class="standard-form-control" name="q1-4" id="q1-4" />
                </p>
                
                <p class="cta centre-cta"><a href="#moveon" class="btn btn-primary" id="q1-5Check">Check</a></p>
                
                
                </div>
        
            </div><!--/question4-->
        
        
        
        <div class="lets-move-on" id="moveon">
        
        <p class="correct-message">
        <span class="tick-holder">
        <svg version="1.1" id="svgTick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 44 32.9" enable-background="new 0 0 44 32.9" xml:space="preserve"> <polygon fill="#669966" points="39.8 0 15.4 24.4 4.2 13.3 0 17.5 11.1 28.6 11.1 28.6 15.4 32.9 44 4.2 "/> </svg>
        </span>
        Well done. We're ready for the meeting.
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 2);
            oBadges.redirectIfPreviousStepNotCompleted(1, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-2.js', 'min' => false))</script>

@endsection