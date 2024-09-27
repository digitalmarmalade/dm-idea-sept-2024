@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')    
@endsection
       
@section('page')
     
 <main class="badge-content step-3">

              <div class="badge-title badge-title--content-page">
                  <div class="badge-title__letter c swing-1"></div>
                  <div class="badge-title__letter o swing-2"></div>
                  <div class="badge-title__letter l swing-3"></div>
                  <div class="badge-title__letter l swing-4"></div>
                  <div class="badge-title__letter a swing-5"></div>
                  <div class="badge-title__letter b swing-1"></div>
                  <div class="badge-title__letter o swing-3"></div>
                  <div class="badge-title__letter r swing-2"></div>
                  <div class="badge-title__letter a swing-4"></div>
                  <div class="badge-title__letter t swing-5"></div>
                  <div class="badge-title__letter i swing-1"></div>
                  <div class="badge-title__letter o swing-2"></div>
                  <div class="badge-title__letter n swing-3"></div>
              </div>

      
      
      <div class="step">Step 3 of 4</div>
      
         <div class="body-text staggered-entry">
         
         <h1>Collaboration Approaches</h1>
         
          <p>As well as using or setting up collaboration systems you may also want to think about what different types of collaboration are possible and what might be best for your aims. For example if you are looking to work collectively on learning how to do something new then you may go with a Community of Practice (CoP) model, whereas if you are looking at working collectively with customers then you may use a Customer Relationship Management (CRM) model. Let's investigate these further.</p>
          
         </div><!--/body-text-->
         
         
         
         <div class="slice slice--approaches">
         
         <div class="approaches-column staggered-entry">
         <div class="approaches-column-content">
         <h2>Community of Practice</h2>
         
         <p>A <strong>Community of Practice (CoP)</strong> is a group of people who share a craft or a profession.</p>

        <p>A CoP can evolve naturally because of the members' common interest in a particular domain or area, or it can be created deliberately with the goal of gaining knowledge related to a specific field. It is through the process of sharing information and experiences with the group that members learn from each other, and have an opportunity to develop personally and professionally.</p>

        <p>CoPs can exist in physical settings, for example, a lunch room at work, a field setting, a factory floor, or elsewhere in the environment, but members of CoPs do not have to be co-located. They form a "virtual community of practice" (VCoP) when they collaborate online, such as within discussion boards and newsgroups.</p>
         </div>
         </div>
         
         <div class="approaches-column staggered-entry">
         <div class="approaches-column-content">
         <h2>Customer Relationship Management</h2>
         
<p>A form of Customer Relationship Management (CRM) is called <strong>Collaborative CRM (CCRM)</strong>. Through Collaborative CRM companies seek to evolve products through sharing any information collected from interactions with their customers.</p>

<p>For example, as a company you might want customer feedback that is gathered from an email survey, which could inform your marketing staff about services of interest to customers. </p>
         </div>
         </div>
         
         
         
         </div>
         
         
         <div class="difference-quiz">
         
         <div class="body-text staggered-entry">
         <h2>What's the difference?</h2>
         
            <p class="difference-intro">Look at the following statements and decide whether they are describing a CoP or a CCRM. Don't forget you can look back at the information above if you're not sure.</p>
            <p>Be careful - if you get one wrong, you'll have to restart the quiz!</p>
            
            <div class="whoops jsWhoops hide">
            <p>Whoops - you got that one wrong. Start again...</p>
            </div>

            <?php $question_number = 1; ?>
            <div class="difference-question jsQuestion<?php echo $question_number; ?>">

                <p>The primary purpose of this form of collaboration is to improve the quality of customer service and to increase customer satisfaction.</p>
               
                <ul class="difference-options">
                    <li><a href="#question<?php echo $question_number + 1; ?>">CoP</a></li>
                    <li><a href="#question<?php echo $question_number + 1; ?>" data-answer="true">CCRM</a></li>
                </ul>
                
                <div id="question<?php echo $question_number + 1; ?>">
                    <div class="difference-quiz-answer difference-quiz-answer--right hide">
                      <h3 class="difference-quiz-label difference-quiz-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
                        <p>Correct. </p>
                    </div>
                </div>
            
            </div><!--/question-->
            
            <?php $question_number = 2; ?>
            <div class="difference-question jsQuestion<?php echo $question_number; ?> hide">

                <p>Will help you learn what customers’ needs are.</p>
               
                <ul class="difference-options">
                    <li><a href="#question<?php echo $question_number + 1; ?>">CoP</a></li>
                    <li><a href="#question<?php echo $question_number + 1; ?>" data-answer="true">CCRM</a></li>
                </ul>
                
                <div id="question<?php echo $question_number + 1; ?>">
                    <div class="difference-quiz-answer difference-quiz-answer--right hide">
                      <h3 class="difference-quiz-label difference-quiz-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
                        <p>Correct. </p>
                    </div>
                </div>
            
            </div><!--/question--> 
            
            <?php $question_number = 3; ?>
            <div class="difference-question jsQuestion<?php echo $question_number; ?> hide">

                <p>Uses analytics to provide better services and support.</p>
               
                <ul class="difference-options">
                    <li><a href="#question<?php echo $question_number + 1; ?>">CoP</a></li>
                    <li><a href="#question<?php echo $question_number + 1; ?>" data-answer="true">CCRM</a></li>
                </ul>
                
                <div id="question<?php echo $question_number + 1; ?>">
                    <div class="difference-quiz-answer difference-quiz-answer--right hide">
                      <h3 class="difference-quiz-label difference-quiz-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
                        <p>Correct. </p>
                    </div>
                </div>
            
            </div><!--/question--> 
            
            <?php $question_number = 4; ?>
            <div class="difference-question jsQuestion<?php echo $question_number; ?> hide">

                <p>Uses collective learning to develop new solutions or ways of doing things.</p>
               
                <ul class="difference-options">
                    <li><a href="#question<?php echo $question_number + 1; ?>" data-answer="true">CoP</a></li>
                    <li><a href="#question<?php echo $question_number + 1; ?>">CCRM</a></li>
                </ul>
                
                <div id="question<?php echo $question_number + 1; ?>">
                    <div class="difference-quiz-answer difference-quiz-answer--right hide">
                      <h3 class="difference-quiz-label difference-quiz-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
                        <p>Correct. </p>
                    </div>
                </div>
            
            </div><!--/question--> 
            
            <?php $question_number = 5; ?>
            <div class="difference-question jsQuestion<?php echo $question_number; ?> hide">

                <p>A collaboration that grows organically.</p>
               
                <ul class="difference-options">
                    <li><a href="#question<?php echo $question_number + 1; ?>" data-answer="true">CoP</a></li>
                    <li><a href="#question<?php echo $question_number + 1; ?>">CCRM</a></li>
                </ul>
                
                <div id="question<?php echo $question_number + 1; ?>">
                    <div class="difference-quiz-answer difference-quiz-answer--right hide">
                      <h3 class="difference-quiz-label difference-quiz-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
                        <p>Correct. </p>
                    </div>
                </div>
            
            </div><!--/question--> 
            
            <?php $question_number = 6; ?>
            <div class="difference-question jsQuestion<?php echo $question_number; ?> hide">

                <p>A discussion about a subject by a number of people sharing the same interest on Twitter.</p>
               
                <ul class="difference-options">
                    <li><a href="#question<?php echo $question_number + 1; ?>" data-answer="true">CoP</a></li>
                    <li><a href="#question<?php echo $question_number + 1; ?>">CCRM</a></li>
                </ul>
                
                <div id="question<?php echo $question_number + 1; ?>">
                    <div class="difference-quiz-answer difference-quiz-answer--right hide">
                      <h3 class="difference-quiz-label difference-quiz-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
                        <p>Correct. </p>
                    </div>
                </div>
            
            </div><!--/question-->
            
            <?php $question_number = 7; ?>
            <div class="difference-question jsQuestion<?php echo $question_number; ?> hide">

                <p>A focus group with a targeted demographic.</p>
               
                <ul class="difference-options">
                    <li><a href="#question<?php echo $question_number + 1; ?>">CoP</a></li>
                    <li><a href="#question<?php echo $question_number + 1; ?>" data-answer="true">CCRM</a></li>
                </ul>
                
                <div id="question<?php echo $question_number + 1; ?>">
                    <div class="difference-quiz-answer difference-quiz-answer--right hide">
                      <h3 class="difference-quiz-label difference-quiz-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
                        <p>Correct. </p>
                    </div>
                </div>
            
            </div><!--/question--> 
            
            <?php $question_number = 8; ?>
            <div class="difference-question jsQuestion<?php echo $question_number; ?> hide">

                <p>Researchers sharing findings with their peers.</p>
               
                <ul class="difference-options">
                    <li><a href="#question<?php echo $question_number + 1; ?>" data-answer="true">CoP</a></li>
                    <li><a href="#question<?php echo $question_number + 1; ?>">CCRM</a></li>
                </ul>
                
                <div id="question<?php echo $question_number + 1; ?>">
                    <div class="difference-quiz-answer difference-quiz-answer--right hide">
                      <h3 class="difference-quiz-label difference-quiz-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
                        <p>Correct. </p>
                    </div>
                </div>
            
            </div><!--/question--> 
            
            <?php $question_number = 9; ?>
            <div class="difference-question jsQuestion<?php echo $question_number; ?> hide">

                <p>A brainstorm session to find a solution to a problem.</p>
               
                <ul class="difference-options">
                    <li><a href="#question<?php echo $question_number + 1; ?>" data-answer="true">CoP</a></li>
                    <li><a href="#question<?php echo $question_number + 1; ?>">CCRM</a></li>
                </ul>
                
                <div id="question<?php echo $question_number + 1; ?>">
                    <div class="difference-quiz-answer difference-quiz-answer--right hide">
                      <h3 class="difference-quiz-label difference-quiz-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
                        <p>Correct. </p>
                    </div>
                </div>
            
            </div><!--/question-->
            
            <?php $question_number = 10; ?>
            <div class="difference-question jsQuestion<?php echo $question_number; ?> hide">

                <p>An email from your IT department for feedback on internet speeds.</p>
               
                <ul class="difference-options">
                    <li><a href="#welldone">CoP</a></li>
                    <li><a href="#welldone" data-answer="true">CCRM</a></li>
                </ul>
                
                <div id="welldone">
                    <div class="difference-quiz-answer difference-quiz-answer--right hide">
                      <h3 class="difference-quiz-label difference-quiz-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
                        <p>Correct. The IT department is gathering feedback from it's customers - you.</p>
                    </div>
                </div>
            
            </div><!--/question-->
         
         </div><!--/body-text-->
         
         
         </div>
         
         
         <div class="jsCrossword crossword hide">
         
         <h2 class="crossword-heading">Well done!</h2>
         <p class="crossword-intro">Let's test what you've learnt. Don't forget you can refer to the content above if you can't think of the answer.</p>
         <a href="#crossword" id="triggerCrossword" class="launch-crossword-button">Launch Crossword</a>
         <a href="#nextStep" id="triggerNextStep"></a>
         <div class="crossword-holder" id="crossword">
         <iframe src="{{ url('badge-assets/collaboration/crossword/index.html')}}" scrolling="no" class="crossword-iframe"></iframe>
         </div>
         
         
         </div><!--crossword-->
         

          
          <div class="jsNextStep page-complete page-complete--step3 hide" id="nextStep">
          
          <div class="body-text staggered-entry">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/well-done.png" alt="" class="well-done" />
          <h2 class="visuallyhidden">Well done!</h2>
          <p>Collaboration software, content management systems and collaboration approaches are key components of successful collaboration.</p>
          
          <p class="next-step"><a href="{{$links['next']}}" class="btn btn--primary">Next step</a></p>
          </div>
          
          </div>
          
       


       
    </main>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
    oBadges.redirectIfPreviousStepNotCompleted(2, '{{$links['last']}}');
</script>

<script>
$( "#triggerCrossword" ).click(function() {
    $('#crossword').addClass('full-screen');
});
</script>

<script>
var badgeTitleWidth = 920,
    viewportWidth = $(window).width(),
    transformScale;
    
    if(badgeTitleWidth > (viewportWidth - 100)) {
        transformScale = (viewportWidth-100) / badgeTitleWidth;
        $('.badge-title').css('transform','scale('+transformScale+')').css('width','300%').css('margin-left','-100%');
    } else {
    $('.badge-title').css('transform','scale(1)');
    }
    
    $( window ).resize(function() {
        var badgeTitleWidth = 920,
    viewportWidth = $(window).width(),
    transformScale;
    
    if(badgeTitleWidth > (viewportWidth - 100)) {
        transformScale = (viewportWidth-100) / badgeTitleWidth;
        $('.badge-title').css('transform','scale('+transformScale+')').css('width','300%').css('margin-left','-100%');
    } else {
    $('.badge-title').css('transform','scale(1)');
    }
    });

</script>

<script>

var rightAnswers = 0,
    currentQuestion = 1,
    wrongAnswers = 0;
$( ".difference-options a" ).click(function() {
    $('.jsWhoops').addClass('hide');
    var answer = $(this).data('answer');
    $('.jsQuestion'+currentQuestion).addClass('disabled');
    if(answer === true) {
        rightAnswers++;
        $(this).addClass('selected');
        $('.jsQuestion'+currentQuestion).find('.difference-quiz-answer--right').removeClass('hide');
        currentQuestion++;    
    } else {
        currentQuestion = 1;
        $('.difference-quiz-answer--right').addClass('hide');
        $('.difference-question').addClass('hide');
        $('.difference-question.disabled').removeClass('disabled');
        $('.difference-options .selected').removeClass('selected');
        $('.jsWhoops').removeClass('hide');
    }
    
    if(currentQuestion === 11) {
        $('.jsCrossword').removeClass('hide');
    } else {
        $('.jsQuestion'+currentQuestion).removeClass('hide');
    }



});
</script>
  
      
<script>
                
/*
	requestAnimationFrame polyfill
*/
(function(w){
	var lastTime = 0,
		vendors = ['webkit', /*'moz',*/ 'o', 'ms'];
	for (var i = 0; i < vendors.length && !w.requestAnimationFrame; ++i){
		w.requestAnimationFrame = w[vendors[i] + 'RequestAnimationFrame'];
		w.cancelAnimationFrame = w[vendors[i] + 'CancelAnimationFrame']
			|| w[vendors[i] + 'CancelRequestAnimationFrame'];
	}

	if (!w.requestAnimationFrame)
		w.requestAnimationFrame = function(callback, element){
			var currTime = +new Date(),
				timeToCall = Math.max(0, 16 - (currTime - lastTime)),
				id = w.setTimeout(function(){ callback(currTime + timeToCall) }, timeToCall);
			lastTime = currTime + timeToCall;
			return id;
		};

	if (!w.cancelAnimationFrame)
		w.cancelAnimationFrame = function(id){
		clearTimeout(id);
	};
})(this);

</script>

<script>

window.onmessage = function(e){
    if (e.data == 'hello') {
        $('.jsNextStep').removeClass('hide');
        $('#crossword').removeClass('full-screen');
        $('#triggerNextStep').click();
        
    }
};

</script>

@endsection