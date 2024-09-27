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
       
        <div class="row">
        <div class="question-column">
        
        
        
        
        
        <div class="progress-holder">
        
        <div class="progress-bar">
        <div class="progress-bar-fill" style="width: 87.5%"></div>
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
                
                <p>We've got two posters for a holiday company to promote their new summer family holidays and couple's getaways.</p>
                <p>They don't like the imagery that we've currently got, so we've commissioned some new photographs. Can you liaise with the photographer, client and creative director to get this signed off and sent to print please?</p>
                <p>Thanks,</p>
                <p>The Boss</p>
                
                <p class="centre-text"><a href="#getStarted" class="btn btn-primary">Get started</a></p>
                
                </div>
            
            </div>  
            </div>      
        
        </div><!--/row-->
        
        <div class="row clearfix" id="getStarted">
        
            <div class="question-column final-task">
        

            <ul class="reset-list the-players">
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" /> The Client</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/the-photographer.png" alt="The Photographer" /> The Photographer</li>
                <li><img src="/badge-assets/{{$url['slug']}}/_global/img/the-creative-director.png" alt="The Creative Director" /> The Creative Director</li>
            </ul>
            
            <h2>The Current Posters</h2>
            
            <div class="row">
                <div class="sm-col-1-2">
                    <div class="poster-content">
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/current-summer.jpg" alt="" class="poster" />
                    </div>
                </div>
                <div class="sm-col-1-2">
                    <div class="poster-content">
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/current-couple.jpg" alt="" class="poster" />
                    </div>
                </div>
            </div>
            
            <div class="comment comment--client">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" />
                
                <div class="comment-inner">
                    <h3>The Client:</h3>
                    <p>The imagery in the current posters doesn't show the holidays we're trying to sell.</p>
                    <p>For the image representing summer holidays image we want a family having fun on holiday. Our villas all have pools so we should probably show this. Let's show four family members so it's clear it's a family holiday.</p>
                </div>
            
            </div>
            
            <div class="comment comment--photographer">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-photographer.png" alt="The Photographer" />
                
                <div class="comment-inner">
                    <h3>The Photographer:</h3>
                    <p>Here are the new photos I've taken for the family holiday poster.</p>
                </div>
            
            </div>
            
            <div class="task" id="task-1-holder">
            <h3>Choose a photo</h3>
            <p>Once you're happy, send the poster preview to the client.</p>
            <ul class="clearfix reset-list available-photos" id="task-1">
                <li><a href="#" data-photo="1"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-1-1.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="2"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-1-2.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="3"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-1-3.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="4"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-1-4.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="5"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-1-5.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="6"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-1-6.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="7"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-1-7.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="8"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-1-8.jpg" alt="" /></a></li>
            </ul>
            
            <h3>Poster Preview</h3>
            
            <div class="poster-preview" id="task-1-preview">
            
            <img src="/badge-assets/{{$url['slug']}}/_global/img/final-task-poster-text-hol-1.png" alt="" />
                        
            </div>
            
            <p><a href="#task1Outcome" class="btn btn-primary" id="task1Submit">Send to Client</a></p>
            
            
            </div><!--/task-->
            
            <div id="task1Outcome">
            
                <div class="comment comment--client task-outcome" id="task1Wrong">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" />
                    
                    <div class="comment-inner">
                        <h3>The Client:</h3>
                        <p>This isn't what we briefed.</p>
                        <p>For the image representing summer holidays image we want a family having fun on holiday. Our villas all have pools so we should probably show this. Let's show four family members so it's clear it's a family holiday.</p>
                        <p><a href="#task-1-holder" class="btn btn-primary" id="task1TryAgain">Try again</a></p>
                    </div>
                
                </div>
                
                <div class="comment comment--client task-outcome" id="task1Right">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" />
                    
                    <div class="comment-inner">
                        <h3>The Client:</h3>
                        <p>Thank you - we'll take a look and get back to you.</p>
                        <p>For the couple's holiday poster, We want a couple strolling in a city. Our holidays are people oriented, so our advertising should show faces.</p>
                    </div>
                
                </div>
            
            </div>
            
            <div id="task2Reveal" class="task-reveal">
            
            <div class="comment comment--photographer">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-photographer.png" alt="The Photographer" />
                
                <div class="comment-inner">
                    <h3>The Photographer:</h3>
                    <p>Here are the new photos I've taken for the couple's getaway poster.</p>
                </div>
            
            </div>
            
            <div class="task invisible" id="task-2-holder">
            <h3>Choose a photo</h3>
            <p>Once you're happy, send the poster preview to the client.</p>
            <ul class="clearfix reset-list available-photos" id="task-2">
                <li><a href="#" data-photo="1"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-2-1.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="2"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-2-2.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="3"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-2-3.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="4"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-2-4.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="5"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-2-5.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="6"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-2-6.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="7"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-2-7.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="8"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-1-8.jpg" alt="" /></a></li>
            </ul>
            
            <h3>Poster Preview</h3>
            
            <div class="poster-preview" id="task-2-preview">
            
            <img src="/badge-assets/{{$url['slug']}}/_global/img/final-task-poster-text-couple-1.png" alt="" />
                        
            </div>
            
            <p><a href="#task2Outcome" class="btn btn-primary" id="task2Submit">Send to Client</a></p>
            
            
            </div><!--/task-->
            
            
            
            </div><!--/task2Reveal-->
            
            <div id="task2Outcome">
            
                <div class="comment comment--client task-outcome" id="task2Wrong">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" />
                    
                    <div class="comment-inner">
                        <h3>The Client:</h3>
                        <p>This isn't what we briefed.</p>
                        <p>For the couple's holiday poster, We want a couple strolling in a city. Our holidays are people oriented, so our advertising should show faces.</p>
                        <p><a href="#task-2-holder" class="btn btn-primary" id="task2TryAgain">Try again</a></p>
                    </div>
                
                </div>
                
                <div class="comment comment--client task-outcome" id="task2Right">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" />
                    
                    <div class="comment-inner">
                        <h3>The Client:</h3>
                        <p>Thanks. Both these posters look good, but we want to make some changes.</p>
                        <p>Let's start with the family poster. We want something a bit more natural, like we can see the family, but we're not with them. We want to show the family together on the beach during the day - we must be able to see their faces, so we have that connection with the viewer.</p>
                    </div>
                
                </div>
            
            </div><!--task2Outcome-->
            
            
            
            <div class="email task-reveal" id="task2Email">
            <h2>Brief the Photographer</h2>
            
            <p>Hi Jenny the Photographer</p>
            <p>The client wants to reshoot the family holiday images.</p>
            <p>We need the photos to look natural, so they <select class="standard-form-control" id="task2EmailA1"><option value="0">Pick One</option><option value="1">should</option><option value="2">should not</option></select> be looking at the camera.</p>
            <p>We need to be <select class="standard-form-control" id="task2EmailA2"><option value="0">Pick One</option><option value="1">in front of</option><option value="2">behind</option></select> them, so we can see their faces and the photograph should be taken <select class="standard-form-control" id="task2EmailA3"><option value="0">Pick One</option><option value="1">during the day</option><option value="2">at dusk</option><option value="3">at night</option></select>.</p>
            <p>Thanks,</p>
            <p>YOU</p>
            
            <p><a href="#task2EmailOutcome" class="btn btn-primary" id="task2EmailSubmit">Send Email</a></p>
            
            </div>
            
            <div id="task2EmailOutcome" class="task-reveal">
            
            <div class="comment comment--photographer">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-photographer.png" alt="The Photographer" />
                
                <div class="comment-inner">
                    <h3>The Photographer:</h3>
                    <p>Are you sure that's what the client wants?</p>
                    <p><a href="#task2Right" class="btn btn-primary" id="task2EmailTryAgain">Try again</a></p>
                </div>
            
            </div>
            
            
            </div>
            
            
            <div id="task3Reveal" class="task-reveal">
            
            <div class="comment comment--photographer">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-photographer.png" alt="The Photographer" />
                
                <div class="comment-inner">
                    <h3>The Photographer:</h3>
                    <p>Here are the the photos from the beach shoot.</p>
                </div>
            
            </div>
            
            <div class="task invisible" id="task-3-holder">
            <h3>Choose a photo</h3>
            <p>Once you're happy, send the poster preview to the client.</p>
            <ul class="clearfix reset-list available-photos" id="task-3">
                <li><a href="#" data-photo="1"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-2-1.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="2"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-2-2.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="3"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-2-3.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="4"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-2-4.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="5"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-2-5.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="6"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-2-6.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="7"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-2-7.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="8"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/hols-1-4.jpg" alt="" /></a></li>
            </ul>
            
            <h3>Poster Preview</h3>
            
            <div class="poster-preview" id="task-3-preview">
            
            <img src="/badge-assets/{{$url['slug']}}/_global/img/final-task-poster-text-hol-2.png" alt="" />
                        
            </div>
            
            <p><a href="#task3Outcome" class="btn btn-primary" id="task3Submit">Send to Client</a></p>
            
            
            </div><!--/task3Reveal-->
            
            <div id="task3Outcome">
            
                <div class="comment comment--client task-outcome" id="task3Wrong">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" />
                    
                    <div class="comment-inner">
                        <h3>The Client:</h3>
                        <p>This isn't what we briefed.</p>
                        <p>We want something a bit more natural, like we can see the family, but we're not with them. We want to show the family together on the beach during the day - we must to be able to see their faces, so we have that connection with the viewer.</p>
                        <p><a href="#task-3-holder" class="btn btn-primary" id="task3TryAgain">Try again</a></p>
                    </div>
                
                </div>
                
                <div class="comment comment--client task-outcome" id="task3Right">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" />
                    
                    <div class="comment-inner">
                        <h3>The Client:</h3>
                        <p>That's great - the image is spot on, we're happy to sign this off. </p>
                        <p>For the couple's poster, we want to make the image more intimate. We still want the couple in a city, and we want to see their faces. They should be having fun doing some kind of activity.</p>
                    </div>
                    
                
                </div>
            
            </div><!--task3Outcome-->
            
            </div><!--/task3reveal-->
            
            <div class="email task-reveal" id="task3Email">
            <h2>Brief the Photographer</h2>
            
            <p>Hi Jenny the Photographer</p>
            <p>Changes for the couple's photograph.</p>
            <p>We want the photos to be more intimate, so can you be <select class="standard-form-control" id="task3EmailA1"><option value="0">Pick One</option><option value="1">closer to</option><option value="2">further from</option></select> the subject.</p>
            <p>We need to be able to see the <select class="standard-form-control" id="task3EmailA2"><option value="0">Pick One</option><option value="1">beach</option><option value="2">city</option><option value="3">countryside</option></select> behind them, and their faces.</p>
            <p>Thanks,</p>
            <p>YOU</p>
            
            <p><a href="#task3EmailOutcome" class="btn btn-primary" id="task3EmailSubmit">Send Email</a></p>
            
            </div>
            
            <div id="task3EmailOutcome" class="task-reveal">
            
            <div class="comment comment--photographer">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-photographer.png" alt="The Photographer" />
                
                <div class="comment-inner">
                    <h3>The Photographer:</h3>
                    <p>Are you sure that's what the client wants?</p>
                    <p><a href="#task3Right" class="btn btn-primary" id="task3EmailTryAgain">Try again</a></p>
                </div>
            
            </div>
            
            
            </div>
            
            
            
            
            <div id="task4Reveal" class="task-reveal">
            
            <div class="comment comment--photographer">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-photographer.png" alt="The Photographer" />
                
                <div class="comment-inner">
                    <h3>The Photographer:</h3>
                    <p>Here are the new photos I've taken for the couple's getaway poster.</p>
                </div>
            
            </div>
            
            <div class="task invisible" id="task-4-holder">
            <h3>Choose a photo</h3>
            <p>Once you're happy, send the poster preview to the client.</p>
            <ul class="clearfix reset-list available-photos" id="task-4">
                <li><a href="#" data-photo="1"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-1-1.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="2"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-1-2.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="3"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-1-3.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="4"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-1-4.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="5"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-1-5.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="6"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-1-6.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="7"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-1-7.jpg" alt="" /></a></li>
                <li><a href="#" data-photo="8"><img src="/badge-assets/{{$url['slug']}}/_global/img/final/couple-1-8.jpg" alt="" /></a></li>
            </ul>
            
            <h3>Poster Preview</h3>
            
            <div class="poster-preview" id="task-4-preview">
            
            <img src="/badge-assets/{{$url['slug']}}/_global/img/final-task-poster-text-couple-1.png" alt="" />
                        
            </div>
            
            <p><a href="#task4Outcome" class="btn btn-primary" id="task4Submit">Send to Client</a></p>
            
            
            </div><!--/task-->
            
            
            
            </div><!--/task4Reveal-->
            
            <div id="task4Outcome">
            
                <div class="comment comment--client task-outcome" id="task4Wrong">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" />
                    
                    <div class="comment-inner">
                        <h3>The Client:</h3>
                        <p>This isn't what we briefed.</p>
                        <p>We want to make the image more intimate. We still want the couple in a city, and we want to see their faces. They should be having fun doing some kind of activity.</p>
                        <p><a href="#task-4-holder" class="btn btn-primary" id="task4TryAgain">Try again</a></p>
                    </div>
                
                </div>
                
                <div class="comment comment--client task-outcome" id="task4Right">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-client.png" alt="The Client" />
                    
                    <div class="comment-inner">
                        <h3>The Client:</h3>
                        <p>Brilliant. This image is signed off as well. Thanks for your work on this.</p>
                    </div>
                
                </div>
            
            </div><!--task4Outcome-->
            
            <div id="task5Reveal" class="task-reveal">
            
            <div class="comment comment--creative-director">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/the-creative-director.png" alt="The Creative Director" />
                
                <div class="comment-inner">
                    <h3>The Creative Director:</h3>
                    <p>Well done on getting those images signed off.</p>
                    <p>I'm happy with the couple's poster. There's just a couple of tweaks to the family holidays poster that I think would improve it.</p>
                    <p>Firstly, the image is a bit washed out. Let's make it a bit more cheerful and holiday like.</p>
                </div>
            
            </div>
            
            <div class="task invisible" id="task-5-holder">
            <h3>Treat the image</h3>
            <ul class="treat-image-options reset-list">
                <li><a href="#" id="reduceContrast">Reduce</a></li>
                <li>Contrast</li>
                <li><a href="#" id="increaseContrast">Increase</a></li>
            </ul>
            
            
            
            <div class="poster-preview" id="task-5-preview">
            <div class="treat-image"> 
            <img src="/badge-assets/{{$url['slug']}}/_global/img/final/final-hol-image.jpg" alt="" class="image-to-be-treated" id="treatImage" />
            <img src="/badge-assets/{{$url['slug']}}/_global/img/final-task-poster-text-hol-2.png" alt="" class="treat-image-text" />
            </div>                        
            </div>
            
            <p><a href="#task5Outcome" class="btn btn-primary" id="task5Submit">Send to Creative Director</a></p>
            
            
            </div><!--/task-->
            
            
            
            </div><!--/task5Reveal-->
            
            <div id="task5Outcome">
            
                <div class="comment comment--creative-director task-outcome" id="task5Wrong">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-creative-director.png" alt="The Creative Director" />
                    
                    <div class="comment-inner">
                        <h3>The Creative Director:</h3>
                        <p>Not quite. Let's really brighten the thing up.</p>
                        <p><a href="#task-5-holder" class="btn btn-primary" id="task5TryAgain">Try again</a></p>
                    </div>
                
                </div>
                
                <div class="comment comment--creative-director task-outcome" id="task5Right">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-creative-director.png" alt="The Creative Director" />
                    
                    <div class="comment-inner">
                        <h3>The Creative Director:</h3>
                        <p>Superb - much better.</p>
                        <p>One last thing - the logo is a bit lost at the moment. Maybe, we can find another place for it, perhaps there's a secondary focal point we can use.  Remember about 'leading lines' and the gaze of the subjects.</p>
                    </div>
                    
                
                </div>
            
            </div><!--task5Outcome-->
            
            <div id="task6Reveal" class="task-reveal">
            
            <div class="task invisible" id="task-6-holder">
            <h3>Click where the logo should sit</h3>
              
            <div class="poster-preview" id="task-6-preview">
            <div class="treat-image"> 
            <img src="/badge-assets/{{$url['slug']}}/_global/img/final/final-hol-image.jpg" alt="" class="final-hol-image" />
            <img src="/badge-assets/{{$url['slug']}}/_global/img/final-task-poster-text-hol-3.png" alt="" class="treat-image-text" />
            <img src="/badge-assets/{{$url['slug']}}/_global/img/logo-blank.png" alt="" class="logo-image" id="logoImage" />
                <a href="#" class="hover-area hover--area-tl" id="logoTL"></a>
                <a href="#" class="hover-area hover--area-tr" id="logoTR"></a>
                <a href="#" class="hover-area hover--area-bl" id="logoBL"></a>
                <a href="#" class="hover-area hover--area-br" id="logoBR"></a>
            </div>                        
            </div>
            
            <p><a href="#task6Outcome" class="btn btn-primary" id="task6Submit">Send to Creative Director</a></p>
            
            
            </div><!--/task-->
            
            
            
            </div><!--/task6Reveal-->
            
            <div id="task6Outcome">
            
                <div class="comment comment--creative-director task-outcome" id="task6Wrong">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-creative-director.png" alt="The Creative Director" />
                    
                    <div class="comment-inner">
                        <h3>The Creative Director:</h3>
                        <p>No. I don't think that works.</p>
                        <p><a href="#task-6-holder" class="btn btn-primary" id="task6TryAgain">Try again</a></p>
                    </div>
                
                </div>
                
                <div class="comment comment--creative-director task-outcome" id="task6Right">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/the-creative-director.png" alt="The Creative Director" />
                    
                    <div class="comment-inner">
                        <h3>The Creative Director:</h3>
                        <p>Lovely stuff - good work.</p>
                        <p>Let's get these posters off to the printer.</p>
                        <p class="centre-cta"><a href="{{$links['next']}}" class="btn btn-primary jsBtnNext">Send to print</a></p>
                    </div>
                    
                
                </div>
            
            </div><!--task6Outcome-->
            

        
        </div><!--/row-->
        
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
            oBadges.setSlugAndStep('{{$url['slug']}}', 5);
            oBadges.redirectIfPreviousStepNotCompleted(4, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-5.js', 'min' => false))</script>

@endsection