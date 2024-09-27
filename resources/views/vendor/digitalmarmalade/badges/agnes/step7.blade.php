@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<main>

    <section id="task7">

      <div>
          <div id="question1" class="question">
              <p>
                  Your job is to identify existing and potential ethical concerns and recommend solutions to minimise any unintentional negative impacts that the platform might have. It has gone through one round of beta testing and some results have come in for you to review as well.
              </p>
              <p>Don’t forget, you always have the Digital Ethics Guide on hand to help you.</p>
              <p>Would you like to explore the platform or results from the beta test first? Please choose.</p>

              <input type="radio" id="option1" name="options1" value="a" onclick="checkAnswer()">
              <label for="option1">Explore the Platform</label>
              <br>

              <input type="radio" id="option2" name="options1" value="b" onclick="checkAnswer()">
              <label for="option2">Explore the Beta Test Results</label>
              <br>

          </div>

          {{--1. If they click on Explore the Platform:  --}}
          <div id="question1-1" class="question " style="display:none;">
              <p>Which area of the platform would you like to explore?  Please select one beta tester result to review.</p>

              <input type="radio" id="option1-1" name="options1-1" value="a" onclick="checkAnswer1_1()">
              <label for="options1-1">Customised Lifestyle Plan</label>
              <br>

              <input type="radio" id="option1-2" name="options1-1" value="b" onclick="checkAnswer1_1()">
              <label for="option1-2">Public Forum</label>
              <br>
          </div>

          {{--1.1 If they click on: Customised Lifestyle Plan--}}
          <div id="subsection-1-1" class="hide ">
              <ul id="list-1.1" class="flex flex--center">
                  <li id="dot-1-1-1" class="dot-1 active">1</li>
                  <li id="dot-1-1-2" class="dot-2">2</li>
                  <li id="dot-1-1-3" class="dot-3">3</li>
              </ul>
              <div id="question1-1-1" class="question " style="display:none;">
                  <p>
                      Users complete a self-assessment survey, and the platform builds a meal and exercise plan to help them reach their optimum fitness level.

                      The algorithm used to determine the user’s optimal fitness level and to design the lifestyle plan is based on data from the fitness levels of professional athletes which ensures they are based on real people and the plans provided have been proven to be effective.
                  </p>
                  <div>
                      <p>What is a potential ethical concern with the meal and exercise plan feature?</p>

                      <input type="radio" id="option1-1-1" class="options1-1-1" name="options1-1-1" value="1">
                      <label for="options1-1-1">Unrepresentative data </label>
                      <br>

                      <input type="radio" id="option1-1-2" class="options1-1-1" name="options1-1-1" value="1">
                      <label for="option1-1-2">Representative data</label>
                      <br>

                      <input type="radio" id="option1-1-3" class="options1-1-1" name="options1-1-1" value="1">
                      <label for="option1-1-3">Unrealistic data</label>
                      <br>

                      <input type="radio" id="option1-1-4" class="options1-1-1" name="options1-1-1" value="1">
                      <label for="option1-1-4">Realistic data</label>
                      <br>

                      <button type="button" id="submitButton1_1_1" class="submitButton" onclick="checkAnswer1_1_1()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess1-1-1">
                          <p class="">That’s correct! The algorithm is based on data from the fitness levels of professional athletes which are not representative of the average person. </p>
                          <p>Professional athletes have much more advanced levels of physical capability due to their physiological build and training and their fitness levels may not be a safe or realistic goal for the average person.  </p>

                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion1_1_1()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1_1_1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              A representative sample is a subset of a population that seeks to accurately reflect the characteristics of the larger group. If the data used was representative, it would probably not be an ethical concern. Most people using this app are not professional athletes, so the data is not representative.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_1_1()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1_1_2">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Oops, that’s not quite right. Think about the data that the company has used to build the algorithm and how the results that it produces might include or exclude certain users.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_1_1()">Try Again</button>
                      </div>
                  </div>
              </div>
              <div id="question1-1-2" class="question " style="display:none;">

                  <div>
                      <p>What can unrepresentative data lead to?</p>


                      <input type="radio" id="option1-1-1-1" name="options1-1-2" value="a">
                      <label for="option1-1-1-1">Data breach</label>
                      <br>

                      <input type="radio" id="option1-1-1-2" name="options1-1-2" value="b">
                      <label for="option1-1-1-2">Data inconsistency</label>
                      <br>

                      <input type="radio" id="option1-1-1-3" name="options1-1-2" value="c">
                      <label for="option1-1-1-3">Algorithmic bias</label>
                      <br>

                      <input type="radio" id="option1-1-1-4" name="options1-1-2" value="d">
                      <label for="option1-1-1-4">Algorithmic error</label>
                      <br>

                      <button type="button" id="submitButton1_1_2" class="submitButton" onclick="checkAnswer1_1_2()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess1-1-2-1">
                          <p class="">Well done! Unrepresentative data used to program an algorithm will lead to algorithmic bias, which is a system that creates “unfair” outcomes. In this context, the algorithm will create a lifestyle plan that may not be suitable for the user.</p>

                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion1_1_2()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-1-2-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              A data breach is when private data is copied, transmitted, viewed, or stolen by someone unauthorised to do so. Unrepresentative data is unlikely to lead to a data breach. Please try again!
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_1_2()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-1-2-2">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Data inconsistency is when different versions of the same data appear in different places. Unrepresentative data is unlikely to lead to data inconsistency. Please try again!
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_1_2()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-1-2-3">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Algorithmic error is an error resulting from using the wrong algorithm or method for achieving the desired result. Unrepresentative data is unlikely to lead to algorithmic error. Please try again!
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_1_2()">Try Again</button>
                      </div>

                  </div>
              </div>
              <div id="question1-1-3" class="question " style="display:none;">
                  <p>
                      What possible solutions could you propose to improve the meal and exercise plan feature that is currently flawed by algorithmic bias?

                  </p>
                  <div>
                      <p>Please select all that apply.</p>

                      <input type="checkbox" id="option1-1-1" class="options1-1-1" name="options1-1-3" value="1">
                      <label for="option1-1-1">Provide more general recommendations for how users can improve their lifestyle rather than prescribing a lifestyle plan which could potentially be unsuitable and unsafe</label>
                      <br>

                      <input type="checkbox" id="option1-1-2" class="options1-1-1" name="options1-1-3" value="1">
                      <label for="option1-1-2">Increase the number of professional athletes who you gather data from</label>
                      <br>

                      <input type="checkbox" id="option1-1-3" class="options1-1-1" name="options1-1-3" value="1">
                      <label for="option1-1-3">Gather data from certified nutritionists instead of professional athletes</label>
                      <br>

                      <input type="checkbox" id="option1-1-4" class="options1-1-1" name="options1-1-3" value="1">
                      <label for="option1-1-4">Use data from a representative subset of the population</label>
                      <br>

                      <button type="button" id="submitButton1_1_3" class="submitButton" onclick="checkAnswer1_1_3()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess1-1-3-1">
                          <p class="">That’s correct, both solutions will help work towards minimising ethical concerns for the customised lifestyle plan feature. Well done!</p>

                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion1_1_3()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-1-3-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              You’re close! You should select more than one answer though.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_1_3()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-1-3-2">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              You should select two answers.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_1_3()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-1-3-3">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Oops! That’s not quite right. Please consider the options carefully and select only the ones that will help minimise the risk of the ethical concerns already identified.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_1_3()">Try Again</button>
                      </div>
                  </div>
              </div>
          </div>

          <div id="subsection-1-2" class="hide ">
              {{--1.2 If they click on: Public Forum--}}
              <ul id="list-1.2" class="flex flex--center">
                  <li id="dot-1-2-1" class="dot-1 active">1</li>
                  <li id="dot-1-2-2" class="dot-2">2</li>
                  <li id="dot-1-2-3" class="dot-3">3</li>
                  <li id="dot-1-2-4" class="dot-4">4</li>
              </ul>
              <div id="question1-2-1" class="question " style="display:none;">
                  <p>
                      This health and wellness platform has a community aspect to it which takes the form of a public forum.
                      Anyone can access it and they can use it to post about their health and wellness journey, share their struggles, connect with others, share their tips and advice, or spread positivity and encouragement.
                  </p>
                  <div>
                      <p>What is a potential ethical concern with this forum?</p>

                      <input type="radio" id="option1-2-1-1" class="options1-2-1-1" name="options1-2-1-1" value="1">
                      <label for="option1-2-1-1">People will not want to use a public forum to discuss health and wellness </label>
                      <br>

                      <input type="radio" id="option1-2-1-2" class="options1-2-1-1" name="options1-2-1-1" value="1">
                      <label for="option1-2-1-2">Negativity, criticism, and triggers [Tooltip: In the context of mental health, triggers are events or situations someone experiences that cause a negative reaction.] being posted on the public forum</label>
                      <br>

                      <input type="radio" id="option1-2-1-3" class="options1-2-1-1" name="options1-2-1-1" value="1">
                      <label for="option1-2-1-3">Competitors will be able to steal useful health and wellness tips </label>
                      <br>

                      <input type="radio" id="option1-2-1-4" class="options1-2-1-1" name="options1-2-1-1" value="1">
                      <label for="option1-2-1-4">The forum is free to access and the company is missing out on revenue opportunities</label>
                      <br>

                      <button type="button" id="submitButton1_2_1" class="submitButton" onclick="checkAnswer1_2_1()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess1-2-1-1">
                          <p class="">That’s correct! Public forums that allow anyone to join and post whatever they want may result in people posting content that is negative, discouraging and potentially even offensive or harmful. This also goes against the company’s core values.</p>
                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion1_2_1()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-2-1-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Oops, that’s not quite right. Read through the answers carefully and identify the option that poses the highest risk to users.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_2_1()">Try Again</button>
                      </div>

                  </div>
              </div>
              <div id="question1-2-2" class="question " style="display:none;">
                  <div>
                      <p>What can these negative posts lead to?</p>

                      <input type="radio" id="option1-2-2-1" class="options1-2-2-1" name="options1-2-2-1" value="1">
                      <label for="option1-2-2-1">Validation of scientifically proven methods to improve health and wellbeing</label>
                      <br>

                      <input type="radio" id="option1-2-2-2" class="options1-2-2-1" name="options1-2-2-1" value="1">
                      <label for="option1-2-2-2">A customised health and fitness plan for the user to implement</label>
                      <br>

                      <input type="radio" id="option1-2-2-3" class="options1-2-2-1" name="options1-2-2-1" value="1">
                      <label for="option1-2-2-3">Impact on the mental wellbeing of users </label>
                      <br>

                      <input type="radio" id="option1-2-2-4" class="options1-2-2-1" name="options1-2-2-1" value="1">
                      <label for="option1-2-2-4">An optimistic mindset for users to embark on their wellness journey with</label>
                      <br>

                      <button type="button" id="submitButton1_2_2" class="submitButton" onclick="checkAnswer1_2_2()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess1-2-2-1">
                          <p class="">That’s correct! Negativity on the forum may affect the mental wellbeing of users. It could even lead to them feeling worse off than if they were not using the health and wellness platform at all!</p>
                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion1_2_2()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-2-2-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Hmm, that’s not quite right. Read the answers carefully and please try again.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_2_2()">Try Again</button>
                      </div>

                  </div>
              </div>
              <div id="question1-2-3" class="question " style="display:none;">
                  <p>How could the start-up reduce the risk of negativity, criticism and triggering content being posted on the public forum?</p>
                  <div>
                      <p>Please select all that apply.</p>

                      <input type="checkbox" id="option1-2-3-1" class="options1-2-3-1" name="options1-2-3-1" value="1">
                      <label for="option1-2-3-1">Make it non-public and only for registered platform users</label>
                      <br>

                      <input type="checkbox" id="option1-2-3-2" class="options1-2-3-1" name="options1-2-3-1" value="1">
                      <label for="option1-2-3-2">Allow users to flag inappropriate posts</label>
                      <br>

                      <input type="checkbox" id="option1-2-3-3" class="options1-2-3-1" name="options1-2-3-1" value="1">
                      <label for="option1-2-3-3">Explicitly state that this forum is to spread encouragement and positivity only and warn against posting anything that might be triggering</label>
                      <br>

                      <input type="checkbox" id="option1-2-3-4" class="options1-2-3-1" name="options1-2-3-1" value="1">
                      <label for="option1-2-3-4">Implement a monitoring system within the team so that a designated person regularly checks and moderates the forum</label>
                      <br>

                      <button type="button" id="submitButton1_2_3" class="submitButton" onclick="checkAnswer1_2_3()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess1-2-3-1">
                          <p class="">That’s correct! All of these options are possible solutions that will help enhance the safety of the forum.</p>
                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion1_2_3()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-2-3-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Almost! Are there any others?
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_2_3()">Try Again</button>
                      </div>

                  </div>
              </div>
              <div id="question1-2-4" class="question " style="display:none;">
                  <p>How could the start-up help to create a positive online community and promote the benefits of the platform?</p>
                  <div>
                      <p>Please select all that apply.</p>

                      <input type="checkbox" id="option1-2-4-1" class="options1-2-4-1" name="options1-2-4-1" value="1">
                      <label for="option1-2-4-1">Encourage users to be kind and respectful when posting or commenting on the forum</label>
                      <br>

                      <input type="checkbox" id="option1-2-4-2" class="options1-2-4-1" name="options1-2-4-1" value="1">
                      <label for="option1-2-4-2">Encourage users to share as much personal information as possible</label>
                      <br>

                      <input type="checkbox" id="option1-2-4-3" class="options1-2-4-1" name="options1-2-4-1" value="1">
                      <label for="option1-2-4-3">Feature testimonials of real users sharing how this platform has helped them on their health and wellness journey</label>
                      <br>

                      <input type="checkbox" id="option1-2-4-4" class="options1-2-4-1" name="options1-2-4-1" value="1">
                      <label for="option1-2-4-4">Include advertisements for health supplements on the forum</label>
                      <br>

                      <input type="checkbox" id="option1-2-4-5" class="options1-2-4-1" name="options1-2-4-1" value="1">
                      <label for="option1-2-4-5">Communicate to users that this is a safe, positive and inclusive space for everyone to share their personal experiences</label>
                      <br>

                      <button type="button" id="submitButton1_2_4" class="submitButton" onclick="checkAnswer1_2_4()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess1-2-4-1">
                          <p class="">That’s correct, these actions will help foster a healthy, positive community and help users see the benefits of the platform. Good job!</p>
                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion1_2_4()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-2-4-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Very close! Hint: There are three correct answers.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_2_4()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-2-4-2">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              You’re close! Read the options carefully and try again (Hint: there are 3 correct answers).
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_2_4()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail1-2-4-3">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Oops! That’s not quite right. Please consider the options carefully and select only the ones that will help to create a positive online community and promote the benefits of the platform.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain1_2_4()">Try Again</button>
                      </div>

                  </div>
              </div>
          </div>

          {{--2. If they click on Explore the Beta Test Results:--}}
          <div id="question2-1" class="question " style="display:none;">
              <p>Which area of the platform would you like to explore?  Please select one beta tester result to review.</p>

              <input type="radio" id="option2-1" name="options2-1" value="a" onclick="checkAnswer2_1()">
              <label for="option2-1">Beta Tester 1</label>
              <br>

              <input type="radio" id="option2-2" name="options2-1" value="b" onclick="checkAnswer2_1()">
              <label for="option2-2">Beta Tester 2</label>
              <br>
          </div>

          <div id="subsection-2-1" class="hide ">
              {{--2.1 If they click on: Beta Tester 1--}}
              <ul id="list-2.1" class="flex flex--center">
                  <li id="dot-2-1-1" class="dot-1 active">1</li>
                  <li id="dot-2-1-2" class="dot-2">2</li>
                  <li id="dot-2-1-3" class="dot-3">3</li>
              </ul>
              <div id="question2-1-1" class="question " style="display:none;">
                  <p>
                      What concerns does this feedback raise?
                  </p>
                  <div>
                      <p>Please select all that apply.</p>

                      <input type="checkbox" id="option2-1-1-1" class="options2-1-1" name="options2-1-1" value="1">
                      <label for="option2-1-1-1">The advertisements will help users find the products they need</label>
                      <br>

                      <input type="checkbox" id="option2-1-1-2" class="options2-1-1" name="options2-1-1" value="1">
                      <label for="option2-1-1-2">Lack of transparency about data storage and usage</label>
                      <br>

                      <input type="checkbox" id="option2-1-1-3" class="options2-1-1" name="options2-1-1" value="1">
                      <label for="option2-1-1-3">Use of personal data without proper consent</label>
                      <br>

                      <input type="checkbox" id="option2-1-1-4" class="options2-1-1" name="options2-1-1" value="1">
                      <label for="option2-1-1-4">The company oversimplified the terms and conditions for the user</label>
                      <br>

                      <button type="button" id="submitButton2_1_1" class="submitButton" onclick="checkAnswer2_1_1()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess2-1-1">
                          <p class="">That’s correct! Both are valid potential concerns raised by the beta tester.</p>

                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion2_1_1()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-1-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Close! Hint: there is more than one answer.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_1_1()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-1-2">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Hmm that’s not quite right. If you need help, take a look at the Digital Ethics Guide again and check which of the options above would be potential ethical concerns in this scenario.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_1_1()">Try Again</button>
                      </div>
                  </div>
              </div>
              <div id="question2-1-2" class="question " style="display:none;">

                  <div>
                      <p>What can these concerns lead to? </p>
                      <p>Please select all that apply.</p>


                      <input type="checkbox" id="option2-1-2-1" name="options2-1-2" value="a">
                      <label for="option2-1-2-1">The users getting assigned the wrong lifestyle plan</label>
                      <br>

                      <input type="checkbox" id="option2-1-2-2" name="options2-1-2" value="b">
                      <label for="option2-1-2-2">Impact on the mental wellbeing of users</label>
                      <br>

                      <input type="checkbox" id="option2-1-2-3" name="options2-1-2" value="c">
                      <label for="option2-1-2-3">Certain user groups being excluded by the platform</label>
                      <br>

                      <input type="checkbox" id="option2-1-2-4" name="options2-1-2" value="d">
                      <label for="option2-1-2-4">Privacy violations</label>
                      <br>

                      <button type="button" id="submitButton2_1_2" class="submitButton" onclick="checkAnswer2_1_2()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess2-1-2">
                          <p class="">That’s correct! Both the violation of users’ privacy and the potential for impacting their wellbeing go against the company’s core values. </p>

                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion2_1_2()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-1-2-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Close! Hint: there is more than one answer.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_1_2()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-1-2-2">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Oops, that’s not quite right. What could the two potential concerns that you identified in the previous question result in for the users?
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_1_2()">Try Again</button>
                      </div>

                  </div>
              </div>
              <div id="question2-1-3" class="question " style="display:none;">
                  <p>
                      What possible solutions could you propose for the lack of clarity and transparency about the use of cookies on the platform?
                  </p>
                  <div>
                      <p>Please select all that apply.</p>

                      <input type="checkbox" id="option2-1-3-1" class="options2-1-3" name="options2-1-3" value="1">
                      <label for="option2-1-3-1">Implement a cookies consent prompt for anyone who visits the platform</label>
                      <br>

                      <input type="checkbox" id="option2-1-3-2" class="options2-1-3" name="options2-1-3" value="1">
                      <label for="option2-1-3-2">Assure the customers that the advertisements are normal and that there is nothing to worry about</label>
                      <br>

                      <input type="checkbox" id="option2-1-3-3" class="options2-1-3" name="options2-1-3" value="1">
                      <label for="option2-1-3-3">Provide a clear, simple, and concise explanation of the terms, conditions and privacy policies for users to review and agree to before they create their account</label>
                      <br>

                      <input type="checkbox" id="option2-1-3-4" class="options2-1-3" name="options2-1-3" value="1">
                      <label for="option2-1-3-4">No solution is required, online advertisements have nothing to do with the company launching the health and wellness platform</label>
                      <br>

                      <button type="button" id="submitButton2_1_3" class="submitButton" onclick="checkAnswer2_1_3()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess2-1-3">
                          <p class="">That’s correct, both are possible solutions that will help the company communicate to their users about their cookie policy and get proper consent beforehand. Nice work!</p>

                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion2_1_3()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-1-3-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              You should select two out of the four options available.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_1_3()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-1-3-2">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              You’re close! You should select one more answer.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_1_3()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-1-3-3">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Hmm, that’s not quite right. Read through the options carefully and think about which options could help the organisation to properly communicate its cookie policy to users.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_1_3()">Try Again</button>
                      </div>
                  </div>
              </div>
          </div>

          <div id="subsection-2-2" class="hide ">
              {{--2.2 If they click on: Beta Tester 2--}}
              <ul id="list-2.2" class="flex flex--center">
                  <li id="dot-2-2-1" class="dot-1 active">1</li>
                  <li id="dot-2-2-2" class="dot-2">2</li>
                  <li id="dot-2-2-3" class="dot-3">3</li>
              </ul>
              <div id="question2-2-1" class="question " style="display:none;">
                  <p>
                      What is a potential concern in this report?
                  </p>
                  <div>
                      <p>What is a potential ethical concern with the meal and exercise plan feature?</p>

                      <input type="radio" id="option2-2-1-1" class="options2-2-1" name="options2-2-1" value="1">
                      <label for="option2-2-1-1">There is no procedure in place for when there is an issue</label>
                      <br>

                      <input type="radio" id="option2-2-1-2" class="options2-2-1" name="options2-2-1" value="1">
                      <label for="option2-2-1-2">User data is being breached</label>
                      <br>

                      <input type="radio" id="option2-2-1-3" class="options2-2-1" name="options2-2-1" value="1">
                      <label for="option2-2-1-3">Lack of transparency about data storage and usage</label>
                      <br>

                      <input type="radio" id="option2-2-1-4" class="options1-1-1" name="options2-2-1" value="1">
                      <label for="option2-2-1-4">The user is overreacting and might affect the experience of others on the platform</label>
                      <br>

                      <button type="button" id="submitButton2_2_1" class="submitButton" onclick="checkAnswer2_2_1()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess2-2-1">
                          <p class="">That’s correct! The user has identified an issue and wants to let someone from the company know but is unable to do so. </p>
                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion2_2_1()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-2-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Hmm, that’s not quite right. Please read through the options carefully and try again.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_2_1()">Try Again</button>
                      </div>
                  </div>
              </div>
              <div id="question2-2-2" class="question " style="display:none;">

                  <div>
                      <p>What can this lead to?</p>
                      <p>Please select all that apply.</p>

                      <input type="checkbox" id="option2-2-2-1" name="options2-2-2" value="a">
                      <label for="option1">The user’s personal data might get leaked</label>
                      <br>

                      <input type="checkbox" id="option2-2-2-2" name="options2-2-2" value="b">
                      <label for="option2">The user might ruin the experience on the platform for someone else</label>
                      <br>

                      <input type="checkbox" id="option2-2-2-3" name="options2-2-2" value="c">
                      <label for="option3">Issues being ignored or missed, leaving them unresolved and potentially affecting more users</label>
                      <br>

                      <input type="checkbox" id="option2-2-2-4" name="options2-2-2" value="d">
                      <label for="option4">Issues might not get resolved in the proper way and in a timely manner </label>
                      <br>

                      <button type="button" id="submitButton2_2_2" class="submitButton" onclick="checkAnswer2_2_2()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess2-2-2-1">
                          <p class="">Well done! When there is no clear system in place for users to report their issues or concerns, the company will not get the information they need to step in or prevent any additional issues from arising. And when issues aren’t addressed properly, the company can be at risk of losing its users!</p>

                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion2_2_2()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-2-2-1">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Close! Hint: there is more than one answer.
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_2_2()">Try Again</button>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-2-2-2">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Hmm, that’s not quite right. What might happen if there is no system or procedure in place for when users need to report an issue?
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_2_2()">Try Again</button>
                      </div>
                  </div>
              </div>
              <div id="question2-2-3" class="question " style="display:none;">
                  <p>
                      What possible solution could you propose for the lack of procedures in place for issues to be reported?

                  </p>
                  <div>
                      <p>Please select all that apply.</p>

                      <input type="checkbox" id="option2-2-3-1" class="options2-2-3" name="options2-2-3" value="1">
                      <label for="option1">Add a form or button that is clear and easy to find on the platform for users to report issues </label>
                      <br>

                      <input type="checkbox" id="option2-2-3-2" class="options2-2-3" name="options2-2-3" value="1">
                      <label for="option2">Designate a person on the team to be held accountable when things go wrong</label>
                      <br>

                      <input type="checkbox" id="option2-2-3-3" class="options2-2-3" name="options2-2-3" value="1">
                      <label for="option3">Create procedures for when users report an issue or when things go wrong</label>
                      <br>

                      <input type="checkbox" id="option2-2-3-4" class="options2-2-3" name="options2-2-3" value="1">
                      <label for="option4">Ensure there is a designated team member who monitors the company’s social media accounts to see if any users tag them in posts where they are reporting issues and concerns</label>
                      <br>

                      <button type="button" id="submitButton2_2_3" class="submitButton" onclick="checkAnswer2_2_3()">
                          Submit
                      </button>
                  </div>

                  <div>
                      <div class='hide jsFeedbackSuccess feedbackSuccess'
                           id="jsFeedbackSuccess2-2-3">
                          <p class="">That’s right, all of these are possible solutions that will help enhance the user experience and help with internal procedures to make sure that all complaints, issues, and concerns are recorded and addressed properly. Great work!</p>
                          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                             onclick="continueToNextQuestion2_2_3()">Next</a>
                      </div>

                      <div class='hide jsFeedbackFail feedback'
                           id="jsFeedbackFail2-2-3">
                          <p class="animate__animated animate__fadeInLeft animate__fast">
                              Almost! Are there more?
                          </p>
                          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                                  onclick="tryAgain2_2_3()">Try Again</button>
                      </div>
                  </div>
              </div>
          </div>


      </div>

      <div>
          <div class='hide jsFeedbackSuccess1 feedbackSuccess'
               id="jsFeedbackSuccess1">
              <p class="">That’s correct, well done! Digital ethics really is everyone’s responsibility and there is usually at least one thing that someone in any role at any level can do to help ensure that the organisation is operating ethically. </p>
          </div>

          <div class='hide jsFeedbackFail feedback'
               id="jsFeedbackFail1">
              <p class="animate__animated animate__fadeInLeft animate__fast">
                  Oops! Please make sure you have selected an action for every role.
              </p>
              <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                      onclick="tryAgain()">Try Again</button>
          </div>

          <div class='hide jsFeedbackFail feedback'
               id="jsFeedbackFail2">
              <p class="animate__animated animate__fadeInLeft animate__fast">
                  Oops, that’s not quite right. Please read through the options carefully and select the responsibility that is most appropriate for the role.
              </p>
              <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                      onclick="tryAgain()">Try Again</button>
          </div>
      </div>
    </section>

    <section>
        <div class='hide jsFeedbackSuccessAll feedback'
             id="jsFeedbackSuccessAll">
            <p class="">
                Congratulations! The start-up is very grateful for your support, and they are pleased with your analysis and insightful recommendations.

                During your time with them, you’ve demonstrated the power of digital ethics in helping to resolve some of the complexities of digital projects. Success for the start-up is now much more likely - thanks to your efforts in bringing in the voices of users and enabling the team to see the developments being proposed from their perspectives.

                They are so impressed with your work that they are considering creating a full-time position for a digital ethicist in-house and you are their primary candidate. You have done a great job applying the knowledge that you have learnt so far!
            </p>
            <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
               onclick="finishContinue()">Continue</a>
        </div>
    </section>

</main>
@endsection


@section('javascript')
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step7.js"></script>

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
