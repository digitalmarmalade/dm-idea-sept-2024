@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

  <header class="lockup">
    <p class="step" data-aos="fade-down"><span class="step">6/6</span></p>
    <a target="_blank" href="http://www.idea.org.uk">
      <img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="lockup-badge-type" alt="iDEA Inspiring Digital Enterprise Awards" />
    </a>
  </header>

    <main class="step-6">
      <section class="orange task task-6">
        <div class="holder">
          <h1 data-aos="fade-up">The Sales Quiz</h1>
          <p data-aos="fade-up" data-aos-delay="100">Let’s check your sales credentials and see what you’ve learnt:</p>
          <div class="quiz quiz--order quiz--final jsQuiz">

            <div class="question-box quiz-question jsQuestion1 quiz-question-1" id="question1">


              <div class="question-number" data-aos="fade-right" data-aos-delay="200">
                <p data-aos="up">1/5</p>
                <p data-aos="up" data-aos-delay="200">Which statement below is correct?</p>
              </div>

              <div>


                <p class="js-whoops hide quiz-error">Whoops, two wrong - start again!</p>

                <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>



                <ul class="quiz-options list list-task">
                  <li data-aos="fade-right" data-aos-delay="300"><a class="btn btn-primary" href="#question2" data-answer="true">The objective of sales is to shift stock/service to hit a target within a period of time.</a></li>
                  <li data-aos="fade-right" data-aos-delay="400"><a class="btn btn-primary" href="#question2">The objective of sales is to generate leads.</a></li>
                  <li data-aos="fade-right" data-aos-delay="500"><a class="btn btn-primary" href="#question2">Sales and marketing are synonymous.</a></li>
                  <li data-aos="fade-right" data-aos-delay="600"><a class="btn btn-primary" href="#question2">The objective of sales is to make customers aware of your brand.</a></li>
                </ul>
              </div>

            </div>

            <div class="question-box quiz-question jsQuestion2 quiz-question-2 hide" id="question2">
              <div class="question-number" data-aos="fade-right" data-aos-delay="200">

                <p data-aos="fade-up" >2/5</p>
                <p data-aos="fade-up" data-aos-delay="200">What is cross-selling?</p>
              </div>

              <div>
                <p class="js-error hide quiz-error">hat's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>



                <ul class="quiz-options list list-task">
                  <li data-aos="fade-right"  data-aos-delay="300"><a class="btn btn-primary" href="#question3">The action of comparing actual sales figures with target figures.</a></li>
                  <li data-aos="fade-right" data-aos-delay="400"><a data-answer="true" class="btn btn-primary" href="#question3">The action of adding a second sale at the time of an initial purchase.</a></li>
                  <li data-aos="fade-right" data-aos-delay="500"><a class="btn btn-primary" href="#question3">The action of stopping a sale before it is completed.</a></li>
                  <li data-aos="fade-right" data-aos-delay="600"><a class="btn btn-primary" href="#question3">The action of selling via the telephone.</a></li>
                </ul>
              </div>

            </div>


            <div class="question-box quiz-question jsQuestion3 quiz-question-3 hide" id="question3">
              <div class="question-number" data-aos="fade-right" data-aos-delay="200">


                <p data-aos="fade-up">3/5</p>
                <p data-aos="fade-up" data-aos-delay="200">Decision-maker is the person who…</p>
              </div>

              <div>
                <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>


                <ul class="quiz-options list list-task">
                  <li data-aos="fade-right" data-aos-delay="300"><a class="btn btn-primary" href="#question4">...leads the sale process on the seller's side.</a></li>
                  <li data-aos="fade-right" data-aos-delay="400"><a class="btn btn-primary" href="#question4">...decides which items/services will be sold during a given period.</a></li>
                  <li data-aos="fade-right" data-aos-delay="500"><a class="btn btn-primary" href="#question4" data-answer="true">...makes the final decision on the buyer's side.</a></li>
                  <li data-aos="fade-right" data-aos-delay="600"><a class="btn btn-primary" href="#question4">…stops the sale before the sales is completed.</a></li>
                </ul>
              </div>

            </div>

            <div class="question-box quiz-question jsQuestion4 quiz-question-4 hide" id="question4">
              <div class="question-number" data-aos="fade-right" data-aos-delay="200">
                <p data-aos="fade-up">4/5</p>
                <p data-aos="fade-up" data-aos-delay="200">Which ones of the alternatives below is not a sales approach?</p>
              </div>

              <div>
                <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>


                <ul class="quiz-options list list-task">
                  <li data-aos="fade-right" data-aos-delay="300"><a class="btn btn-primary" href="#question5">Spin Selling</a></li>
                  <li data-aos="fade-right" data-aos-delay="400"><a class="btn btn-primary" href="#question5">Conceptual Selling</a></li>
                  <li data-aos="fade-right" data-aos-delay="500"><a class="btn btn-primary" href="#question5" data-answer="true">Murphy's Law</a></li>
                  <li data-aos="fade-right" data-aos-delay="600"><a class="btn btn-primary" href="#question5">The Sandler System</a></li>
                </ul>
              </div>

            </div>

            <div class="question-box quiz-question jsQuestion5 quiz-question-5 hide" id="question5">
              <div class="question-number" data-aos="fade-right" data-aos-delay="200">

                <p data-aos="fade-up">5/5</p>
                <p data-aos="fade-up" data-aos-delay="200">There are a few techniques that can be used when closing a sale. Which of these below is not one of them?</p>
              </div>

              <div>
                <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>



                <ul class="quiz-options list list-task">
                  <li data-aos="fade-right" data-aos-delay="300"><a class="btn btn-primary" href="#next-step">The Alternative Close</a></li>
                  <li data-aos="fade-right" data-aos-delay="400"><a class="btn btn-primary" href="#next-step">The Empathy Close</a></li>
                  <li data-aos="fade-right" data-aos-delay="500"><a class="btn btn-primary" href="#next-step" data-answer="true">The Exaggeration Close</a></li>
                  <li data-aos="fade-right" data-aos-delay="600"><a class="btn btn-primary" href="#next-step">The Humour Close</a></li>
                </ul>
              </div>

            </div>


          </div><!--/quiz-->


        </div>
      </section>
      <section class="blue-4 continue jsNextStep hide" id="continue">
        <div class="holder">
          <h2 data-aos="fade-up">Great job!</h2>
          <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"  data-aos="zoom-in" data-aos-delay="200" >
            Let's continue</a>
        </div>
      </section>
    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 7);
</script>

<script src="/badge-assets/{{$url['slug']}}/_global/js/step-6.js"></script>

@endsection
