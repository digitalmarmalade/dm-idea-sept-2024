@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

  <header class="lockup">
    <p class="step" data-aos="fade-down"><span class="step">3/6</span></p>
    <a target="_blank" href="http://www.idea.org.uk">
      <img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="lockup-badge-type" alt="iDEA Inspiring Digital Enterprise Awards" />
    </a>
  </header>

    <main class="step-3">

      <section class="orange task task-3">
        <div class="holder">
          <h1 data-aos="fade-up">Task</h1>
          <p data-aos="fade-up" data-aos-delay="100">All sales follow a certain pattern. Rearrange these phases of a sale into the order which could lead to a successful sale:</p>
          <div class="holder" id="quiz">

              <div class="quiz quiz--order jsQuiz quiz-1">
                <div class="cols-wrapper">

                  <div class="quiz-question">
                    <ul id="sortable" class="quiz-reorder">
                      <li class="drag-option btn btn-primary" data-answer="5"  data-aos="fade-right" data-aos-delay="200" data-aos-anchor=".quiz-question">Follow Up & Close</li>
                      <li class="drag-option btn btn-primary" data-answer="3"  data-aos="fade-right" data-aos-delay="300" data-aos-anchor=".quiz-question">Target</li>
                      <li class="drag-option btn btn-primary" data-answer="6"  data-aos="fade-right" data-aos-delay="400" data-aos-anchor=".quiz-question">Deliver</li>
                      <li class="drag-option btn btn-primary" data-answer="1"  data-aos="fade-right" data-aos-delay="500" data-aos-anchor=".quiz-question">Prepare</li>
                      <li class="drag-option btn btn-primary" data-answer="4"  data-aos="fade-right" data-aos-delay="600" data-aos-anchor=".quiz-question"> Contact</li>
                      <li class="drag-option btn btn-primary" data-answer="2"  data-aos="fade-right" data-aos-delay="700" data-aos-anchor=".quiz-question">Research</li>
                    </ul>


                </div>
                <div class="check-answers-wrapper">


                  <div>
                    <p>
                      <a  data-aos="zoom-in" href="#" class="btn check-answers" data-aos-anchor=".quiz-question">Check your moves </a>

                    </p>
                  </div>
                  <div class="correct-answers" data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".quiz-question">
                    <p><span class="figure"><span class="correct-answer jsCorrectAnswers">0</span>/6</span>
                      Items in correct order</p>
                  </div>
                  <p>

                    <a href="#" class="hint"><span class="tooltip">Hint<span class="tooltiptext">Click here to see which items are in the right order</span></span></a>
                  </p>

                </div>
              </div>

            </div><!--/end quiz-->




        </div>
      </section>

      <section class="blue-4 feedback hide">
        <h2>Good work!</h2>
        <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"  data-aos="zoom-in" data-aos-delay="200" >
          Let's continue</a>
      </section>


    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>
<script src="jquery.ui.touch-punch.min.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/slick.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
     integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
     crossorigin="anonymous">
</script>
      <script src="/badge-assets/{{$url['slug']}}/_global/js/touchpunch.js"></script>
@endsection
