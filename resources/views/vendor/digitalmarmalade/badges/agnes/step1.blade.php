@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<main>

  <section>
      <ul class="flex flex--center">
          <li class="dot-1 active">1</li>
          <li class="dot-2">2</li>
          <li class="dot-3">3</li>
          <li class="dot-4">4</li>
          <li class="dot-5">5</li>
      </ul>
      <div class="questions">
          <div id ="question1" class="question" >
              <div>
                  What is digital ethics?
                  <p>Please select the most appropriate definition below.</p>

                  <input type="radio" id="option1" name="options1" value="a">
                  <label for="option1">A branch of philosophy concerned with what is morally right and wrong.</label>
                  <br>

                  <input type="radio" id="option2" name="options1" value="b">
                  <label for="option2">A discipline that critically assesses the impact of computers and how far they have helped individuals, society and the world progress. </label>
                  <br>

                  <input type="radio" id="option3" name="options1" value="c">
                  <label for="option3">A discipline that critically assesses the impact of digital technologies and how they shape our political, social and moral existence. </label>
                  <br>

                  <input type="radio" id="option4" name="options1" value="d">
                  <label for="option4">The study of how digital technology can be used to help humans live more ethical and progressive lives. </label>
                  <br>

                  <button type="button" class="submitButton" onclick="submitAnswer()">
                      Submit
                  </button>
              </div>
              <div class='hide jsFeedbackSuccess-2 '
                   id="jsFeedbackSuccess1-2">
                      <p class=""><strong>You&rsquo;re right!</strong>
                          That’s right! Digital ethics involves thinking about accountability, responsibility, ethical principles and moral dilemmas throughout the lifecycle of digital technologies. You’re off to a great start.
                      </p>
                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                  onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackFail-0'
                   id="jsFeedbackFail1-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast"><strong>You’re close! </strong></p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgainQuestion1()">Try Again</button>
              </div>

              <div class='hide jsFeedbackFail-1'
                   id="jsFeedbackFail1-1">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      Digital ethics is not just about the impact of computers.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgainQuestion1()">Try Again</button>
              </div>

              <div class='hide jsFeedbackFail-3'
                   id="jsFeedbackFail1-3">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      Technology could be used to help humans live more ethically and progressively but that’s not what is meant by digital ethics.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgainQuestion1()">Try Again</button>
              </div>
          </div>

          <div id ="question2" class="question" style="display:none;">
              <div>
                  Why is digital ethics important?

                  Please select all that apply.

                  <input type="checkbox" id="option1" class="options2" name="options2" value="1">
                  <label for="option1">It helps organisations understand how they can use technology in a profitable way </label>
                  <br>

                  <input type="checkbox" id="option2" class="options2" name="options2" value="1">
                  <label for="option2">To ensure that digital systems are being developed, implemented and used in a manner that is consistent with the ethical principles of respect for human autonomy, prevention of harm, fairness and accountability </label>
                  <br>

                  <input type="checkbox" id="option3" class="options2" name="options2" value="1">
                  <label for="option3">For opening important discussions and questions about the future of technology </label>
                  <br>

                  <input type="checkbox" id="option4" class="options2" name="options2" value="1">
                  <label for="option4">To create awareness and to help protect against new technology that might be misused or have negative consequences </label>
                  <br>

                  <input type="checkbox" id="option5" class="options2" name="options2" value="1">
                  <label for="option6">To aid positive, value-led digital transformation</label>
                  <br>

                  <input type="checkbox" id="option6" class="options2" name="options2" value="1">
                  <label for="option7">For establishing laws and legislation to keep people safe</label>
                  <br>

                  <input type="checkbox" id="option7" class="options2" name="options2" value="1">
                  <label for="option8">It helps safeguard users’ personal data and their privacy</label>
                  <br>

                  <input type="checkbox" id="option8" class="options2" name="options2" value="1">
                  <label for="option9">To support how individuals and companies interact with one another face-to-face</label>
                  <br>

                  <input type="checkbox" id="option9" class="options2" name="options2" value="1">
                  <label for="option10">To make sure that digital technologies are developed and implemented responsibly</label>
                  <br>

                  <input type="checkbox" id="option10" class="options2" name="options2" value="1">
                  <label for="option11">For helping to build and maintain user trust</label>
                  <br>

                  <button type="button" class="submitButton" onclick="submitAnswerQuestion2()">
                      Submit
                  </button>
              </div>
              <div class='hide jsFeedbackSuccess-2'
                   id="jsFeedbackSuccess2-2">
                  <p class=""><strong>You&rsquo;re right!</strong>
                      Great work! You have correctly identified reasons that help explain why digital ethics is important.
                  </p>
                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackFail-0'
                   id="jsFeedbackFail1">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      <strong>Hint: you should select eight answers. Please have another go.</strong>
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgainQuestion2()">Try Again</button>
              </div>

              <div class='hide jsFeedbackFail-1'
                   id="jsFeedbackFail2">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      Almost! One or two of the options you have selected are not related to the consideration of ethics.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgainQuestion2()">Try Again</button>
              </div>
          </div>

          <div id ="question3" class="question" style="display:none;">
              <div>
                  While technology is often being developed with the best intentions, sometimes, it can end up having unexpected consequences.

                  Can you identify some unintended consequences that may relate to the following four innovations? (You may remember exploring these innovations if you have completed the Digital Ethics Bronze badge!)
                  Push notifications [Tooltip: Pop-up messages that appear on the home screen of your device with a short update, reminder or promotion. Examples: a sports score, a news update, a limited-time discount code.]
                  Autonomous vehicles
                  Facebook “year in review” feature
                  White hat hacking [Tooltip: A type of ethical hacking where hacking is used to protect against potential dangers or attacks.]?

                  Please select all that apply.

                  <input type="checkbox" id="option1" class="options3" name="options3" value="1">
                  <label for="option1">An invasion of privacy</label>
                  <br>

                  <input type="checkbox" id="option2" class="options3" name="options3" value="2">
                  <label for="option2">A disadvantage to other drivers on the road</label>
                  <br>

                  <input type="checkbox" id="option3" class="options3" name="options3" value="3">
                  <label for="option3">Alerting a community about a missing person</label>
                  <br>

                  <input type="checkbox" id="option4" class="options3" name="options3" value="4">
                  <label for="option4">A loss of driving jobs </label>
                  <br>

                  <input type="checkbox" id="option5" class="options3" name="options3" value="5">
                  <label for="option5">An increase in cybercrime rates </label>
                  <br>

                  <input type="checkbox" id="option6" class="options3" name="options3" value="6">
                  <label for="option5">Triggering negative emotions and distressing the user </label>
                  <br>

                  <input type="checkbox" id="option7" class="options3" name="options3" value="7">
                  <label for="option5">Risk of causing addiction and creating anxiety for the user</label>
                  <br>

                  <input type="checkbox" id="option8" class="options3" name="options3" value="8">
                  <label for="option5">A decrease in user retention</label>
                  <br>

                  <button type="button" class="submitButton" onclick="submitAnswerQuestion3()">
                      Submit
                  </button>
              </div>
              <div class='hide jsFeedbackSuccess-1'
                   id="jsFeedbackSuccess3-1">
                  <p class=""><strong>You&rsquo;re right!</strong>
                      Great work! You have correctly identified reasons that help explain why digital ethics is important.
                  </p>
                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackFail-0'
                       id="jsFeedbackFail3-1">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      <strong>Oops! Think about the uses of push notifications, white hat hacking, autonomous vehicles, and the “year in review” feature on Facebook. Can you identify four unintended consequences from the list that would apply to each example?</strong>
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgainQuestion3()">Try Again</button>
              </div>

              <div class='hide jsFeedbackFail-1'
                   id="jsFeedbackFail3-2">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      That’s not quite right. You should select four answers. Please have another go.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgainQuestion3()">Try Again</button>
              </div>
          </div>

          <div id ="question4" class="question" style="display:none;">
              <div>
                  Technology has the power to change your attitude or behaviour and get you to do something you wouldn't otherwise do on purpose.

                  Is this statement true or false?

                  <input type="radio" id="option0" name="options4" value="c">
                  <label for="option2">TRUE </label>
                  <br>

                  <input type="radio" id="option1" name="options4" value="d">
                  <label for="option1">FALSE </label>
                  <br>

                  <button type="button" class="submitButton" onclick="submitAnswer()">
                      Submit
                  </button>
              </div>
              <div class='hide jsFeedbackSuccess-0'
                   id="jsFeedbackSuccess4-0">
                  <p class=""><strong>You&rsquo;re right!</strong>
                      You’re right! Some technology is created specifically to change its users’ opinions, attitudes or behaviours to meet its goals. This is known as persuasive technology.
                  </p>
                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackFail-1'
                   id="jsFeedbackFail4-1">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      This statement is true. Some technology is created specifically to change its users’ opinions, attitudes, or behaviours to meet its goals. This is known as persuasive </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgainQuestion4()">Try Again</button>
              </div>

          </div>

          <div id ="question5" class="question" style="display:none;">
              <div>
                  Persuasive technology often uses psychological triggers to change its users’ opinions, attitudes, or behaviours to meet its goals.

                  Can you identify some examples of persuasive technology in action?

                  Please select all that apply.

                  <input type="checkbox" id="option1" class="options5" name="options5" value="1">
                  <label for="option1">“Likes” on social media</label>
                  <br>

                  <input type="checkbox" id="option2" class="options5" name="options5" value="2">
                  <label for="option2">Video conferencing</label>
                  <br>

                  <input type="checkbox" id="option3" class="options5" name="options5" value="3">
                  <label for="option3">Suggested products displayed by online shops</label>
                  <br>

                  <input type="checkbox" id="option4" class="options5" name="options5" value="4">
                  <label for="option4">Push notifications</label>
                  <br>

                  <button type="button" class="submitButton" onclick="submitAnswerQuestion5()">
                      Submit
                  </button>
              </div>
              <div class='hide jsFeedbackSuccess-1'
                   id="jsFeedbackSuccess5-1">
                  <p class=""><strong>That’s correct!</strong>

                      “Likes” on social media have been proven to be interpreted by the brain as a “reward” which results in the release of dopamine (dopamine is known as the happy or “feel good” hormone!). That temporary feeling of happiness, belonging and approval each time a person receives a “like” can make them want more, check their device more often, and repeat behaviours that will get them “likes”.
                      Suggested products that are similar or complementary to what people are shopping for online can tempt people to buy more than they had originally intended.

                      Push notifications encourage people to check their devices more often, even at times when they may not really want to be on them.

                      Technology can evolve super-fast, yet the human brain functions in much the same way as it has for centuries. The experts behind persuasive technology study people’s reactions to different situations and determine what triggers influence them, and then create algorithms based on that. People can use persuasive technology to try to change their behaviour for the better.

                  </p>
                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackFail-0'
                   id="jsFeedbackFail5-1">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      <strong>This is an example of non-persuasive technology.
                          Non-persuasive technology serves as a tool that supports you in achieving your own goals, instead of working to pull you toward goals.
                      </strong>
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgainQuestion5()">Try Again</button>
              </div>

              <div class='hide jsFeedbackFail-1'
                   id="jsFeedbackFail5-2">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      Oops, that’s not quite right. Hint: there are three correct answers.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgainQuestion5()">Try Again</button>
              </div>
          </div>
      </div>

  </section>

</main>
@endsection
@section('javascript')
<script src="/badge-assets/{{$url['slug']}}/_global/js/step1.js"></script>

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
