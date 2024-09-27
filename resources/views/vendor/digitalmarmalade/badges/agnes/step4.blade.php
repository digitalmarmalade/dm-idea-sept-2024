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
          <li class="dot-6">6</li>
      </ul>
      <div class="questions">
          {{--Question 1/6--}}
          <div>
              <div id ="question1" class="question">
                  <p>
                      Think about the intended purposes of the “Like” button.
                      Is this feature fulfilling its intended purpose?
                  </p>

                  <input type="radio" id="option1" name="options1" value="a">
                  <label for="option1">Yes</label>
                  <br>

                  <input type="radio" id="option2" name="options1" value="b">
                  <label for="option2">No</label>
                  <br>

                  <button type="button" id="checkButton1" class="checkButton" onclick="checkAnswer1()">
                      Submit
                  </button>
              </div>
              <div>
                  <div class='hide jsFeedbackSuccess1'
                       id="jsFeedbackSuccess1">
                      <p class="">That’s correct! The "Like” button lets the author know that another user likes, enjoys or supports their post.</p>
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                         onclick="continueToNextQuestion()">Next</a>
                  </div>

                  <div class='hide jsFeedbackFail1'
                       id="jsFeedbackFail1">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Interesting answer… At face value, the “Like” button fulfils its intended purpose because it does let the author know that someone likes their post.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="nextInputText()">Next</button>
                  </div>
              </div>

              <div class='hide jsInputText1' id="jsInputText1">
                  <p>Why don't you think it’s fulfilling its purpose? Please enter your ideas in the box below.</p>
                  <textarea id="inputTextArea1" name="inputTextArea1" placeholder="Please write a minimum of 10 words in the space below"></textarea>
                  <br>
                  <button type="button" id="checkTextButton1" class="checkTextButton" onclick="checkInputText()">
                      Submit
                  </button>
              </div>

              <div>
                  <div class='hide jsFeedbackSuccessInputText1'
                       id="jsFeedbackSuccessInputText1">
                      <p class="">You may be onto something… let’s keep going!</p>
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                         onclick="continueToNextQuestion()">Next</a>
                  </div>

                  <div class='hide jsFeedbackFailInputText1'
                       id="jsFeedbackFailInputText1">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          You won’t be able to move on until you enter an answer. You can’t go wrong here, it’s entirely up to you.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgainInputText()">Try Again</button>
                  </div>
              </div>
          </div>

          {{--Question 2/6--}}
          <div>
              <div id ="question2" class="question"  style="display:none;">
                  <p>
                      Think about some of the benefits of the “Like” button.
                      Who might benefit from this feature?
                      Please select all that apply
                  </p>

                  <input type="checkbox" id="option1" class="options2" name="options2" value="1">
                  <label for="option1">The people who post content </label>
                  <br>

                  <input type="checkbox" id="option2" class="options2" name="options2" value="1">
                  <label for="option2">The people who “like” content</label>
                  <br>

                  <input type="checkbox" id="option3" class="options2" name="options2" value="1">
                  <label for="option3">Everyone on the platform who can see that content has been “liked”</label>
                  <br>

                  <button type="button" id="checkButton2" class="checkButton" onclick="checkAnswer2()">
                      Submit
                  </button>
              </div>
              <div>
                  <div class='hide jsFeedbackSuccess2'
                       id="jsFeedbackSuccess2">
                      <p class="">That’s correct, all the people listed can benefit from this feature. The author can gauge the support that they are receiving from other users, users have a way to show their appreciation or support of a post, and everyone else on the platform can see posts that have received acknowledgement and appreciation.</p>
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                         onclick="continueToNextQuestion()">Next</a>
                  </div>

                  <div class='hide jsFeedbackFail2'
                       id="jsFeedbackFail2">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          You’re close! Are there any other individuals or groups that you think could benefit?
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="nextInputText()">Next</button>
                  </div>
              </div>

              <div class='hide jsInputText2' id="jsInputText2">
                  <p>Can you think of any other benefits of the “Like” button that haven’t been mentioned yet?
                      Enter your ideas in the box below.</p>
                  <textarea id="inputTextArea2" name="inputTextArea2" placeholder="Please write a minimum of 10 words in the space below"></textarea>
                  <br>
                  <button type="button" id="checkTextButton2" class="checkTextButton" onclick="checkInputText()">
                      Submit
                  </button>
              </div>

              <div>
                  <div class='hide jsFeedbackSuccessInputText2'
                       id="jsFeedbackSuccessInputText2">
                      <p class="">You may be onto something… let’s keep going!</p>
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                         onclick="continueToNextQuestion()">Next</a>
                  </div>

                  <div class='hide jsFeedbackFailInputText2'
                       id="jsFeedbackFailInputText2">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          You won’t be able to move on until you enter an answer. If you don’t think there are any other benefits of the “Like” button, you can just type “no”.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgainInputText()">Try Again</button>
                  </div>
              </div>
          </div>

          {{--Question 3/6--}}
          <div>
              <div>
                  <div id ="question3" class="question"  style="display:none;">
                      <p>
                          Think about the people who will interact with the “Like” button.
                          Who might be most at risk of a negative experience because of the “Like” button?
                          Please select all that apply

                      </p>

                      <input type="checkbox" id="option1" class="options3" name="options3" value="1">
                      <label for="option1">The people who post content </label>
                      <br>

                      <input type="checkbox" id="option2" class="options3" name="options3" value="1">
                      <label for="option2">The people who “like” content</label>
                      <br>

                      <input type="checkbox" id="option3" class="options3" name="options3" value="1">
                      <label for="option3">Everyone on the platform who can see that content has been “liked”</label>
                      <br>

                      <button type="button" id="checkButton3" class="checkButton" onclick="checkAnswer3()">
                          Submit
                      </button>
                  </div>
                  <div>
                      <div class='hide jsFeedbackSuccess3'
                           id="jsFeedbackSuccess3">
                          <p class="">That’s correct! But why? Do you know how they may be at risk? Let’s keep going and work this out.</p>
                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail3'
                           id="jsFeedbackFail3">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Hmm… think about how each of the groups listed might be at risk and compare them to try to identify which group has the highest risk.
                              Tip: You may find it helpful to write down how you think each group could be at risk as a brainstorm.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgainQuestion3()">Try Again</button>
                      </div>
                  </div>
              </div>
          </div>

          {{--Question 4/6--}}
          <div>
              <div id ="question4" class="question" style="display:none;">
                  <p>
                      You have just identified that people who post content are most at risk of having a negative experience as a result of the “Like” button.
                      To determine what some potential negative experiences might be, let’s use the framework to investigate further.
                      You can access  the framework by clicking  on the button above.
                      The framework has four areas that can help us assess what or where ethical risks may be. The four areas are: security and privacy, wellbeing, transparency, and accountability.
                      For the people who post content, which area has the highest risk for ethical concerns?
                  </p>

                  <input type="checkbox" id="option1" class="options4" name="options4" value="1">
                  <label for="option1">Security & Privacy</label>
                  <br>

                  <input type="checkbox" id="option2" class="options4" name="options4" value="1">
                  <label for="option2">Wellbeing</label>
                  <br>

                  <input type="checkbox" id="option3" class="options4" name="options4" value="1">
                  <label for="option3">Transparency</label>
                  <br>

                  <input type="checkbox" id="option4" class="options4" name="options4" value="1">
                  <label for="option4">Accountability</label>
                  <br>

                  <button type="button" id="checkButton4" class="checkButton" onclick="checkAnswer4()">
                      Submit
                  </button>
              </div>
              <div>
                  <div class='hide jsFeedbackSuccess4'
                       id="jsFeedbackSuccess4">
                      <p class="">That’s correct! Now let’s dive deeper.</p>
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                         onclick="continueToNextQuestion()">Next</a>
                  </div>

                  <div class='hide jsFeedbackFail4-0'
                       id="jsFeedbackFail4-0">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Oops, that’s not quite right. Please select just one focus area.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgainQuestion4()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail4-1'
                       id="jsFeedbackFail4-1">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Although the “Like” button gathers information like a user’s preferences for certain types of content, it does not put the user’s personal information, privacy, or security at high risk. Please try again.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgainQuestion4()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail4-2'
                       id="jsFeedbackFail4-2">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          An ethical concern within transparency could be that the company behind the social media platform may not have clearly and thoroughly communicated all the information about the nature of the product or service and its potential risks. However, this is not the ethical concern with the highest direct risk to the people posting content. Please try again.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgainQuestion4()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail4-3'
                       id="jsFeedbackFail4-3">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          An ethical concern within accountability might be that the company behind the social media platform may not have a designated individual or team ready to react if something goes wrong with the “Like” button, however, this is not the ethical concern with the highest risk of this feature for the people posting content. Please try again.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgainQuestion4()">Try Again</button>
                  </div>
              </div>
          </div>

          {{--Question 5/6--}}
          <div>
              <div id ="question5" class="question" style="display:none;">
                  <h2>Wellbeing</h2>
                  <p>
                      According to the wellbeing section of the framework, which of the following questions need to be considered? (Hint: If you need a refresher, you can access  the framework by clicking  on the button above.)
                      Please select all that apply.
                  </p>

                  <input type="checkbox" id="option1" class="options5" name="options5" value="1">
                  <label for="option1">Do those affected have control over the usage or impact of your technology?</label>
                  <br>

                  <input type="checkbox" id="option2" class="options5" name="options5" value="1">
                  <label for="option2">Who makes the key decisions when it comes to how this technology is designed, implemented, and distributed?</label>
                  <br>

                  <input type="checkbox" id="option3" class="options5" name="options5" value="1">
                  <label for="option3">Are people able to choose whether they use it or take part in it? Would not using it prevent them from achieving something important?</label>
                  <br>

                  <input type="checkbox" id="option4" class="options5" name="options5" value="1">
                  <label for="option4">Are users being deceived?</label>
                  <br>

                  <input type="checkbox" id="option5" class="options5" name="options5" value="1">
                  <label for="option5">Is the use and handling of data responsible and compliant with legislation?</label>
                  <br>

                  <input type="checkbox" id="option6" class="options5" name="options5" value="1">
                  <label for="option6">Is user behaviour being manipulated?</label>
                  <br>

                  <input type="checkbox" id="option7" class="options5" name="options5" value="1">
                  <label for="option7">Might the technology affect user emotions and/or their mental health?</label>
                  <br>

                  <button type="button" id="checkButton5" class="checkButton" onclick="checkAnswer5()">
                      Submit
                  </button>
              </div>
              <div>
                  <div class='hide jsFeedbackSuccess5'
                       id="jsFeedbackSuccess5">
                      <p class="">You have correctly identified the questions that need to be considered within the wellbeing section of the framework, well done!</p>
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                         onclick="continueToNextQuestion()">Next</a>
                  </div>

                  <div class='hide jsFeedbackFail5-1'
                       id="jsFeedbackFail5-1">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Hint: You need to select five answers.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgainQuestion5()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail5-2'
                       id="jsFeedbackFail5-2">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Oops, that’s not quite right. You might find it helpful to take another look at the framework before trying again.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgainQuestion5()">Try Again</button>
                  </div>
              </div>
          </div>

          {{--Question 6/6--}}
          <div>
              <div id ="question6" class="question" style="display:none;">
                  <p>
                      Now, using these questions (we have listed the questions from wellbeing below) to guide your thinking, consider how the “Like” button may impact those who post content.
                      Hint: Run through these one by one and decide which one(s) are relevant to the question at hand. Then, use the relevant questions to help you dig deeper.
                  </p>

                  <ul>
                      <li>Do those affected have control over the usage or impact of your technology?</li>
                      <li>Are people able to choose whether they use it or take part in it?</li>
                      <li>Would not using it prevent them from achieving something important?</li>
                      <li>Are users being deceived?</li>
                      <li>Is user behaviour being manipulated?</li>
                      <li>Might the technology affect user emotions and /or their mental health negatively?</li>
                  </ul>

                  <p>When you are ready, please answer the following question: Can you identify the ethical concern below that people posting content may experience?</p>


                  <input type="checkbox" id="option1" class="options6" name="options6" value="1">
                  <label for="option1">People who receive too few likes may get bored of the platform and abandon it</label>
                  <br>

                  <input type="checkbox" id="option2" class="options6" name="options6" value="1">
                  <label for="option2">People use the “Like” button as a gauge of social support and when a post receives little recognition, it can cause feelings of anxiety, insecurity, and depression</label>
                  <br>

                  <input type="checkbox" id="option3" class="options6" name="options6" value="1">
                  <label for="option3">People who get too many likes on their posts might suffer from an inflated ego</label>
                  <br>

                  <button type="button" id="checkButton6" class="checkButton" onclick="checkAnswer6()">
                      Submit
                  </button>
              </div>
              <div>
                  <div class='hide jsFeedbackSuccess6'
                       id="jsFeedbackSuccess6">
                      <p class="">
                          You got it! Although the “Like” button was created to promote positivity and is a way for users to show support for a post, studies show that “likes”, or a perceived lack of “likes” could unfortunately cause depression in social media users. This can also lead to users feeling inferior after comparing themselves to their seemingly more successful, or better “liked” peers.
                      </p>

                      <p>
                          <strong>Did you know?</strong>
                          Did you know that this “Like” button case study is based on true events which are supported by scientific studies? The person who invented the “Like” button has since written that he doesn’t like it very much anymore and considers this invention as a contributor to “time poorly spent”. To read more about this, you can look up former Facebook engineer, Justin Rosenstein.
                      </p>

                      <p>
                          A big and positive difference could be made in the world if everybody thought about technology the way digital ethicists do!
                      </p>

                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                         onclick="continueToNextQuestion()">Continue</a>
                  </div>

                  <div class='hide jsFeedbackFail6'
                       id="jsFeedbackFail6">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Hmm that’s not quite right. Read through each of the statements carefully and try again.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgainQuestion6()">Try Again</button>
                  </div>
              </div>
          </div>
      </div>

  </section>

</main>
@endsection
@section('javascript')
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step4.js"></script>

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
