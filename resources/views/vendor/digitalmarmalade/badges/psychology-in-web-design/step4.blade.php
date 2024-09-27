@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

<main>
    
  

    <div class="progress">
        <ol>
            <li></li>
            <li></li>
            <li></li>
            <li class="current"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>
    
    
<div class="holder">
<h1>The use of imagery</h1>

<div class="columns">

<div class="column">
<p>'A picture is worth a thousand words' and nowhere is this truer than when a visitor arrives at your website.</p>

<p>The images you use on your site can either help or hinder visitors. A well-chosen image can put your visitor at ease, reinforcing your values and making your intent clear. A poorly chosen one can leave them nonplussed and confused, which increases the chances of them leaving your site.</p>

</div>
    
<div class="column">
    <div class="engraving-image engraving-image--camera">
        <img src="/badge-assets/{{$url['slug']}}/img/step-4/camera.svg" alt="" />
        <div class="circle"></div> 
    
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>  
</div>
    
</div><!--/columns-->
   
<div class="columns columns--content-right">

<div class="column">
    <div class="engraving-image engraving-image--castle">
        <img src="/badge-assets/{{$url['slug']}}/img/step-4/castle.svg" alt="" />
        <div class="circle"></div> 
    

    </div>  
</div>

<div class="column">

<p>A group of professionals shaking hands over clipboards, for example, may evoke professionalism and competence while cartoon images may convey youth and humour. Imagery should always support the message of the page - anything that distracts from or conflicts with the purpose of the page provides an additional barrier to the visitor achieving your goal.</p>

</div>
    

    
</div><!--/columns-->
    
</div><!--holder-->

    <div class="tint-section">
        
        <div class="holder">
            
            <div class="image-quiz">
            
            <h3 class="image-quiz__title">What image would you pick for</h3>
            
            <span class="question-divider"></span>
            
            <p class="image-quiz__question">A magazine website aimed at pre-teen/early teen girls?</p>
            
            <ul class="image-list">
                <li><a href="#q1Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q1a.jpg"></a></li>
                <li><a href="#q1Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q1b.jpg"></a></li>
                <li><a href="#q1Answer" data-answer="true"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q1c.jpg"></a></li>
            </ul>
            <div id="q1Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">
                
                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>
            
        </div><!--/image-quiz-->
           
           <div class="image-quiz hide">
            
            <h3 class="image-quiz__title">What image would you pick for</h3>
            
            <span class="question-divider"></span>
            
            <p class="image-quiz__question">A luxury, expensive boutique hotel?</p>
            
            <ul class="image-list">
                <li><a href="#q2Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q3a.jpg"></a></li>
                <li><a href="#q2Answer" data-answer="true"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q2b.jpg"></a></li>
                <li><a href="#q2Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q2c.jpg"></a></li>
            </ul>
            <div id="q2Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">
                
                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>
            
        </div><!--/image-quiz-->
            
            
            <div class="image-quiz hide">
            
            <h3 class="image-quiz__title">What image would you pick for</h3>
            
            <span class="question-divider"></span>
            
            <p class="image-quiz__question">A price slashing auction website?</p>
            
            <ul class="image-list">
                <li><a href="#q3Answer" data-answer="true"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q3a.jpg"></a></li>
                <li><a href="#q3Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q3b.jpg"></a></li>
                <li><a href="#q3Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q3c.jpg"></a></li>
            </ul>
            <div id="q3Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">
                
                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>
            
        </div><!--/image-quiz-->
            
            
            <div class="image-quiz hide">
            
            <h3 class="image-quiz__title">What image would you pick for</h3>
            
            <span class="question-divider"></span>
            
            <p class="image-quiz__question">A website promoting a sophisticated new bit of cutting edge technology?</p>
            
            <ul class="image-list">
                <li><a href="#q4Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q4a.jpg"></a></li>
                <li><a href="#q4Answer" data-answer="true"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q4b.jpg"></a></li>
                <li><a href="#q4Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q4c.jpg"></a></li>
            </ul>
            <div id="q4Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">
                
                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>
            
        </div><!--/image-quiz-->
            
            
            <div class="image-quiz hide">
            
            <h3 class="image-quiz__title">What image would you pick for</h3>
            
            <span class="question-divider"></span>
            
            <p class="image-quiz__question">A website for a long-established firm of corporate lawyers?</p>
            
            <ul class="image-list">
                <li><a href="#q5Answer" data-answer="true"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q5a.jpg"></a></li>
                <li><a href="#q5Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q5b.jpg"></a></li>
                <li><a href="#q5Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q5c.jpg"></a></li>
            </ul>
            <div id="q5Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">
                
                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>
            
        </div><!--/image-quiz-->
            
            
            <div class="image-quiz hide">
            
            <h3 class="image-quiz__title">What image would you pick for</h3>
            
            <span class="question-divider"></span>
            
            <p class="image-quiz__question">A website for an organic food company?</p>
            
            <ul class="image-list">
                <li><a href="#q6Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q6a.jpg"></a></li>
                <li><a href="#q6Answer"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q6b.jpg"></a></li>
                <li><a href="#q6Answer" data-answer="true"><img src="/badge-assets/{{$url['slug']}}/img/step-4/q6c.jpg"></a></li>
            </ul>
            <div id="q6Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">
                
                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>
            
        </div><!--/image-quiz-->
            
            
           
            
        </div>
        
        
        
    </div><!--/tint-section-->
    
   <div class="hide" id="gaze"> 
    <div class="holder">
    
        <div class="centre-text">
        <p>Look at the image below taken from a study by James Breeze using a Tobii Pro eye tracker. This is an eye-tracking heat map. The coloured areas on the page highlight where a user has looked, with the red areas being the most looked at.</p> 
        </div>
        
        <img src="/badge-assets/{{$url['slug']}}/img/step-4/baby1.jpg" alt="Heatmap of website with baby looking right at camera" class="full-width-image" />
        
        <div class="centre-text">
        <p>You can see that the baby’s face is the most looked at area of the page.</p>
        <p>People instinctively notice other people and tend to focus on people’s faces and eyes, which is a good way of attracting attention.</p>
        <p>Look at the next image below.</p>
        </div>
        
        <img src="/badge-assets/{{$url['slug']}}/img/step-4/baby2.jpg" alt="Heatmap of website with baby looking at headline of page" class="full-width-image" />
        
        <div class="centre-text">
        <p>You can see that again, the baby’s face has a red area, but in addition the content that the baby is looking at also has red areas meaning it is also a heavily looked at part of the page. People look at faces but they also instinctively follow the direction the person in the image is looking in. This can be a useful tool in directing your visitors’ attention to the most important parts of your page.</p>
        </div>
   
    
    
    </div>
    
    <div class="tint-section">
    
    
    <div class="success-row" id="successRow">    
    <div class="holder holder--success">
        
        
        <div class="squares squares--success1"><span></span></div>
        <div class="squares squares--success2"><span></span></div>
        <div class="success-triangle"><span></span></div>
        <div class="barbell barbell--small"></div>
        
        
        <div class="page-summary" id="agree">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="page-summary__text">
            <p>Well done!</p>
            <p>So, your user has formed their first impression of the site; you’ve successfully reassured them that your site is safe and that they are in the right place.</p>
            <p>Now you need to do everything you can to achieve the goals of your website or page, which hopefully mirror the needs of the visitor.</p>

                <p><a href="{{$links['next']}}" onclick="oBadges.stepCompleted();" class="btn">Next Step</a></p>
            </div>
        </div>
        
        
    </div>
    
    </div>
    
    
    </div><!--/tint-section-->
 
   
   </div>


</main>

@endsection

@section('javascript')
<script>
    var correctTypefaceQuiz = 0;
    
    $( ".image-quiz a" ).on( "click", function(e) {
        if($(this).data('answer')===true) {
            $(this).closest('.image-quiz').addClass('disabled');
            $(this).closest('.image-quiz').find('.correct').removeClass('hide');
            $(this).closest('.image-quiz').find('.wrong').addClass('hide');
            $(this).closest('.image-quiz').next('.image-quiz').removeClass('hide');
            correctTypefaceQuiz++;
            if(correctTypefaceQuiz === 6) {
                $('#gaze').removeClass('hide');    
            }
            $(this).addClass('selected');
        } else {
            $(this).closest('.image-quiz').find('.wrong').removeClass('hide');    
        }        
    });
    
  
  


    
</script>
 
  <script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
  </script>
@endsection