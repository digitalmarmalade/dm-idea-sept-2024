@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<header class="step-lockup">
    <a target="_blank" href="https://idea.org.uk/">
     <img src="/badge-assets/promotions/_global/img/idea-logo.svg" alt="iDEA Inspiring Digital Enterprise Awards"/>
   </a>
   <p>Advertising Badge - Section 2 of 6</p>
</header>

<main>


      <div class="holder" id="topContent">
      <h1>The purpose of advertising</h1>

      <img src="/badge-assets/promotions/_global/img/step1-main.png" alt="" class="main-image" />

      <p>The purpose of advertising is to tell people about something such as a brand or product, and encourage them to perform a specific action based on this. This action could be something like attending a concert, making a purchase or booking a holiday.  Advertising can enhance the image of a company or brand, point out and create a need for products or services, announce new products and programs, attract customers to a business, and help retain existing customers.</p>
      <div id="steps">

          <div class="quiz-intro staggered-entry">
            <p>Below are the six steps a buyer moves through when making a purchase:</p>
          </div>

          <div class="buying-step staggered-entry">
            <img src="/badge-assets/promotions/_global/img/buyer-steps/step1.png" alt="" />
            <h3>Step 1 <span>Awareness</span></h3>
            <p>Before you can sell, you must make contact with those who want to purchase. Your agency should create advertising and promotional programs that’ll make your name conspicuous and will attract serious buyers.</p>
          </div>

          <div class="buying-step staggered-entry">
            <img src="/badge-assets/promotions/_global/img/buyer-steps/step2.png" alt="" />
            <h3>Step 2 <span>Knowledge</span></h3>
            <p>Once prospective clients know your name, they begin the process of acquiring knowledge about what you can offer. Therefore, your advertising efforts should establish you as an expert — perhaps even a specialist in one or more niche areas.</p>
          </div>

          <div class="buying-step staggered-entry">
            <img src="/badge-assets/promotions/_global/img/buyer-steps/step3.png" alt="" />
            <h3>Step 3 <span>Liking</span></h3>
            <p>We all tend to buy from people or companies we feel positive about. Entertaining ads, for example, will convey warmth and the "humanity" of your brand. Direct your creative efforts toward making your brand resonate well with your target audiences or customers.</p>
          </div>

          <div class="buying-step staggered-entry">
            <img src="/badge-assets/promotions/_global/img/buyer-steps/step4.png" alt="" />
            <h3>Step 4 <span>Preference</span></h3>
            <p>Benefits statements are the key to making prospective clients prefer your brand over another. Provide target customers with reasons to prefer your products and services over others.</p>
          </div>

          <div class="buying-step staggered-entry">
            <img src="/badge-assets/promotions/_global/img/buyer-steps/step5.png" alt="" />
            <h3>Step 5 <span>Conviction</span></h3>
            <p>Your advertising should build the customers’ certainty that you’re the product or service of choice. Client testimonials, for example, provide just the right reinforcement for the preference you’ve created.</p>
          </div>

          <div class="buying-step staggered-entry">
            <img src="/badge-assets/promotions/_global/img/buyer-steps/step6.png" alt="" />
            <h3>Step 6 <span>Purchase</span></h3>
            <p>Once prospective customers have decided to seek you out, expert sales skills are critical to helping them make the right purchase.</p>
          </div>
        </div>

  </div><!--/holder-->

  <a class="btn btn--home" href="#" id="goToTask">Let's move on</a>


  <div class="holder hide" id="quiz">


      <div class="quiz quiz--order jsQuiz quiz-1">
        <div class="quiz-intro staggered-entry">
          <h2>Drag the six steps a buyer moves through when making a purchase into the right order:</h2>
        </div>

        <div class="quiz-question staggered-entry">



          <!-- <div class="correct-gauge jsCorrectGauge">
              <div class="correct-gauge-1"></div>
              <div class="correct-gauge-2"></div>
              <div class="correct-gauge-3"></div>
              <div class="correct-gauge-4"></div>
              <div class="correct-gauge-5"></div>
              <div class="correct-gauge-6"></div>
          </div> -->

          <ul id="sortable" class="quiz-reorder">
            <li class="drag-option" data-answer="3">Liking</li>
            <li class="drag-option" data-answer="1">Awareness</li>
            <li class="drag-option" data-answer="2">Knowledge</li>
            <li class="drag-option" data-answer="6">Purchase</li>
            <li class="drag-option" data-answer="4">Preference</li>
            <li class="drag-option" data-answer="5">Conviction</li>
          </ul>

          <div class="check-answers-wrapper">

            <p><a href="#" class="check-answers">Check </a></p>
            <p class="correct-answers"> Items in correct order: <span class="circle"><span class="jsCorrectAnswers"> 0</span>/6 </span></p>

          </div>

      </div>




    </div><!--/end quiz-->
  </div><!--/holder-->
  <a class="btn btn--home jsNextStep hide" href="{{$links['next']}}">Let's move on</a>
</main>

@endsection


@section('javascript')

<script
     src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
     integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
     crossorigin="anonymous">

</script>

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
    oBadges.redirectIfPreviousStepNotCompleted(1, '{{$links['last']}}');
</script>

<script>
/*!
 * jQuery UI Touch Punch 0.2.3
 *
 * Copyright 2011–2014, Dave Furfero
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * Depends:
 *  jquery.ui.widget.js
 *  jquery.ui.mouse.js
 */
!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);
</script>

<script>

  $( "#goToTask" ).click(function() {
    $('#topContent').hide();
    $(this).hide();
    $("#quiz").removeClass('hide');
  });

  $( function() {
	  var correctAnswers = 0;
    $( "#sortable" ).sortable({
      placeholder: "placeholder",
        stop: function() {
        correctAnswers = 0;
        $( ".drag-option" ).each(function( index ) {
            if((index + 1) === $(this).data('answer')) {
                correctAnswers++;
            }
        });

        $(".check-answers").click(function(event){
            event.preventDefault();
          $('.jsCorrectGauge').removeClass('correct-gauge--1').removeClass('correct-gauge--2').removeClass('correct-gauge--3').removeClass('correct-gauge--4').removeClass('correct-gauge--5').removeClass('correct-gauge--6').addClass('correct-gauge--'+correctAnswers)
          $('.jsCorrectAnswers').text(correctAnswers);
          if(correctAnswers === 6) {
                $('.jsQuiz').addClass('correct');
              setTimeout(function(){
                $('.jsNextStep').removeClass('hide');
                  oBadges.stepCompleted();
              }, 1000);

          }
        });
      }
    });

  $( "ul, li" ).disableSelection();
  });
</script>


@endsection
