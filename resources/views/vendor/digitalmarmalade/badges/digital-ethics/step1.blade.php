@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
@endsection @section('page')

<main>
  <section>
    @include('vendor.digitalmarmalade.badges.digital-ethics.header',
    ['title' => 'Header'])
    <ol class="step-counter flex gap--sm flex--align-center" data-aos="flip-up" data-aos-duration="1500" data-aos-delay="500">
      <li class="step active">1</li>
      <li class="step">2</li>
      <li class="step">3</li>
      <li class="step">4</li>
      <li class="step">5</li>
      <li class="step">6</li>
      <li class="step">7</li>
      <li class="step">8</li>
    </ol>
    <div class="container">
      <div class='box box--step-header bg--blue flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
        <div class="flex flex--column gap box__copy">
          <h1>What do you already know about Digital Ethics?</h1>
          <p>You may already know about digital ethics, you might even have completed the Digital Ethics Bronze badge! Don't worry if you haven’t – but you may be interested in giving it a go after this.</p>
        </div>
        <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--initial-quiz.svg" alt="" />
      </div>     
      <p class='col text-align--center' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">Let’s begin with a quick quiz. Don’t worry, you won’t fail if you don’t know the right answers, you’ll get feedback to help you figure it out as you go along.</p>
      <div id="continueToTask" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200" data-aos-anchor-placement="bottom-bottom">
       <button class="btn" onclick="continueToTask()">
          Let&rsquo;s go!
        </button>
      </div>
    </div>
  </section>
  <section id="sectionTask" class="hide task flex flex--column" >
    
    <div class="box box--task bg--offwhite container animate__animated animate__fadeInUp animate__slow">
      <ol class="flex flex--center gap--sm">
        <li class="step dot-1 active">1</li>
        <li class="step dot-2">2</li>
        <li class="step dot-3">3</li>
        <li class="step dot-4">4</li>
        <li class="step dot-5">5</li>
      </ol>
      <div class="questions">
        <div id ="question1" class="question" >
            <div class="flex flex--column gap--lg flex--align-center">
              <div class="flex flex--column gap--sm col">
                <p>What is digital ethics?</p>
                <p><i>Please select the most appropriate definition below.</i></p>
              </div>
              <div class="answers flex flex--wrap gap--sm">
                <div>
                  <input type="radio" id="option1" name="options1" value="a" class="">
                  <label for="option1">A branch of philosophy concerned with what is morally right and wrong.</label>
                </div>
                <div>
                  <input type="radio" id="option2" name="options1" value="b">
                  <label for="option2">A discipline that critically assesses the impact of computers and how far they have helped individuals, society and the world progress. </label>
                </div>
                <div>                 
                  <input type="radio" id="option3" name="options1" value="c">
                  <label for="option3">A discipline that critically assesses the impact of digital technologies and how they shape our political, social and moral existence. </label>
                </div>
                <div>                         
                  <input type="radio" id="option4" name="options1" value="d">
                  <label for="option4">The study of how digital technology can be used to help humans live more ethical and progressive lives. </label>
                </div>
              </div>
    
            </div>
            <button class="btn submitButton" type="button" type="submit" onclick="submitAnswer()">
                    Submit
              </button>
            <div class='hide feedback success jsFeedbackSuccess-2 animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess1-2" >
                <div class="feedback__content">
                  <p>That’s right! Digital ethics involves thinking about accountability, responsibility, ethical principles and moral dilemmas throughout the lifecycle of digital technologies. You’re off to a great start.</p>
                  <button class="btn" onclick="continueToNextQuestion()">Continue</button>
                </div>
            </div>
            <div class='hide feedback fail jsFeedbackFail-0 animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-0">
              <div class="feedback__content">
                <p>You’re close!</p>
                <button class="btn" onclick="tryAgainQuestion1()">Try Again</button>
              </div>  
            </div>
            <div class='hide feedback fail jsFeedbackFail-1 animate__animated animate__zoomIn animate__faster'
                  id="jsFeedbackFail1-1">
                  <div class="feedback__content">
                  <p>
                      Digital ethics is not just about the impact of computers.
                  </p>
                  <button class="btn"
                          onclick="tryAgainQuestion1()">Try Again</button>
                </div>  
            </div>
            <div class='hide feedback fail jsFeedbackFail-3 animate__animated animate__zoomIn animate__faster'
                  id="jsFeedbackFail1-3">
                  <div class="feedback__content">
                  <p>
                      Technology could be used to help humans live more ethically and progressively but that’s not what is meant by digital ethics.
                  </p>
                  <button class="btn"
                          onclick="tryAgainQuestion1()">Try Again</button>
                </div>        
            </div>
        </div>
        <div id ="question2" class="question" style="display:none;">
          <div class="flex flex--column gap--lg flex--align-center"> 
              <div class="flex flex--column gap--sm col">
                <p>Why is digital ethics important?</p>
                <p><i> Please select all that apply.</i></p>
              </div>
              <div class="answers flex flex--wrap gap--sm">
                <div>
                  <input type="checkbox" id="option2-1" class="options2" name="options2" value="1">
                  <label for="option2-1">It helps organisations understand how they can use technology in a profitable way </label>
                </div>
                <div>
                  <input type="checkbox" id="option2-2" class="options2" name="options2" value="1">
                  <label for="option2-2">To ensure that digital systems are being developed, implemented and used in a manner that is consistent with the ethical principles of respect for human autonomy, prevention of harm, fairness and accountability </label>
                </div>
                <div>        
                  <input type="checkbox" id="option2-3" class="options2" name="options2" value="1">
                  <label for="option2-3">For opening important discussions and questions about the future of technology </label>
                </div>
                <div>             
                  <input type="checkbox" id="option2-4" class="options2" name="options2" value="1">
                  <label for="option2-4">To create awareness and to help protect against new technology that might be misused or have negative consequences </label>
                </div>
                <div>              
                  <input type="checkbox" id="option2-5" class="options2" name="options2" value="1">
                  <label for="option2-5">To aid positive, value-led digital transformation</label>
                </div>
                <div>               
                  <input type="checkbox" id="option2-6" class="options2" name="options2" value="1">
                  <label for="option2-6">For establishing laws and legislation to keep people safe</label>          
                </div>
                <div>
                  <input type="checkbox" id="option2-7" class="options2" name="options2" value="1">
                  <label for="option2-7">It helps safeguard users’ personal data and their privacy</label>
                </div>
                <div>             
                  <input type="checkbox" id="option2-8" class="options2" name="options2" value="1">
                  <label for="option2-8">To support how individuals and companies interact with one another face-to-face</label>
                </div>
                <div> 
                  <input type="checkbox" id="option2-9" class="options2" name="options2" value="1">
                  <label for="option2-9">To make sure that digital technologies are developed and implemented responsibly</label>
                </div>
                <div>              
                  <input type="checkbox" id="option2-10" class="options2" name="options2" value="1">
                  <label for="option2-10">For helping to build and maintain user trust</label>
                </div> 
              </div>
              <button type="button" class="btn submitButton" onclick="submitAnswerQuestion2()">
                  Submit
              </button>
              <div class='hide feedback success jsFeedbackSuccess-2 animate__animated animate__zoomIn animate__faster'
                  id="jsFeedbackSuccess2-2">
                  <div class="feedback__content">
                    <p>Great work! You have correctly identified reasons that help explain why digital ethics is important.</p>
                    <button class="btn"
                      onclick="continueToNextQuestion()">Continue</button>
                  </div>
              </div>
              <div class='hide feedback fail jsFeedbackFail-0 animate__animated animate__zoomIn animate__faster'
                  id="jsFeedbackFail1">
                  <div class="feedback__content">
                    <p>
                      Hint: you should select eight answers. Please have another go.
                    </p>
                    <button class="btn"
                          onclick="tryAgainQuestion2()">Try Again</button>
                  </div>

              </div>
              <div class='hide feedback fail jsFeedbackFail-1 animate__animated animate__zoomIn animate__faster'
                  id="jsFeedbackFail2">
                  <div class="feedback__content">
                    <p>
                      Almost! One or two of the options you have selected are not related to the consideration of ethics.
                    </p> 
                    <button class="btn "
                          onclick="tryAgainQuestion2()">Try Again</button>
                  </div>

              </div>
          </div>
        </div>
        <div id ="question3" class="question"  style="display:none;">
         <div class="flex flex--column gap--lg flex--align-center"> 
            <div class="flex flex--column gap--lg flex-center col">
              <p>While technology is often being developed with the best intentions, sometimes, it can end up having unexpected consequences.</p>
              <p>Can you identify some unintended consequences that may relate to the following four innovations? (You may remember exploring these innovations if you have completed the Digital Ethics Bronze badge!)</p>
            </div>
              <ul class="list--innovations">
                <li><span class="tooltip-trigger jsTooltip" data-tooltip-content="#tooltip1_content"> Push notifications </span></li>
                <li><span>Autonomous vehicles</span></li>
                <li><span>Facebook “year in review” feature</span></li>
                <li><span class="tooltip-trigger jsTooltip" data-tooltip-content="#tooltip2_content">White hat hacking</span></li>
              </ul>
              <p><i>Please select all that apply.</i></p>
   
            <div class="answers flex flex--wrap gap--sm">
              <div>
                  <input type="checkbox" id="option3-1" class="options3" name="options3" value="1">
                  <label for="option3-1">An invasion of privacy</label>
              </div>   
              <div>
                  <input type="checkbox" id="option3-2" class="options3" name="options3" value="2">
                  <label for="option3-2">A disadvantage to other drivers on the road</label>
              </div>   
              <div>
                  <input type="checkbox" id="option3-3" class="options3" name="options3" value="3">
                  <label for="option3-3">Alerting a community about a missing person</label>
              </div>   
              <div>
                  <input type="checkbox" id="option3-4" class="options3" name="options3" value="4">
                  <label for="option3-4">A loss of driving jobs </label>
              </div>   
              <div>
                  <input type="checkbox" id="option3-5" class="options3" name="options3" value="5">
                  <label for="option3-5">An increase in cybercrime rates </label>
              </div>   
              <div>
                  <input type="checkbox" id="option3-6" class="options3" name="options3" value="6">
                  <label for="option3-6">Triggering negative emotions and distressing the user </label>
              </div>   
              <div>         
                  <input type="checkbox" id="option3-7" class="options3" name="options3" value="7">
                  <label for="option3-7">Risk of causing addiction and creating anxiety for the user</label>
              </div>   
              <div>
                <input type="checkbox" id="option3-8" class="options3" name="options3" value="8">
                <label for="option3-8">A decrease in user retention</label>
              </div>
            </div>

            <button type="button" class="btn submitButton" onclick="submitAnswerQuestion3()">
                Submit
            </button>
          </div>

          <div class='hide feedback success jsFeedbackSuccess-1 animate__animated animate__zoomIn animate__faster'
                id="jsFeedbackSuccess3-1">
                <div class="feedback__content">
                <p>
                Good job! That’s correct.
                </p>
                <button class="btn"
                  onclick="continueToNextQuestion()">Continue</button>
              </div>              
          </div>

          <div class='hide feedback fail jsFeedbackFail-0 animate__animated animate__zoomIn animate__faster'
                    id="jsFeedbackFail3-1">
                    <div class="feedback__content">
                      <p>Oops! Think about the uses of push notifications, white hat hacking, autonomous vehicles, and the “year in review” feature on Facebook. Can you identify four unintended consequences from the list that would apply to each example?</p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                      onclick="tryAgainQuestion3()">Try Again</button>
                    </div>  

          </div>

          <div class='hide feedback fail jsFeedbackFail-1 animate__animated animate__zoomIn animate__faster'
                id="jsFeedbackFail3-2">
                <div class="feedback__content">
                <p>That’s not quite right. You should select four answers. Please have another go.</p>
                <button class="btn"
                      onclick="tryAgainQuestion3()">Try Again</button>
              </div>

          </div>
        </div>
        <div id ="question4" class="question" style="display:none;">
         <div class="flex flex--column gap--lg flex--align-center"> 
              <div class="flex flex--column gap--sm col">
                <p>Technology has the power to change your attitude or behaviour and get you to do something you wouldn't otherwise do on purpose.</p>
                <p><i>Is this statement true or false?</i></p>
              </div>
              <div class="answers flex flex--wrap gap--sm">
                <div>
                  <input type="radio" id="option4-1" name="options4" class="options4" value="c">
                  <label for="option4-1">True </label>
                </div>
                <div>
                  <input type="radio" id="option4-2" name="options4" class="options4" value="d">
                  <label for="option4-2">False </label>
                </div>  
              </div>
              <button type="button" class="btn submitButton" onclick="submitAnswer()">
                    Submit
              </button>
              <div class='hide feedback success jsFeedbackSuccess-0 animate__animated animate__zoomIn animate__faster'
                    id="jsFeedbackSuccess4-0">
                  <div class="feedback__content">
                    <p>You’re right! Some technology is created specifically to change its users’ opinions, attitudes or behaviours to meet its goals. This is known as persuasive technology.</p>
                    <button class="btn "
                      onclick="continueToNextQuestion()">Continue</button>
                  </div>

              </div>

              <div class='hide feedback fail jsFeedbackFail-1 animate__animated animate__zoomIn animate__faster'
                    id="jsFeedbackFail4-1">
                    <div class="feedback__content">
                      <p> This statement is true. Some technology is created specifically to change its users’ opinions, attitudes, or behaviours to meet its goals. This is known as persuasive technology.</p>
                      <button class="btn"
                          onclick="continueToNextQuestion()">Continue</button>
                    </div>

            </div>
          </div>
        </div>
        <div id ="question5" class="question" style="display:none">
          <div class="flex flex--column gap--lg flex--align-center"> 
              <div class="flex flex--column gap--sm col">
                <p>Persuasive technology often uses psychological triggers to change its users’ opinions, attitudes, or behaviours to meet its goals.</p>

                <p>Can you identify some examples of persuasive technology in action?</p>

                <p><i>Please select all that apply.</i></p>
              </div>
              <div class="answers flex flex--wrap gap--sm"> 
                <div> 
                  <input type="checkbox" id="option5-1" class="options5" name="options5" value="1">
                 <label for="option5-1">“Likes” on social media</label>
                </div>
                <div>
                  <input type="checkbox" id="option5-2" class="options5" name="options5" value="2">
                  <label for="option5-2">Video conferencing</label>
                </div>
                <div>
                  <input type="checkbox" id="option5-3" class="options5" name="options5" value="3">
                  <label for="option5-3">Suggested products displayed by online shops</label>
                </div>
                <div>
                  <input type="checkbox" id="option5-4" class="options5" name="options5" value="4">
                  <label for="option5-4">Push notifications</label>
                </div>
              </div>
              <button type="button" class="btn submitButton" onclick="submitAnswerQuestion5()">
                  Submit
              </button>
              <div class='feedback success jsFeedbackSuccess-1 animate__animated animate__zoomIn animate__faster hide'
                  id="jsFeedbackSuccess5-1">
                  <div class="feedback__content">
                     <p id="para1"> That’s correct! “Likes” on social media have been proven to be interpreted by the brain as a “reward” which results in the release of dopamine (dopamine is known as the happy or “feel good” hormone!). That temporary feeling of happiness, belonging and approval each time a person receives a “like” can make them want more, check their device more often, and repeat behaviours that will get them “likes”.</p>
                    <p id="para2" class="hide ">Suggested products that are similar or complementary to what people are shopping for online can tempt people to buy more than they had originally intended.</p>
                    <p id="para3" class="hide ">Push notifications encourage people to check their devices more often, even at times when they may not really want to be on them.</p>
                    <p id="para4" class="hide para4">Technology can evolve super-fast, yet the human brain functions in much the same way as it has for centuries. The experts behind persuasive technology study people’s reactions to different situations and determine what triggers influence them, and then create algorithms based on that. People can use persuasive technology to try to change their behaviour for the better.</p>
                      <div id="nextParagraph" class="">
                        <button class="btn" onclick="nextParagraph()">Next</button>
                      </div>

                      <div id="continueNextTask" class="hide ">
                          <button class="btn" onclick="continueToFinalTask1()">Continue</button>
                      </div>

                  </div>
              </div>
                <div id="finalStatement" class=" continue hide">
                  <div class="col text-align--center flex--center flex flex--column gap--lg">
                    <div class="gap--sm flex flex--column">
                      <p> Great job! In short, digital ethics revolves around the question of how we should handle technology and data safely and responsibly.</p>
                      <p>Next, let’s take a look at the scale of impact that digital innovation can have.</p>
                    </div>
                    <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >
                      Continue
                    </a>
                  </div>
              </div>
              <div class='hide feedback fail jsFeedbackFail-0 animate__animated animate__zoomIn animate__faster'
                    id="jsFeedbackFail5-1">
                    <div class="feedback__content">
                      <p>This is an example of non-persuasive technology.
                            Non-persuasive technology serves as a tool that supports you in achieving your own goals, instead of working to pull you towards goals.
                      </p>
                      <button class="btn"
                            onclick="tryAgainQuestion5()">Try Again</button>
                    </div>
              </div>
              <div class='hide feedback fail jsFeedbackFail-1 animate__animated animate__zoomIn animate__faster'
                    id="jsFeedbackFail5-2">
                    <div class="feedback__content">
                      <p>Oops, that’s not quite right. Hint: there are three correct answers.</p>
                      <button class="btn"
                          onclick="tryAgainQuestion5()">Try Again</button>
                     </div>

              </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</main>

@endsection @section('javascript')

<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/step1.js"></script>
<script>
    $(document).ready(function () {
        var triggerMode = "hover";

        if ($("body").hasClass("touch")) {
            triggerMode = "click";
        }

        $(".jsTooltip").tooltipster({
            trigger: triggerMode,
            maxWidth: 350,
        });
    });
</script>
<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>

@endsection
