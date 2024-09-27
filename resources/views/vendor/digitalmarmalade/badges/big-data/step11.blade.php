@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

  <main class="step-10">
    <section class="step task-header grad-blue">
      <div class="step-task light-blue" data-aos="fade-up">Quiz</div>
      <div class="step-copy-wrapper">
        <div class="step-copy">
          <p data-aos="fade-right" data-aos-delay="400">Now let’s put your knowledge to the test:  can you pass the Big Data Quiz?</p>
        </div>
      </div>
    </section>

    <section class="grad-blue question task">
      <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" data-aos="fade-right"  data-aos-delay="400" />
      <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg"  data-aos="fade-left"  data-aos-delay="400"  />

      <div class="holder">

        <div class="quiz quiz--order quiz--final jsQuiz">


          <div class="question quiz-question jsQuestion1 quiz-question-1" id="question-1">
            <div class="question-number" data-aos="zoom-in" data-aos-delay="100" >1<span>/</span>7</div>

            <p class="js-whoops hide quiz-error">Whoops, two wrong - start again!</p>

            <p class="quiz-the-question" data-aos="fade-up" data-aos-delay="200">Big Data can be defined by the four ‘Vs’. What does each of the ‘Vs’ stand for?</p>
            <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
            <ul class="quiz-options">
              <li data-aos="zoom-in" data-aos-delay="300"><a href="#question2">Volume, velocity, variety and volatility</a></li>
              <li data-aos="zoom-in" data-aos-delay="400"><a href="#question2">Volume, velocity, visualisation and volatility</a></li>
              <li data-aos="zoom-in" data-aos-delay="500"><a href="#question2" data-answer="true">Volume, velocity, variety and veracity</a></li>
              <li data-aos="zoom-in" data-aos-delay="600"><a href="#question2">Volume, variety, visualisation and volatility</a></li>
            </ul>

          </div>

          <div class="question quiz-question jsQuestion2 hide" id="question2">
            <div class="question-number">2<span>/</span>7</div>

            <p class="quiz-the-question">Data that may be considered as Big Data includes:</p>
            <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
            <ul class="quiz-options">
              <li><a href="#question3" >Only figures and text, you can't store other data</a></li>
              <li><a href="#question3">Only figures</a></li>
              <li><a href="#question3">Only images and videos because they are larger files</a></li>
              <li><a href="#question3" data-answer="true">Figures, text, images, videos, social media feeds, shopping orders and emails</a></li>
            </ul>

          </div>

          <div class="question quiz-question jsQuestion3 hide" id="question3">
            <div class="question-number">3<span>/</span>7</div>
            <p class="quiz-the-question">The options below represent challenges faced by the advance of Big Data. <br>Which one is not a challenge?</p>
            <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
            <ul class="quiz-options">
              <li><a href="#question4">Scalability</a></li>
              <li><a href="#question4" data-answer="true">Excess of experts willing to work with Data Science</a></li>
              <li><a href="#question4" >Data quality</a></li>
              <li><a href="#question4" >Data privacy</a></li>
              <li><a href="#question4">Actionable insights</a></li>
              <li><a href="#question4">Costly maintenance</a></li>
              <li><a href="#question4">Security</a></li>
              <li><a href="#question4">Data discrimination</a></li>
            </ul>

            </div>
            <div class="question quiz-question jsQuestion4 hide" id="question4">
            <div class="question-number">4<span>/</span>7</div>
            <p class="quiz-the-question">Companies are learning more and more about how to handle Big Data. Which statement below is not true?</p>
            <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
            <ul class="quiz-options">
              <li><a href="#question5">Companies are translating collected data in more engaging and easier to understand visualisations.</a></li>
              <li><a href="#question5">Companies are using Big Data to understand customers wishes and behaviours.</a></li>
              <li><a href="#question5" data-answer="true">It is extremely cheap to handle Big Data these days.</a></li>
              <li><a href="#question5">When businesses analyse the data they have collected it’s possible to plan and make informed decisions.</a></li>
            </ul>

          </div>

          <div class="question quiz-question jsQuestion5 hide" id="question5">
            <div class="question-number">5<span>/</span>7</div>
            <p class="quiz-the-question">Big Data is improving healthcare in many ways. Which of the statements below is incorrect?</p>
            <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
            <ul class="quiz-options">
              <li><a href="#question6">We can now look through huge numbers of medical records and look for patterns that can help with early diagnosis and even help develop new treatments and medicines.</a></li>
              <li><a href="#question6">We can decode entire DNA strings in minutes predicting how diseases will evolve.</a></li>
              <li><a href="#question6">In the near future, health apps and smartwatches will be able to feed data into your medical records in a way that you will get a notification telling you to go to the doctor if needed.</a></li>
              <li><a href="#question6" data-answer="true">Robots fed by Big Data are able to perform full operations with no human assistance.</a></li>
            </ul>

          </div>

          <div class="question quiz-question jsQuestion6 hide" id="question6">
            <div class="question-number">6<span>/</span>7</div>
            <p class="quiz-the-question">Big Data is revolutionising processes in different sectors. Which of the statements below is correct? </p>
            <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
            <ul class="quiz-options">
              <li><a href="#question7">Although retail is one of the biggest sectors that use Big Data, retailers are still not able to predict customer demand based on stock rotation.</a></li>
              <li><a href="#question7">Unfortunately we are still not able to make any integration between data from different data centres.</a></li>
              <li><a href="#question7" data-answer="true">Some companies are using devices that enable them to track employees' social dynamics in the workplace.</a></li>
              <li><a href="#question7">Social Media data is not accessible to the majority of businesses.</a></li>
            </ul>

          </div>

          <div class="question quiz-question jsQuestion7 hide" id="question7">
            <div class="question-number">7<span>/</span>7</div>
            <p class="quiz-the-question">Below are examples of how Big Data is improving the lives of people living in cities. Which one is not true?</p>
            <p class="js-error hide quiz-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
            <ul class="quiz-options">
              <li><a href="#next-step">Optimisation of traffic flows.</a></li>
              <li><a href="#next-step">Live detection of energy consumption.</a></li>
              <li><a href="#next-step">Full Wi-Fi enabled cities via mobile Wi-Fi hotspots.</a></li>
              <li><a href="#next-step" data-answer="true">Monitoring the use of self-flying cars.</a></li>
            </ul>

          </div>
        </div><!--/quiz-->
      </div>
    </section>

    <section class="next-step hide jsNextStep" id="next-step">
      <a onclick="oBadges.stepCompleted();" href="success" class="btn-next-step">Continue</a>
    </section>

  </main>
    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 11);
      </script>


      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-11.js"></script>
    @endsection
