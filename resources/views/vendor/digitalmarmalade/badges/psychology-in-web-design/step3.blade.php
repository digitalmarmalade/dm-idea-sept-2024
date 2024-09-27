@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

<main>
    
        

    <div class="progress">
        <ol>
            <li></li>
            <li></li>
            <li class="current"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>
    
    
<div class="holder">
<h1>Typography</h1>

<div class="columns">

<div class="column">
<p>Even something as simple as the font you use can affect the user experience of a visitor to your website.
Let’s see what you think the following typefaces reflect:</p>
</div>
    
<div class="column">
    <div class="engraving-image engraving-image--typewriter">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/typewriter.svg" alt="" />
        <div class="circle"></div> 
        <div class="triangle"></div>
        <div class="squares"><span></span></div>
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>  
</div>
    
</div><!--/columns-->
    
</div><!--holder-->

    <div class="tint-section">
        
        <div class="holder">
            
            <div class="typography-question">
                
                <h2 style="font-family: Georgia, serif;">What would you associate with this typeface? Pick <strong>the word</strong> below that you think best <strong>describes</strong> it.</h2>
                
                <ul class="typography-options">
                    <li>
                    <div class="chart-bar" data-percentage="4">
                    <span class="chart-bar__percentage">0%</span>
                    <span class="chart-bar__bar"></span>
                    </div>
                    <a href="#">Modern</a></li>
                    <li>
                    <div class="chart-bar" data-percentage="60">
                    <span class="chart-bar__percentage">0%</span>
                    <span class="chart-bar__bar"></span>
                    </div>
                    <a href="#">Traditional</a></li>
                    <li>
                    <div class="chart-bar" data-percentage="1">
                    <span class="chart-bar__percentage">0%</span>
                    <span class="chart-bar__bar"></span>
                    </div>
                    <a href="#">Fun</a></li>
                    <li>
                    <div class="chart-bar" data-percentage="35">
                    <span class="chart-bar__percentage">0%</span>
                    <span class="chart-bar__bar"></span>
                    </div>
                    <a href="#">Serious</a></li>
                </ul>
                
                <div class="wrong hide js-disagree">                
                    <span class="question-divider"></span>
                    <div class="answer-content">
                    <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                    <div class="answer-text">
                        <p>Hmmm. You disagree with most people. Most people think this font looks traditional or serious.</p></p>
                    </div>
                    </div>
                </div>
                
                <div class="correct hide js-agree">
                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
                <div class="answer-text">
                    <p>You agree with <span class="js-agree-text">0</span>% of people. Most people think this font looks traditional or serious.</p>
                </div>
                    </div>
                </div>



                
            </div><!--/typography-question-->
            
            <div class="typography-question hide">
                
                <h2 style="font-family: Arial, sans-serif;">What would you associate with this typeface? Pick <strong>the word</strong> below that you think best <strong>describes</strong> it.</h2>
                
                <ul class="typography-options">
                    <li>
                    <div class="chart-bar" data-percentage="89">
                    <span class="chart-bar__percentage">0%</span>
                    <span class="chart-bar__bar"></span>
                    </div>
                    <a href="#">Modern</a></li>
                    <li>
                    <div class="chart-bar" data-percentage="5">
                    <span class="chart-bar__percentage">0%</span>
                    <span class="chart-bar__bar"></span>
                    </div>
                    <a href="#">Traditional</a></li>
                    <li>
                    <div class="chart-bar" data-percentage="1">
                    <span class="chart-bar__percentage">0%</span>
                    <span class="chart-bar__bar"></span>
                    </div>
                    <a href="#">Fun</a></li>
                    <li>
                    <div class="chart-bar" data-percentage="5">
                    <span class="chart-bar__percentage">0%</span>
                    <span class="chart-bar__bar"></span>
                    </div>
                    <a href="#">Serious</a></li>
                </ul>
                
            
                <div class="wrong hide js-disagree">                
                    <span class="question-divider"></span>
                    <div class="answer-content">
                    <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                    <div class="answer-text">
                        <p>Hmmm. You disagree with most people. Most people think this font looks modern.</p></p>
                    </div>
                    </div>
                </div>
                
                <div class="correct hide js-agree">
                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
                <div class="answer-text">
                    <p>You agree with <span class="js-agree-text">0</span>% of people. Most people think this font looks modern.</p>
                </div>
                    </div>
                </div>
                
            </div><!--/typography-question-->
            
        </div>
        
        
        
    </div><!--/tint-section-->
 
    <div class="hide typeface-quiz-holder" id="typefaceQuiz"> 
    
    <div class="holder">
    
        <div class="columns columns--text">
        
            <div class="column">
                <h2>Serif fonts</h2>
                
                <div class="font-demo">
                    <p style="font-family: Georgia, serif;">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz</p>
                </div>
                
                <p>Serif fonts are a typeface where the letters have a small line attached to the end of a stroke in a letter or symbol. Sometimes, serif fonts are referred to as 'Roman' fonts.</p>
                <p>Serif fonts are often seen as indicative of tradition and professionalism. Newspaper websites often use them to convey importance.</p>
            </div>
            
            <div class="column">
                <h2>Sans-serif fonts</h2>
                
                <div class="font-demo">
                    <p style="font-family: Arial, sans-serif;">ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                    abcdefghijklmnopqrstuvwxyz</p>
                </div>
                
                <p>The letters in a san-serif typeface do not have extending features (serifs) at the end of the strokes in a letter or symbol. They are often called Grotesque/Grotesk or Gothic.</p>
                <p>Sans-serif fonts are used to evoke a feeling of modernity. Large technology companies such as Apple and Google use sans-serif fonts to appear on the cutting edge.</p>
            </div>
        
        </div>
        
            <div class="columns columns--text columns--content-right">
        
            <div class="column">
                <div class="font-demo font-demo--sentences">
                    <p style="font-weight: 700; letter-spacing: -.3rem; margin: 0 0 1rem;"><span style="font-size: 120%">Dense and<br>Intimidating Text</span></p>
                    <p style="letter-spacing: .8rem;">Disjointed and flighty text</p>
                </div>    
            </div>
            
            <div class="column">
                <h2>Letter spacing</h2>
                <p>The space between the letters in your content can also have an effect on your visitors’ perception of your website. Too little space and the content can appear dense and intimidating. Too much, and your content can appear disjointed and flighty.</p>
            </div>
        
        </div>    
    
    </div>
    
    
    <div class="tint-section">
    
    <div class="holder">
    <p class="quiz-intro">Based on what you've just learnt, select the most appropriate typefaces for these websites.</p>
    
    <div class="typeface-quiz">
            
            <h3 class="typeface-quiz__title">What sort of typeface would you pick for</h3>
            
            <span class="question-divider"></span>
            
            <p class="typeface-quiz__question">A website for an organic food company?</p>
            
            <ul class="typeface-list">
                <li><a href="#q1Answer" class="serif">A serif font</a></li>
                <li><a href="#q1Answer" class="sans-serif" data-answer="true">A sans-serif font</a></li>
            </ul>
            <div id="q1Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>A sans-serif font is perceived as modern and fresh which reflects the nature of the business.</p>
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
            
        </div><!--/typeface-quiz-->
        
        <div class="typeface-quiz hide">
            
            <h3 class="typeface-quiz__title">What sort of typeface would you pick for</h3>
            
            <span class="question-divider"></span>
            
            <p class="typeface-quiz__question">A newspaper site?</p>
            
            <ul class="typeface-list">
                <li><a href="#q2Answer" class="serif" data-answer="true">A serif font</a></li>
                <li><a href="#q2Answer" class="sans-serif">A sans-serif font</a></li>
            </ul>
            <div id="q2Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>A serif font reflects the gravitas and seriousness of the news.</p>
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
            
        </div><!--/typeface-quiz-->
        
        <div class="typeface-quiz hide">
            
            <h3 class="typeface-quiz__title">What sort of typeface would you pick for</h3>
            
            <span class="question-divider"></span>
            
            <p class="typeface-quiz__question">Medical information?</p>
            
            <ul class="typeface-list">
                <li><a href="#q3Answer" class="serif">A serif font</a></li>
                <li><a href="#q3Answer" class="sans-serif" data-answer="true">A sans-serif font</a></li>
            </ul>
            <div id="q3Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>A sans-serif font reflects modernity and appears more clinical than a serif font.</p>
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
            
        </div><!--/typeface-quiz-->
        
        <div class="typeface-quiz hide">
            
            <h3 class="typeface-quiz__title">What sort of typeface would you pick for</h3>
            
            <span class="question-divider"></span>
            
            <p class="typeface-quiz__question">A magazine aimed at pre-teen/early teen girls?</p>
            
            <ul class="typeface-list">
                <li><a href="#q4Answer" class="serif">A serif font</a></li>
                <li><a href="#q4Answer" class="sans-serif" data-answer="true">A sans-serif font</a></li>
            </ul>
            <div id="q4Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>A sans-serif font reflects the modern and less-serious nature of the target audience.</p>
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
            
        </div><!--/typeface-quiz-->
    
    
    </div><!--/holder-->
    
    
    <div class="success-row hide" id="successRow">    
    <div class="holder holder--success">
        
        
        <div class="squares squares--success1"><span></span></div>
        <div class="squares squares--success2"><span></span></div>
        <div class="success-triangle"><span></span></div>
        <div class="barbell barbell--small"></div>
        
        
        <div class="page-summary" id="agree">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="page-summary__text">
            <p>Well done!</p>
            <p>We’ve looked at colour and we’ve looked at typefaces. Next we’ll look at how image can affect a user’s first impression of your website.</p>
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
    var typographyAnswers = 0;
    $( ".typography-options a" ).on( "click", function(e) {
        var percentage = $(this).closest('li').find('.chart-bar').data('percentage');
        $(this).closest('li').addClass('selected');
        $(this).closest('.typography-options').find('.chart-bar').show();
        console
        if(percentage === 89 || percentage === 60 || percentage === 35) {
            $(this).closest('.typography-question').find('.js-agree').removeClass('hide');
            $(this).closest('.typography-question').find('.js-agree-text').text(percentage);
        } else {
            $(this).closest('.typography-question').find('.js-disagree').removeClass('hide');    
        }
        $(this).closest('.typography-question').addClass('disabled');
        
        $(this).closest('.typography-options').find('.chart-bar__percentage').each(function() {
            var $this = $(this),
              countTo = $(this).closest('li').find('.chart-bar').data('percentage');
            
            $(this).closest('li').find('.chart-bar__bar').css('height',countTo+'px');
            $({ countNum: $this.text()}).animate({
                countNum: countTo
                },

                {
                duration: 1000,
                easing:'linear',
                step: function() {
                  $this.text(Math.floor(this.countNum)+'%');
                },
                complete: function() {
                  $this.text(this.countNum + '%');
                }
            });
        });
        
        typographyAnswers++;
        
        if(typographyAnswers === 2) {
            $('#typefaceQuiz').removeClass('hide');
        } else {
            $(this).closest('.typography-question').next('.typography-question').removeClass('hide');
        }
        
        
        e.preventDefault();
    });
    
    var correctTypefaceQuiz = 0;
    
    $( ".typeface-quiz a" ).on( "click", function(e) {
        if($(this).data('answer')===true) {
            $(this).closest('.typeface-quiz').addClass('disabled');
            $(this).closest('.typeface-quiz').find('.correct').removeClass('hide');
            $(this).closest('.typeface-quiz').find('.wrong').addClass('hide');
            $(this).closest('.typeface-quiz').next('.typeface-quiz').removeClass('hide');
            correctTypefaceQuiz++;
            if(correctTypefaceQuiz === 4) {
                $('#successRow').removeClass('hide');    
            }
            $(this).addClass('selected');
        } else {
            $(this).closest('.typeface-quiz').find('.wrong').removeClass('hide');    
        }        
    });
    
  
  


    
</script>
 
  <script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
  </script>
@endsection