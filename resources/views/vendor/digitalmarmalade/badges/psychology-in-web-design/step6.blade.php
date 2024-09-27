@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

<main>
    
        

    <div class="progress">
        <ol>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li class="current"></li>
            <li></li>
            <li></li>
        </ol>
    </div>
    
    
<div class="holder">
<h1>Presenting content</h1>

<div class="columns">

<div class="column">
<p>There are several layout patterns that are recommended to take advantage of how people scan or read through a design. The most common are:</p>
<ul class="important-questions">
        <li class="left">The Gutenberg diagram</li>
        <li class="centre">The Z-Pattern</li>
        <li class="left">The F-Pattern</li>
        <li class="right">The Pattern of Focal Points</li>
    </ul>
</div>
    
<div class="column">
    <div class="engraving-image engraving-image--microscope">
        <img src="/badge-assets/{{$url['slug']}}/img/step-6/microscope.svg" alt="" />
        <div class="circle"></div> 
    
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
            
         <h2>The Gutenberg Diagram</h2>
           
           <div class="full-width-image">
              <img src="/badge-assets/{{$url['slug']}}/img/step-6/gutenberg.png" alt="The Gutenberg diagram" /> 
            </div>
            
        <div class="columns columns--text">
        
            <div class="column">
                <p>The Gutenberg diagram describes a general pattern the eyes move through when looking at evenly distributed, homogenous information.</p>
                <p>As such, it applies to text-heavy content, like pages in a novel or a newspaper, not every possible design.</p>
                <p>For languages that read left to right, the Gutenberg Diagram suggests that the strongest area of the page is the top left, and the weakest in the bottom left.</p>
                <p>This is due to the eye sweeping across and down the page in a series of horizontal movements called axes of orientation. Each sweep starts a little further from the left edge and moves a little closer to the right edge.</p>
                <p>For languages that read right to left, this is flipped, with the strongest area top right and the weakest bottom right.</p>
                <p>The overall movement is for the eye to travel from the primary area to the terminal area and this path is referred to as reading gravity.</p> 
            </div>
            <div class="column">
                <p>The Gutenberg diagram suggests that important elements should be placed along the reading gravity path. For example, placing a logo or headline in the top left, an image or some important content in the middle, and a call-to-action or contact information in the bottom right.</p>
                <p>Designs that follow Gutenberg are said to be in ‘harmony’ with natural reading gravity.</p>
                <p>As mentioned, this applies to dense content, which has a fairly flat visual hierarchy. As a visual hierarchy is established through using things such as colour and size, the Gutenberg diagram becomes less relevant.</p>
            </div>  
              
        </div>    
           
            
        </div>
        
        
        
    </div><!--/tint-section-->
    
    <div class="holder text-and-diagrams">
    
    <h2>The Z-Pattern Layout</h2>
    
    <div class="full-width-image full-width-image--with-padding">
              <img src="/badge-assets/{{$url['slug']}}/img/step-6/z-pattern.png" alt="The Z-Pattern Layout diagram" /> 
    </div>
    
    <div class="columns columns--text">
        
            <div class="column">
               <p>The Z-Pattern, as the name suggests, follows the shape of the letter Z.</p>
                <p>Readers will start in the top left, move horizontally to the top right and then diagonally to the bottom left before finishing with another horizontal movement to the bottom right.</p> 
            </div>
            <div class="column">
                
                <p>To follow this pattern, a designer would place the most important elements on the path.</p>
                <p>Generally, the Z-Pattern is good for simple designs with a few key elements that need to be seen.</p>
            </div>  
              
        </div>
    
    
    
    
    
    <h3>The Zig-Zag Pattern</h3>
    <p>The Z-Pattern can be extended down a page to what is known as a Zig-Zag pattern:</p>
    
    <div class="full-width-image full-width-image--with-padding">
              <img src="/badge-assets/{{$url['slug']}}/img/step-6/zig-zag-pattern.png" alt="The Zig-Zag Pattern Layout diagram" /> 
    </div>
    
    <p>As a user scrolls down a page, the Z-Pattern gets repeated as new content appears. This is how we naturally read large blocks of text.</p>
    
    <h3>The Golden Triangle Pattern</h3>
    <p>There is one other variation to the Z-Pattern which is relevant.</p>
    
    <div class="full-width-image">
              <img src="/badge-assets/{{$url['slug']}}/img/step-6/golden-triangle-pattern.png" alt="The Golden Triangle Pattern diagram" /> 
    </div>
    
    <div class="columns columns--text">
        
            <div class="column">
                <p>This is the Golden Triangle Pattern. This has no second horizontal movement, so point 4 has much less importance.</p>
            </div>
            <div class="column">
                <p>The triangular area at the top of the page will be the area most seen and the pattern suggests that your most important information needs to be placed inside it.</p>
            </div>  
              
    </div>
    
    <h3>When should you use the Z-Pattern?</h3>
    
    <p>The Z-Pattern is best used for simple designs with minimal copy and a few key elements that need to be seen.</p>
    
    <div class="full-width-image full-width-image--with-padding">
              <img src="/badge-assets/{{$url['slug']}}/img/step-6/z-pattern-demo.png" alt="The Z-Pattern diagram" /> 
    </div>
    
   </div>
   
   <div class="tint-section">
   
       <div class="holder">
   
       <h2>The F-Pattern</h2>
       
       <div class="full-width-image full-width-image--with-padding">
              <img src="/badge-assets/{{$url['slug']}}/img/step-6/f-pattern.png" alt="The F-Pattern diagram" /> 
    </div>
   
       <div class="columns columns--text">
        
            <div class="column">
                <p>As with the other patterns the eye starts in the top left, moves horizontally to the top right and then comes back to the left edge before making another horizontal sweep to the right. This second sweep won’t extend as far as the first sweep.</p>
                <p>Additional sweeps move less and less to the right and for the most part after the second major sweep the eye sticks to the left edge as it moves down.</p>
            </div>
            <div class="column">
                
                <p>This suggests that important information should be placed across the top of the design where it will generally be read.</p>
                <p>Lesser information should be placed along the left edge of the design often in bullet points where little horizontal movement is required to take everything in.</p>
                <p>It also works on the principle that people don’t read online, they scan.</p>

            </div>  
              
        </div>
        
        <div class="full-width-image full-width-image--with-padding">
              <img src="/badge-assets/{{$url['slug']}}/img/step-6/f-pattern-demo.png" alt="The F-Pattern example" /> 
    </div>
        
        <div class="columns columns--text">
        
            <div class="column">
                <p>A downside to the F-Pattern is that layouts can quickly become repetitive and lose visual interest.</p>
            </div>
            <div class="column">
                
                <p>In these cases you should aim to break the expectations of the user through the use of an ‘awkward’ element that breaks the visual repetition.</p>

            </div>  
              
        </div>
        
        <div class="full-width-image full-width-image--with-padding">
              <img src="/badge-assets/{{$url['slug']}}/img/step-6/f-pattern-awkward.png" alt="The F-Pattern example with an awkward element" /> 
    </div>
        
        <div class="columns columns--text">
        
            <div class="column">
                <p>An important thing to remember with the F-Pattern is that most of the eye-tracking evidence supporting it was gathered on tests on search result pages, or on listing pages.</p>
            </div>
            <div class="column">
                
                <p>Another thing to remember is that the F-Pattern possibly only applies to a visitor’s initial scan of the page. If something attracts their attention, they will read as evidenced by these heat maps:</p>

            </div>  
              
        </div>
        
        <div class="full-width-image full-width-image--with-padding">
              <img src="/badge-assets/{{$url['slug']}}/img/step-6/f_reading_pattern_eyetracking.jpg" alt="The F-Pattern example with an awkward element" /> 
    </div>
        
        <h3>When should you use the F-Pattern?</h3>
        
        <p>The F-Pattern can be seen on many of the news websites. It’s perfect for text heavy blogs and news sites. If there’s a lot of content, users will respond better when they are able to scan the content easily.</p>
        
        </div>
   
   
   </div><!--/tint-section-->
   
   <div class="holder text-and-diagrams">
       
       <h2>Pattern of Focal Points</h2>
       
       <div class="columns columns--text">
        
            <div class="column">
               
                <p>While the previous patterns describe common viewing patterns of visitors to websites, it is worth remembering that establishing a visual hierarchy in a page can break the eye out of these patterns.</p>
                <p>For example, on a page that is nothing but a headline and button in the centre of the screen, a visitor is unlikely to follow any of the above patterns beyond a glance at the top left. This is called using a focal point, and is not so much a pattern as a design principle.</p>

            </div>
            <div class="column">
                
                <p>The Focal Point ‘pattern’ suggests that the user will look at the most dominant element in the page first. This is the element or area with the greatest visual weight.</p>
                <p>From there the eye will follow paths from the dominant element to other focal points in the design. The order will depend on the relative weights of these focal points as well as any visual cues indicating where to look next.</p>

            </div>  
              
        </div>
        
        <p>Remember this picture?</p>
        
        <img src="/badge-assets/{{$url['slug']}}/img/step-4/baby2.jpg" alt="Heatmap of website with baby looking at headline of page" class="full-width-image" />
        
        <p>The focal point of this page is the baby’s face. The direction of the baby’s gaze gives a visual cue to the next focal point - the title of the page.</p>
        <p>Another example of this, is this painting by Mondrian:</p>
        
        <img src="/badge-assets/{{$url['slug']}}/img/step-6/mondrian.png" alt="" class="full-width-image" />        
        
        <p>Different people may be initially drawn to different parts of the painting, but the lines within the composition lead the eye to other elements. It is highly unlikely that anyone looking at this follows the F-Pattern, Z-Pattern or Gutenberg diagram.</p>

   
   
   
   
   </div><!--/holder-->
   
   
   <div class="tint-section">
   
       <div class="holder">
   
       <p class="quiz-intro">Based on what you’ve just learnt, identify the visual pattern used in these websites.</p>
       
       <div class="layout-quiz">
            
            <img src="/badge-assets/{{$url['slug']}}/img/step-6/basecamp.png" alt="" class="layout-image" data-right="basecamp-right.png" />
            
            <ul class="layout-list">
                <li><a href="#q1Answer">Gutenberg Diagram</a></li>
                <li><a href="#q1Answer" data-answer="true">Z-Pattern</a></li>
                <li><a href="#q1Answer">Zig-Zag Pattern</a></li>
                <li><a href="#q1Answer">Golden Triangle Pattern</a></li>
                <li><a href="#q1Answer">F-Pattern</a></li>
                <li><a href="#q1Answer">Focal Point Pattern</a></li>
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
            
        </div><!--/layout-quiz-->
        
        <div class="layout-quiz hide">
            
            <img src="/badge-assets/{{$url['slug']}}/img/step-6/f-pattern-screenshot.png" alt="" class="layout-image"  data-right="f-pattern-screenshot-right.png" />
            
            <ul class="layout-list">
                <li><a href="#q2Answer">Gutenberg Diagram</a></li>
                <li><a href="#q2Answer">Z-Pattern</a></li>
                <li><a href="#q2Answer">Zig-Zag Pattern</a></li>
                <li><a href="#q2Answer">Golden Triangle Pattern</a></li>
                <li><a href="#q2Answer" data-answer="true">F-Pattern</a></li>
                <li><a href="#q2Answer">Focal Point Pattern</a></li>
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
            
        </div><!--/layout-quiz-->
        
        <div class="layout-quiz hide">
            
            <img src="/badge-assets/{{$url['slug']}}/img/step-6/facebook.png" alt="" class="layout-image" data-right="facebook-right.png" />
            
            <ul class="layout-list">
                <li><a href="#q3Answer" data-answer="true">Gutenberg Diagram</a></li>
                <li><a href="#q3Answer">Z-Pattern</a></li>
                <li><a href="#q3Answer">Zig-Zag Pattern</a></li>
                <li><a href="#q3Answer">Golden Triangle Pattern</a></li>
                <li><a href="#q3Answer">F-Pattern</a></li>
                <li><a href="#q3Answer">Focal Point Pattern</a></li>
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
            
        </div><!--/layout-quiz-->
        
        <div class="layout-quiz hide">
            
            <img src="/badge-assets/{{$url['slug']}}/img/step-6/easyjet2.png" alt="" class="layout-image" data-right="easyjet2-right.png" />
            
            <ul class="layout-list">
                <li><a href="#q4Answer">Gutenberg Diagram</a></li>
                <li><a href="#q4Answer">Z-Pattern</a></li>
                <li><a href="#q4Answer">Zig-Zag Pattern</a></li>
                <li><a href="#q4Answer" data-answer="true">Golden Triangle Pattern</a></li>
                <li><a href="#q4Answer">F-Pattern</a></li>
                <li><a href="#q4Answer">Focal Point Pattern</a></li>
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
            
        </div><!--/layout-quiz-->
        
        <div class="layout-quiz hide">
            
            <img src="/badge-assets/{{$url['slug']}}/img/step-6/johnlewis.png" alt="" class="layout-image" data-right="johnlewis-right.png" />
            
            <ul class="layout-list">
                <li><a href="#q5Answer">Gutenberg Diagram</a></li>
                <li><a href="#q5Answer">Z-Pattern</a></li>
                <li><a href="#q5Answer" data-answer="true">Zig-Zag Pattern</a></li>
                <li><a href="#q5Answer">Golden Triangle Pattern</a></li>
                <li><a href="#q5Answer">F-Pattern</a></li>
                <li><a href="#q5Answer">Focal Point Pattern</a></li>
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
            
        </div><!--/layout-quiz-->
        
        <div class="layout-quiz hide">
            
            <img src="/badge-assets/{{$url['slug']}}/img/step-6/googlewear.png" alt="" class="layout-image" data-right="googlewear-right.png" />
            
            <ul class="layout-list">
                <li><a href="#q6Answer">Gutenberg Diagram</a></li>
                <li><a href="#q6Answer">Z-Pattern</a></li>
                <li><a href="#q6Answer">Zig-Zag Pattern</a></li>
                <li><a href="#q6Answer">Golden Triangle Pattern</a></li>
                <li><a href="#q6Answer">F-Pattern</a></li>
                <li><a href="#q6Answer" data-answer="true">Focal Point Pattern</a></li>
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
            
        </div><!--/layout-quiz-->
        
        <div class="layout-quiz hide">
            
            <img src="/badge-assets/{{$url['slug']}}/img/step-6/figma.png" alt="" class="layout-image" data-right="figma-right.png" />
            
            <ul class="layout-list">
                <li><a href="#q7Answer">Gutenberg Diagram</a></li>
                <li><a href="#q7Answer">Z-Pattern</a></li>
                <li><a href="#q7Answer">Zig-Zag Pattern</a></li>
                <li><a href="#q7Answer" data-answer="true">Golden Triangle Pattern</a></li>
                <li><a href="#q7Answer">F-Pattern</a></li>
                <li><a href="#q7Answer">Focal Point Pattern</a></li>
            </ul>
            <div id="q7Answer"></div>
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
            
        </div><!--/layout-quiz-->
        
        <div class="layout-quiz hide">
            
            <img src="/badge-assets/{{$url['slug']}}/img/step-6/dropbox.png" alt="" class="layout-image" data-right="dropbox-right.png" />
            
            <ul class="layout-list">
                <li><a href="#q8Answer">Gutenberg Diagram</a></li>
                <li><a href="#q8Answer" data-answer="true">Z-Pattern</a></li>
                <li><a href="#q8Answer">Zig-Zag Pattern</a></li>
                <li><a href="#q8Answer">Golden Triangle Pattern</a></li>
                <li><a href="#q8Answer">F-Pattern</a></li>
                <li><a href="#q8Answer">Focal Point Pattern</a></li>
            </ul>
            <div id="q8Answer"></div>
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
            
        </div><!--/layout-quiz-->
   
   
   
   
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
            
            <p>These are some of the patterns that people subconsciously follow.</p>
            <p>Next, we’ll look at some persuasion methods to help achieve the goals of your page.</p>
            <p><a href="{{$links['next']}}" onclick="oBadges.stepCompleted();" class="btn">Next Step</a></p>
            
            </div>
        </div>
        
        
    </div>
    
    </div> 
       
   
   </div>
 
   



</main>

@endsection

@section('javascript')
 <script>

  var correctLayoutQuiz = 0;
    
    $( ".layout-quiz a" ).on( "click", function(e) {
        if($(this).data('answer')===true) {
            var correctGraphic = $(this).closest('.layout-quiz').find('.layout-image').data('right');
            $(this).closest('.layout-quiz').find('.layout-image').attr('src','/badge-assets/psychology-in-web-design/img/step-6/'+correctGraphic);
            $(this).closest('.layout-quiz').addClass('disabled');
            $(this).closest('.layout-quiz').find('.correct').removeClass('hide');
            $(this).closest('.layout-quiz').find('.wrong').addClass('hide');
            $(this).closest('.layout-quiz').next('.layout-quiz').removeClass('hide');
            correctLayoutQuiz++;
            if(correctLayoutQuiz === 8) {
                $('#successRow').removeClass('hide');    
            }
            $(this).addClass('selected');
        } else {
            $(this).closest('.layout-quiz').find('.wrong').removeClass('hide');    
        }        
    });  
  
  


    
</script>
 
  <script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 6);
  </script>
@endsection