@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<main>

  <section id="task8">

      <div id="questionBoxes">
          <div id="question" class="question">
              <p>Please write at least three different actions in the boxes below.</p>

              <div class='jsInputText' id="jsInputText1">
                  <p>Please write a minimum of 10 words in the space below</p>
                  <textarea id="inputTextArea1" class="inputTextArea" name="inputTextArea1"
                            placeholder="I will be mindful about who I give my data to."></textarea>
                  <div class='hide jsFeedbackFail feedback'
                       id="jsFeedbackFail1">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Oops! You have not met the minimum word count in each box. Please write some more and try submitting again!
                      </p>
                  </div>
              </div>

              <div class='jsInputText' id="jsInputText2">
                  <p>Please write a minimum of 10 words in the space below</p>
                  <textarea id="inputTextArea2" class="inputTextArea" name="inputTextArea2"
                            placeholder="I will think carefully before posting anything online."></textarea>
                  <div class='hide jsFeedbackFail feedback'
                       id="jsFeedbackFail2">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Oops! You have not met the minimum word count in each box. Please write some more and try submitting again!
                      </p>
                  </div>
              </div>

              <div class='jsInputText' id="jsInputText3">
                  <p>Please write a minimum of 10 words in the space below</p>
                  <textarea id="inputTextArea3" class="inputTextArea" name="inputTextArea3"
                            placeholder="I will share what I have learned about online safety with my family members."></textarea>
                  <div class='hide jsFeedbackFail feedback'
                       id="jsFeedbackFail3">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Oops! You have not met the minimum word count in each box. Please write some more and try submitting again!
                      </p>
                  </div>
              </div>

          </div>

          <button type="button" id="writeMoreButton" class="writeMoreButton" onclick="writeMore()">
              Write More
          </button>
          <button type="button" id="submitButton" class="submitButton" onclick="submit()">
              Submit
          </button>
          <button id="tryAgain" class="hide btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                  onclick="tryAgain()">Try Again</button>
      </div>

      <div id="questionFeedback">
          <ul id="finalTextBoxesArea" class="hide finalTextBoxesArea">
              <li>I’ll be more mindful about who I give my personal data to.</li>
              <li>I’m going to check the privacy settings on my social media accounts and change my passwords regularly.</li>
              <li>Question and assess the validity of news, articles and posts that I read online.</li>
              <li>Think carefully about what I put out on social media - how will what I publish affect others?</li>
              <li>Limit the amount of time I spend on social media and be mindful of when using social media starts to negatively impact how I think and feel. </li>
              <li>I’ll be more careful about the information I share on in-game chat.</li>
              <li>Turn off my location settings for websites or apps that I do not want to know my location.</li>
              <li>Report any content I see online that I think is harmful.</li>
              <li>I want to help teach others around me how to use the internet safely and responsibly.</li>
              <li>I’m going to keep an open conversation and talk to my children regularly about online safety.</li>
              <li>Consider how technology can impact the environment - I can recycle or trade in my electronic devices (and maybe even get some money back!).</li>
          </ul>
          <div class='hide jsFeedbackSuccessAll feedback'
               id="jsFeedbackSuccessAll">

              <div class='hide jsFeedbackSuccess1 feedbackSuccess'
                   id="jsFeedbackSuccess1">
                  <p class="">
                      Well done! Your ideas have been added to a wall along with some others from people like you on iDEA. Take a look! Maybe some are similar to what you wrote and maybe there are some good ideas that you hadn’t thought about already. You can take a screenshot of these if you want to keep them to refer back to later on.
                  </p>
              </div>

              <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                 onclick="next()">Finish</a>
          </div>

          <div class='hide jsFeedbackFail feedback'
               id="jsFeedbackFailNotComplete">
              <p class="animate__animated animate__fadeInLeft animate__fast">
                  Please write at least three different actions in the boxes before submitting.
              </p>
          </div>
      </div>

      <div id="final" class='hide '>
          here
      </div>
  </section>

</main>
@endsection


@section('javascript')
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step8.js"></script>

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
