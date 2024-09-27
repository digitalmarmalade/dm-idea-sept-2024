@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<main>

  <section class="question">
      <h2>Now it’s your turn!</h2>
      <p>Can you identify the actions that the following organisations can take to help them uphold their values?</p>
      <p>Drag and drop the correct action(s) onto the company icon and see what happens!</p>

      <div id="divSchool" class="divSchool" ondrop="drop(event)" ondragover="allowDrop(event)">
          <h3>School</h3>
          <p>Kindness, respect, compassion</p>
      </div>

      <div id="divDigital" class="divDigital" ondrop="drop(event)" ondragover="allowDrop(event)">
          <h3>Digital marketing agency</h3>
          <p>Equality, inclusion</p>
      </div>

      <div id="divSmart" class="divSmart" ondrop="drop(event)" ondragover="allowDrop(event)">
          <h3>Smartphone company</h3>
          <p>Innovation, sustainability</p>
      </div>

      <div id="divAnswer" class="divAnswer">
          <p id="divSmart-1" ondragstart="drag(event)" draggable="true">Encourage people to trade in old devices by giving them store credit</p>
          <p id="divDigital-1" ondragstart="drag(event)" draggable="true">Set clear diversity targets for all teams working on campaigns and measure progress</p>
          <p id="divNone-1" ondragstart="drag(event)" draggable="true">Encourage people to always buy the latest device to keep up with new innovations</p>
          <p id="divSchool-1" ondragstart="drag(event)" draggable="true">Ensure online etiquette is taught to everyone</p>
          <p id="divSmart-2" ondragstart="drag(event)" draggable="true">Teach people how to reduce and recycle e-waste</p>
          <p id="divNone-2" ondragstart="drag(event)" draggable="true">Hire people who resemble existing employees so the company culture doesn’t change</p>
      </div>

      <div>
          <div class='hide jsFeedbackSuccess1 feedbackSuccess'
               id="jsFeedbackSuccess1">
              <p class="">Well done!</p>
          </div>
          <div class='hide jsFeedbackSuccess2 feedbackSuccess'
               id="jsFeedbackSuccess2">
              <p class="">That’s it!</p>
          </div>
          <div class='hide jsFeedbackSuccess3 feedbackSuccess'
               id="jsFeedbackSuccess3">
              <p class="">Nice work!</p>
          </div>
          <div class='hide jsFeedbackSuccess4 feedbackSuccess'
               id="jsFeedbackSuccess4">
              <p class="">Nice! In addition to this, the smartphone company could also teach people how to reduce and recycle e-waste. </p>
          </div>

          <div class='hide jsFeedbackSuccessAll feedback'
               id="jsFeedbackSuccessAll">
              <p class="">Excellent work! As you can see, the values of an organisation can lead to specific digital ethics guiding principles and actions.</p>
              <p>It is important that organisations communicate their values to members at all levels so that everyone understands what they mean and how to live them.</p>
              <p>Embedding these principles into the company culture and creation of products, tools and services is essential for building trust, confidence and retaining both your customers and team members!</p>
              <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                 onclick="continueToNextQuestion()">Continue</a>
          </div>

          <div class='hide jsFeedbackFail1 feedback'
               id="jsFeedbackFail1">
              <p class="animate__animated animate__fadeInLeft animate__fast">
                  There’s a better action this school can take to really enforce their values of kindness, respect, and compassion. Please try again!
              </p>
              <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                      onclick="tryAgain()">Try Again</button>
          </div>

          <div class='hide jsFeedbackFail2 feedback'
               id="jsFeedbackFail2">
              <p class="animate__animated animate__fadeInLeft animate__fast">
                  That isn’t quite the best match. What will make a difference in increasing equality and inclusion?
              </p>
              <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                      onclick="tryAgain()">Try Again</button>
          </div>

          <div class='hide jsFeedbackFail3 feedback'
               id="jsFeedbackFail3">
              <p class="animate__animated animate__fadeInLeft animate__fast">
                  Oops! That’s not quite right. What could this company do to show they really care about innovation and sustainability?
              </p>
              <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                      onclick="tryAgain()">Try Again</button>
          </div>
      </div>
  </section>

</main>
@endsection


@section('javascript')
    <style>
        #divSchool {
            width: 350px;
            height: 500px;
            padding: 10px;
            border: 1px solid #aaaaaa;
            display: inline-block;
        }
        #divDigital {
            width: 350px;
            height: 500px;
            padding: 10px;
            border: 1px solid #aaaaaa;
            display: inline-block;
        }
        #divSmart {
            width: 350px;
            height: 500px;
            padding: 10px;
            border: 1px solid #aaaaaa;
            display: inline-block;
        }
    </style>
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step5.js"></script>

    <script>

        $(document).ready(function() {
            var triggerMode = 'hover';

            if($('body').hasClass('touch')){
                triggerMode = 'click';
            }

            $('.jsTooltip').tooltipster({
                trigger: triggerMode,
                maxWidth: 350
            });


        });
    </script>
    <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 1);
    </script>

@endsection
