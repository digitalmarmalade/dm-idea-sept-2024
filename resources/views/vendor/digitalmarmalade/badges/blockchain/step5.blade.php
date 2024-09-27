@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="task-2">
      <section class="top grad-pink">
        <div class="holder" id="quiz">

            <div class="quiz quiz--order jsQuiz quiz-1">
              <div class="cols">

                <div class="quiz-question">
                  <h1 data-aos="fade-right">Task</h1>
                  <p data-aos="fade-right" data-aos-delay="100">You have just seen how the blockchain process works. Can you move the steps below in the correct order to complete a full blockchain cycle? Once you are satisfied with the order you chose, check your moves.</p>

                  <div class="sortable-wrapper">
                    <ul id="sortable" class="quiz-reorder list list-task" data-aos="fade-right" data-aos-delay="300">
                      <li class="drag-option" data-answer="5">A new block of data is created</li>
                      <li class="drag-option" data-answer="3">Mathematical equations are solved by a network of computers to validate a transaction</li>
                      <li class="drag-option" data-answer="6">A new block of data is added to a blockchain</li>
                      <li class="drag-option" data-answer="7">The transaction is complete</li>
                      <li class="drag-option" data-answer="1">A transaction is requested</li>
                      <li class="drag-option" data-answer="4">The transaction is added to other transactions </li>
                      <li class="drag-option" data-answer="2">A transaction request is distributed through a network of computers</li>
                    </ul>
                  </div>


              </div>
              <div class="check-answers-wrapper">

                <div class="correct-answers" data-aos-once="true" data-aos="fade-up" data-aos-delay="200">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/task-2.png" />
                  <p><span><span class="correct-answer jsCorrectAnswers">0</span>/7</span>
                    Items in correct order</p>
                </div>
                <div>
                  <p>
                    <a href="#" class="btn check-answers">Check your moves </a>
                    <a href="#" class="btn hint"><span class="tooltip">Reveal correct answers</a>
                    <!-- <a href="#" class="btn hint"><span class="tooltip">Hint<span class="tooltiptext">Click here to see which items are in the right order. Correct items are highlighted in green.</span></span></a> -->
                  </p>
                </div>

              </div>
            </div>

          </div><!--/end quiz-->
        </div><!--/holder-->
      </section>
      <section class="bottom grad-blue feedback feedback-fail hide jsNextStep">
        <div class="holder">
          <div class="feedback-box">
            <div>
              <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/correct.png" />
            </div>
            <div>
              <div>
                <h1 data-aos="fade-right" data-aos-delay="100">Well done!</h1>
                <a  onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn" data-aos="zoom-in" data-aos-delay="200">Continue</a>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/task-2.js"></script>
<script
     src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
     integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
     crossorigin="anonymous">

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


@endsection
