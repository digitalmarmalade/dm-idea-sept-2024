@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
@endsection @section('page')

<main>

  <section>

    @include('vendor.digitalmarmalade.badges.digital-ethics.header',
    ['title' => 'Header'])
    <ol class="step-counter flex gap--sm flex--align-center" data-aos="flip-up" data-aos-duration="1500" data-aos-delay="500">

      <li class="step completed">1</li>
      <li class="step completed">2</li>
      <li class="step completed">3</li>
      <li class="step completed">4</li>
      <li class="step completed">5</li>
      <li class="step completed">6</li>
      <li class="step active">7</li>
      <li class="step">8</li>
    </ol>
    <div class="container">
      <div class='box box--step-header bg--green flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
        <div class="flex flex--column gap box__copy">
          <h1>Your Challenge as a Digital Ethicist</h1>
          <p>You have been hired as a digital ethicist by a start-up that is getting ready to launch a health and wellness platform. The platform allows people to get customised meal and exercise plans and includes a public forum where users can connect and share in each other’s wellness journeys.</p>
        </div>
        <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--dilemmas.svg" alt="" />
      </div>
      <div class="col flex flex--column gap--sm text-align--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
        <p>The team is still small and is made up of three health enthusiasts. The company’s core values are respect, inclusion, accountability and continuous learning. This is their mission:</p>
        <p class="box box--mission flex flex--center"><span>To provide a safe space for people to learn, connect and develop habits that protect and enhance physical and mental wellbeing.<span></p>
        <p>The team needs your help to assess the platform they have created for ethical concerns.</p>
        <p>Your job is to identify existing and potential ethical concerns and recommend solutions to minimise any unintentional negative impacts that the platform might have. It has gone through one round of <span class="tooltip-trigger jsTooltip" data-tooltip-content="#tooltip8_content">beta testing</span> and some results have come in for you to review as well.</p>
        <p>Don’t forget, you always have the Digital Ethics Guide to help you. You may click on the "Digital Ethics Guide" button above each question if you need to refer to it at any time.</p>
        <p id="sentence1">Would you like to explore the platform or results from the beta test first? Please choose.</p>

      </div>

      <div class="col text-align--center hide" id="sentence2">
        <h2 class="text-align--center">What would you like to explore next?</h2>
      </div>


      <div id="question1" class="question container--question-step-7 col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200">
        <div class="flex flex-1">
          <input type="radio" id="option1" name="options1" value="a" onclick="checkAnswer()">
          <label class="has-img" for="option1">
            <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--explore-platform.svg" alt="" />
            <span>Explore Platform</span>
          </label>
        </div>
        <div class="flex flex-1">
          <input type="radio" id="option2" name="options1" value="b" onclick="checkAnswer()">
          <label class="has-img" for="option2">
            <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--explore-beta-tests.svg" alt="" />
            <span>Explore Beta Test Results</span>
          </label>
        </div>
      </div>
    </div>

    {{--1. If they click on Explore the Platform:  --}}
    <div id="question1-1" class="question flex flex--column flex--center gap--xlg  col animate__animated animate__fadeIn animate__slow" style="display:none;">
      <div class="flex flex--column gap--xlg flex--center container flex--center container">
        <div class="col text-align--center">
          <h2 class="text-align--center">Which area of the platform would you like to explore?</h2>
        </div>
        <div class="container--question-step-7">
          <div class="flex flex-1">
            <input type="radio" id="option1-1" name="options1-1" value="a" onclick="checkAnswer1_1()">
            <label class="has-img" for="option1-1">
              <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--customised-life-style-plan.svg" alt="" />
              <span>Customised Lifestyle Plan</span>
            </label>
          </div>
          <div class="flex flex-1">
            <input type="radio" id="option1-2" name="options1-1" value="b" onclick="checkAnswer1_1()">
            <label class="has-img" for="option1-2">
              <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--public-forum.svg" alt="" />
              <span>Public Forum</span>
            </label>
          </div>
        </div>
      </div>
    </div>

    {{--2. If they click on Explore the Beta Test Results:--}}
    <div id="question2-1" class="question" style="display:none;">
      <div class="flex flex--column gap--xlg flex--center container flex--center container">
        <p class="text-align--center">Please select one beta tester result to review.</p>
        <div class="container--question-step-7">
          <div class="flex flex-1">
            <input type="radio" id="option2-1" name="options2-1" value="a" onclick="checkAnswer2_1()">
            <label class="has-img" for="option2-1">
              <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--beta-tester-1.svg" alt="" />
              <span>Beta Tester 1</span>
            </label>
          </div>
          <div class="flex flex-1">
            <input type="radio" id="option2-2" name="options2-1" value="b" onclick="checkAnswer2_1()">
            <label class="has-img" for="option2-2">
              <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--beta-tester-2.svg" alt="" />
              <span>Beta Tester 2</span>
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class='hide jsFeedbackSuccessAll feedback success animate__animated animate__fadeInUp animate__slow' id="jsFeedbackSuccessAll">
      <div class="container">
        <div class="col flex flex--column flex--center gap--sm text-align--center">
          <p>Congratulations! The start-up is very grateful for your support, and they are pleased with your analysis and insightful recommendations.</p>
          <p>During your time with them, you’ve demonstrated the power of digital ethics in helping to resolve some of the complexities of digital projects. Success for the start-up is now much more likely - thanks to your efforts in bringing in the voices of users and enabling the team to see the developments being proposed from their perspectives.</p>
          <p>They are so impressed with your work that they are considering creating a full-time position for a digital ethicist in-house and you are their primary candidate. You have done a great job applying the knowledge that you have learnt so far!
          </p>

        </div>
        <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600" data-aos-anchor-placement="bottom-bottom"
            onclick=" finishContinue()">Continue</a>
      </div>
    </div>
  </section>

  {{--1.1 If they click on: Customised Lifestyle Plan--}}
  <section id="subsection-1-1" class="hide task flex flex--column animate__animated animate__fadeIn animate__slow">
    <div class="container no-gap">
      @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-customised-lifestyle-plan')
      <div class="box box--task bg--offwhite">
        <div class="container--steps-with-button">
          <ul id="list-1.1" class="step-counter flex gap--sm flex--align-center">
            <li id="dot-1-1-1" class="step dot-1 active">1</li>
            <li id="dot-1-1-2" class="step dot-2">2</li>
            <li id="dot-1-1-3" class="step dot-3">3</li>
          </ul>
          <button class="btn secondary" onclick="openFramework()"> Digital Ethics Guide</button>
        </div>

        <div id="question1-1-1" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">
            <p>What is a potential ethical concern with the meal and exercise plan feature?</p>
            <div class="answers flex flex--wrap gap--sm">
              <div>
                <input type="radio" id="option1-1-1" class="options1-1-1" name="options1-1-1" value="1">
                <label for="option1-1-1">Unrepresentative data </label>
              </div>
              <div>
                <input type="radio" id="option1-1-2" class="options1-1-1" name="options1-1-1" value="1">
                <label for="option1-1-2">Representative data</label>
              </div>
              <div>
                <input type="radio" id="option1-1-3" class="options1-1-1" name="options1-1-1" value="1">
                <label for="option1-1-3">Unrealistic data</label>
              </div>
              <div>
                <input type="radio" id="option1-1-4" class="options1-1-1" name="options1-1-1" value="1">
                <label for="option1-1-4">Realistic data</label>
              </div>
            </div>
            <button type="button" id="submitButton1_1_1" class="submitButton btn" onclick="checkAnswer1_1_1()">
              Submit
            </button>
          </div>

          <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess1-1-1">
            <div class="feedback__content">
              <p class="">That’s correct! The algorithm is based on data from the fitness levels of professional athletes which are not representative of the average person. </p>
              <p>Professional athletes have much more advanced levels of physical capability due to their physiological build and training and their fitness levels may not be a safe or realistic goal for the average person. </p>

              <a class="btn" onclick="continueToNextQuestion1_1_1()">Next</a>
            </div>
          </div>

          <div class='hide jsFeedbackFail feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1_1_1">
            <div class="feedback__content">
              <p>
                A representative sample is a subset of a population that seeks to accurately reflect the characteristics of the larger group. If the data used was representative, it would probably not be an ethical concern. Most people using this app are not professional athletes, so the data is not representative.
              </p>
              <button class="btn " onclick="tryAgain1_1_1()">Try Again</button>
            </div>
          </div>

          <div class='hide jsFeedbackFail feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1_1_2">
            <div class="feedback__content">
              <p>
                Oops, that’s not quite right. Think about the data that the company has used to build the algorithm and how the results that it produces might include or exclude certain users.
              </p>
              <button class="btn " onclick="tryAgain1_1_1()">Try Again</button>
            </div>
          </div>
        </div>

        <div id="question1-1-2" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">
            <p>What can unrepresentative data lead to?</p>
            <div class="answers flex flex--wrap gap--sm">
              <div>
                <input type="radio" id="option1-1-1-1" name="options1-1-2" value="a">
                <label for="option1-1-1-1">Data breach</label>
              </div>
              <div>
                <input type="radio" id="option1-1-1-2" name="options1-1-2" value="b">
                <label for="option1-1-1-2">Data inconsistency</label>
              </div>
              <div>
                <input type="radio" id="option1-1-1-3" name="options1-1-2" value="c">
                <label for="option1-1-1-3">Algorithmic bias</label>
              </div>
              <div>
                <input type="radio" id="option1-1-1-4" name="options1-1-2" value="d">
                <label for="option1-1-1-4">Algorithmic error</label>
              </div>
            </div>
            <button type="button" id="submitButton1_1_2" class="submitButton btn" onclick="checkAnswer1_1_2()">
              Submit
            </button>

            <div>
              <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess1-1-2-1">
                <div class="feedback__content">
                  <p class="">Well done! Unrepresentative data used to program an algorithm will lead to algorithmic bias, which is a system that creates “unfair” outcomes. In this context, the algorithm will create a lifestyle plan that may not be suitable for the user.</p>

                  <a class="btn " onclick="continueToNextQuestion1_1_2()">Next</a>
                </div>
              </div>

              <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-1-2-1">
                <div class="feedback__content">
                  <p>
                    A data breach is when private data is copied, transmitted, viewed, or stolen by someone unauthorised to do so. Unrepresentative data is unlikely to lead to a data breach. Please try again!
                  </p>

                  <button class="btn " onclick="tryAgain1_1_2()">Try Again</button>
                </div>
              </div>

              <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-1-2-2">
                <div class="feedback__content">
                  <p>
                    Data inconsistency is when different versions of the same data appear in different places. Unrepresentative data is unlikely to lead to data inconsistency. Please try again!
                  </p>

                  <button class="btn " onclick="tryAgain1_1_2()">Try Again</button>
                </div>
              </div>

              <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-1-2-3">
                <div class="feedback__content">
                  <p>
                    Algorithmic error is an error resulting from using the wrong algorithm or method for achieving the desired result. Unrepresentative data is unlikely to lead to algorithmic error. Please try again!
                  </p>
                  <button class="btn " onclick="tryAgain1_1_2()">Try Again</button>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div id="question1-1-3" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">
            <div class="col flex flex--center gap--sm flex--column">
              <p>
                What possible solutions could you propose to improve the meal and exercise plan feature that is currently flawed by algorithmic bias?

              </p>
              <p><i>Please select all that apply.</i></p>
            </div>
            <div class="answers flex flex--wrap gap--sm">

              <div>
                <input type="checkbox" id="option1-3-1" class="options1-1-1" name="options1-1-3" value="1">
                <label for="option1-3-1">Provide more general recommendations for how users can improve their lifestyle rather than prescribing a lifestyle plan which could potentially be unsuitable and unsafe</label>
              </div>
              <div>
                <input type="checkbox" id="option1-3-2" class="options1-1-1" name="options1-1-3" value="1">
                <label for="option1-3-2">Increase the number of professional athletes who you gather data from</label>
              </div>
              <div>
                <input type="checkbox" id="option1-3-3" class="options1-1-1" name="options1-1-3" value="1">
                <label for="option1-3-3">Gather data from certified nutritionists instead of professional athletes</label>
              </div>
              <div>
                <input type="checkbox" id="option1-3-4" class="options1-1-1" name="options1-1-3" value="1">
                <label for="option1-3-4">Use data from a representative subset of the population</label>
              </div>
            </div>
            <button type="button" id="submitButton1_1_3" class="submitButton btn" onclick="checkAnswer1_1_3()">
              Submit
            </button>

            <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess1-1-3-1">
              <div class="feedback__content">
                <p class="">That’s correct, both solutions will help work towards minimising ethical concerns for the customised lifestyle plan feature. Well done!</p>

                <button class="btn " onclick="continueToNextQuestion1_1_3()">Next</button>
              </div>

            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-1-3-1">
              <div class="feedback__content">
                <p>
                  You’re close! You should select more than one answer though.
                </p>
                <button class="btn " onclick="tryAgain1_1_3()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-1-3-2">
              <div class="feedback__content">
                <p>
                  You should select two answers.
                </p>
                <button class="btn " onclick="tryAgain1_1_3()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-1-3-3">
              <div class="feedback__content">
                <p>
                  Oops! That’s not quite right. Please consider the options carefully and select only the ones that will help minimise the risk of the ethical concerns already identified.
                </p>
                <button class="btn " onclick="tryAgain1_1_3()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-1-3-4">
              <div class="feedback__content">
                <p>
                  You're close! One of your answers is correct. Please try again.
                </p>
                <button class="btn " onclick="tryAgain1_1_3()">Try Again</button>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </section>

  {{--1.2 If they click on: Public Forum--}}
  <section id="subsection-1-2" class="hide task flex flex--column animate__animated animate__fadeIn animate__slow">
    <div class="container no-gap">
      @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-public-forum')
      <div class="box box--task bg--offwhite">
        <div class="container--steps-with-button">
          <ul id="list-1.2" class="step-counter flex gap--sm flex--align-center">
            <li id="dot-1-2-1" class="step dot-1 active">1</li>
            <li id="dot-1-2-2" class="step dot-2">2</li>
            <li id="dot-1-2-3" class="step dot-3">3</li>
            <li id="dot-1-2-4" class="step dot-4">4</li>
          </ul>
          <button class="btn secondary" onclick="openFramework()"> Digital Ethics Guide</button>
        </div>
        <div id="question1-2-1" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">

            <p>What is a potential ethical concern with this forum?</p>
            <div class="answers flex flex--wrap gap--sm">
              <div>
                <input type="radio" id="option1-2-1-1" class="options1-2-1-1" name="options1-2-1-1" value="1">
                <label for="option1-2-1-1">People will not want to use a public forum to discuss health and wellness </label>
              </div>
              <div>
                <input type="radio" id="option1-2-1-2" class="options1-2-1-1" name="options1-2-1-1" value="1">
                <label class="has-tooltip" for="option1-2-1-2">Negativity, criticism, and <span class="tooltip-trigger jsTooltip" data-tooltip-content="#tooltip9_content">triggers</span> being posted on the public forum</label>
              </div>
              <div>
                <input type="radio" id="option1-2-1-3" class="options1-2-1-1" name="options1-2-1-1" value="1">
                <label for="option1-2-1-3">Competitors will be able to steal useful health and wellness tips </label>
              </div>
              <div>
                <input type="radio" id="option1-2-1-4" class="options1-2-1-1" name="options1-2-1-1" value="1">
                <label for="option1-2-1-4">The forum is free to access and the company is missing out on revenue opportunities</label>
              </div>
            </div>
            <button type="button" id="submitButton1_2_1" class="submitButton btn" onclick="checkAnswer1_2_1()">
              Submit
            </button>


            <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess1-2-1-1">
              <div class="feedback__content">
                <p class="">That’s correct! Public forums that allow anyone to join and post whatever they want may result in people posting content that is negative, discouraging and potentially even offensive or harmful. This also goes against the company’s core values.</p>
                <a class="btn " onclick="continueToNextQuestion1_2_1()">Next</a>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-2-1-1">
              <div class="feedback__content">
                <p>
                  Oops, that’s not quite right. Read through the answers carefully and identify the option that poses the highest risk to users.
                </p>
                <button class="btn " onclick="tryAgain1_2_1()">Try Again</button>
              </div>
            </div>

          </div>
        </div>
        <div id="question1-2-2" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">

            <p>What can these negative posts lead to?</p>
            <div class="answers flex flex--wrap gap--sm">
              <div>
                <input type="radio" id="option1-2-2-1" class="options1-2-2-1" name="options1-2-2-1" value="1">
                <label for="option1-2-2-1">Validation of scientifically proven methods to improve health and wellbeing</label>
              </div>
              <div>
                <input type="radio" id="option1-2-2-2" class="options1-2-2-1" name="options1-2-2-1" value="1">
                <label for="option1-2-2-2">A customised health and fitness plan for the user to implement</label>
              </div>
              <div>
                <input type="radio" id="option1-2-2-3" class="options1-2-2-1" name="options1-2-2-1" value="1">
                <label for="option1-2-2-3">Impact on the mental wellbeing of users </label>
              </div>
              <div>
                <input type="radio" id="option1-2-2-4" class="options1-2-2-1" name="options1-2-2-1" value="1">
                <label for="option1-2-2-4">An optimistic mindset for users to embark on their wellness journey with</label>
              </div>
            </div>
            <button type="button" id="submitButton1_2_2" class="submitButton btn" onclick="checkAnswer1_2_2()">
              Submit
            </button>

            <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess1-2-2-1">
              <div class="feedback__content">
                <p class="">That’s correct! Negativity on the forum may affect the mental wellbeing of users. It could even lead to them feeling worse off than if they were not using the health and wellness platform at all!</p>
                <a class="btn " onclick="continueToNextQuestion1_2_2()">Next</a>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-2-2-1">
              <div class="feedback__content">
                <p>
                  Hmm, that’s not quite right. Read the answers carefully and please try again.
                </p>
                <button class="btn " onclick="tryAgain1_2_2()">Try Again</button>
              </div>
            </div>

          </div>
        </div>

        <div id="question1-2-3" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">
            <div class="flex flex--column gap--sm flex--center">
              <p>How could the start-up reduce the risk of negativity, criticism and triggering content being posted on the public forum?</p>
              <p><i>Please select all that apply.</i></p>
            </div>
            <div class="answers flex flex--wrap gap--sm">
              <div>
                <input type="checkbox" id="option1-2-3-1" class="options1-2-3-1" name="options1-2-3-1" value="1">
                <label for="option1-2-3-1">Make it non-public and only for registered platform users</label>
              </div>
              <div>
                <input type="checkbox" id="option1-2-3-2" class="options1-2-3-1" name="options1-2-3-1" value="1">
                <label for="option1-2-3-2">Allow users to flag inappropriate posts</label>
              </div>
              <div>
                <input type="checkbox" id="option1-2-3-3" class="options1-2-3-1" name="options1-2-3-1" value="1">
                <label for="option1-2-3-3">Explicitly state that this forum is to spread encouragement and positivity only and warn against posting anything that might be triggering</label>
              </div>
              <div>
                <input type="checkbox" id="option1-2-3-4" class="options1-2-3-1" name="options1-2-3-1" value="1">
                <label for="option1-2-3-4">Implement a monitoring system within the team so that a designated person regularly checks and moderates the forum</label>
              </div>
            </div>
            <button type="button" id="submitButton1_2_3" class="submitButton btn" onclick="checkAnswer1_2_3()">
              Submit
            </button>

            <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess1-2-3-1">
              <div class="feedback__content">
                <p class="">That’s correct! All of these options are possible solutions that will help enhance the safety of the forum.</p>
                <a class="btn " onclick="continueToNextQuestion1_2_3()">Next</a>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-2-3-1">
              <div class="feedback__content">
                <p>
                  Almost! Are there any others?
                </p>
                <button class="btn " onclick="tryAgain1_2_3()">Try Again</button>
              </div>
            </div>


          </div>

        </div>

        <div id="question1-2-4" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">
            <div class="flex flex--column gap--sm flex--center">
              <p>How could the start-up help to create a positive online community and promote the benefits of the platform?</p>
              <p><i>Please select all that apply.</i></p>
            </div>
            <div class="answers flex flex--wrap gap--sm flex--justify-center">
              <div>
                <input type="checkbox" id="option1-2-4-1" class="options1-2-4-1" name="options1-2-4-1" value="1">
                <label for="option1-2-4-1">Encourage users to be kind and respectful when posting or commenting on the forum</label>
              </div>
              <div>
                <input type="checkbox" id="option1-2-4-2" class="options1-2-4-1" name="options1-2-4-1" value="1">
                <label for="option1-2-4-2">Encourage users to share as much personal information as possible</label>
              </div>
              <div>
                <input type="checkbox" id="option1-2-4-3" class="options1-2-4-1" name="options1-2-4-1" value="1">
                <label for="option1-2-4-3">Feature testimonials of real users sharing how this platform has helped them on their health and wellness journey</label>
              </div>
              <div>
                <input type="checkbox" id="option1-2-4-4" class="options1-2-4-1" name="options1-2-4-1" value="1">
                <label for="option1-2-4-4">Include advertisements for health supplements on the forum</label>
              </div>
              <div>
                <input type="checkbox" id="option1-2-4-5" class="options1-2-4-1" name="options1-2-4-1" value="1">
                <label for="option1-2-4-5">Communicate to users that this is a safe, positive and inclusive space for everyone to share their personal experiences</label>
              </div>
            </div>
            <button type="button" id="submitButton1_2_4" class="submitButton btn" onclick="checkAnswer1_2_4()">
              Submit
            </button>

            <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess1-2-4-1">
              <div class="feedback__content">
                <p class="">That’s correct, these actions will help foster a healthy, positive community and help users see the benefits of the platform. Good job!</p>
                <button class="btn " onclick="continueToNextQuestion1_2_4()">Next</button>
              </div>

            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-2-4-1">
              <div class="feedback__content">
                <p>
                  Very close! Hint: There are three correct answers.
                </p>
                <button class="btn " onclick="tryAgain1_2_4()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-2-4-2">
              <div class="feedback__content">
                <p>
                  You’re close! Read the options carefully and try again (Hint: there are 3 correct answers).
                </p>
                <button class="btn " onclick="tryAgain1_2_4()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail1-2-4-3">
              <div class="feedback__content">
                <p>
                  Oops! That’s not quite right. Please consider the options carefully and select only the ones that will help to create a positive online community and promote the benefits of the platform.
                </p>
                <button class="btn " onclick="tryAgain1_2_4()">Try Again</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{--2.1 If they click on: Beta Tester 1--}}
  <section id="subsection-2-1" class="hide task flex flex--column animate__animated animate__fadeIn animate__slow">
    <div class="container no-gap">
      @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-beta-tester-1')
      <div class="box box--task bg--offwhite">
        <div class="container--steps-with-button">
          <ul id="list-2.1" class="step-counter flex gap--sm flex--align-center">
            <li id="dot-2-1-1" class="step dot-1 active">1</li>
            <li id="dot-2-1-2" class="step dot-2">2</li>
            <li id="dot-2-1-3" class="step dot-3">3</li>
          </ul>
          <button class="btn secondary" onclick="openFramework()"> Digital Ethics Guide</button>
        </div>


        {{--If they click on: Beta Tester 1 - Q1--}}
        <div id="question2-1-1" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">
            <div class="flex flex--column gap--sm flex--center">
              <p>
                What concerns does this feedback raise?
              </p>
              <p><i>Please select all that apply.</i></p>
            </div>
            <div class="answers flex flex--wrap gap--sm">

              <div>
                <input type="checkbox" id="option2-1-1-1" class="options2-1-1" name="options2-1-1" value="1">
                <label for="option2-1-1-1">The advertisements will help users find the products they need</label>
              </div>
              <div>
                <input type="checkbox" id="option2-1-1-2" class="options2-1-1" name="options2-1-1" value="1">
                <label for="option2-1-1-2">Lack of transparency about data storage and usage</label>
              </div>
              <div>
                <input type="checkbox" id="option2-1-1-3" class="options2-1-1" name="options2-1-1" value="1">
                <label for="option2-1-1-3">Use of personal data without proper consent</label>
              </div>
              <div>
                <input type="checkbox" id="option2-1-1-4" class="options2-1-1" name="options2-1-1" value="1">
                <label for="option2-1-1-4">The company oversimplified the terms and conditions for the user</label>
              </div>
            </div>
            <button type="button" id="submitButton2_1_1" class="submitButton btn" onclick="checkAnswer2_1_1()">
              Submit
            </button>
            <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess2-1-1">
              <div class="feedback__content">
                <p class="">That’s correct! Both are valid potential concerns raised by the beta tester.</p>

                <button class="btn " onclick="continueToNextQuestion2_1_1()">Next</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-1-1">
              <div class="feedback__content">
                <p>
                  Close! Hint: there is more than one answer.
                </p>
                <button class="btn " onclick="tryAgain2_1_1()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-1-2">
              <div class="feedback__content">
                <p>
                  Hmm that’s not quite right. If you need help, take a look at the Digital Ethics Guide again and check which of the options above would be potential ethical concerns in this scenario.
                </p>
                <button class="btn " onclick="tryAgain2_1_1()">Try Again</button>
              </div>
            </div>
          </div>
        </div>

        {{--If they click on: Beta Tester 1 - Q2--}}
        <div id="question2-1-2" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">
            <div class="flex flex--column gap--sm flex--center">

              <p>What can these concerns lead to? </p>
              <p><i>Please select all that apply.</i></p>
            </div>

            <div class="answers flex flex--wrap gap--sm">
              <div>
                <input type="checkbox" id="option2-1-2-1" name="options2-1-2" value="a">
                <label for="option2-1-2-1">The users getting assigned the wrong lifestyle plan</label>
              </div>
              <div>
                <input type="checkbox" id="option2-1-2-2" name="options2-1-2" value="b">
                <label for="option2-1-2-2">Impact on the mental wellbeing of users</label>
              </div>
              <div>
                <input type="checkbox" id="option2-1-2-3" name="options2-1-2" value="c">
                <label for="option2-1-2-3">Certain user groups being excluded by the platform</label>
              </div>
              <div>
                <input type="checkbox" id="option2-1-2-4" name="options2-1-2" value="d">
                <label for="option2-1-2-4">Privacy violations</label>
              </div>
            </div>
            <button type="button" id="submitButton2_1_2" class="submitButton btn" onclick="checkAnswer2_1_2()">
              Submit
            </button>
            <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess2-1-2">
              <div class="feedback__content">
                <p class="">That’s correct! Both the violation of users’ privacy and the potential for impacting their wellbeing go against the company’s core values. </p>

                <button class="btn " onclick="continueToNextQuestion2_1_2()">Next</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-1-2-1">
              <div class="feedback__content">
                <p>
                  Close! Hint: there is more than one answer.
                </p>
                <button class="btn " onclick="tryAgain2_1_2()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-1-2-2">
              <div class="feedback__content">
                <p>
                  Oops, that’s not quite right. What could the two potential concerns that you identified in the previous question result in for the users?
                </p>
                <button class="btn " onclick="tryAgain2_1_2()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-1-2-3">
              <div class="feedback__content">
                <p>
                  Very close! Hint: There are only two correct answers.
                </p>
                <button class="btn " onclick="tryAgain2_1_2()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-1-2-4">
              <div class="feedback__content">
                <p>
                  Very close! Hint: There are two correct answers and one of your answers is correct.
                </p>
                <button class="btn " onclick="tryAgain2_1_2()">Try Again</button>
              </div>
            </div>
          </div>






        </div>

        <div id="question2-1-3" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">
            <div class="flex flex--column gap--sm flex--center">
              <p>
                What possible solutions could you propose for the lack of clarity and transparency about the use of cookies on the platform?
              </p>
              <p><i>Please select all that apply.</i></p>
            </div>
            <div class="answers flex flex--wrap gap--sm">
              <div>
                <input type="checkbox" id="option2-1-3-1" class="options2-1-3" name="options2-1-3" value="1">
                <label for="option2-1-3-1">Implement a cookies consent prompt for anyone who visits the platform</label>
              </div>
              <div>
                <input type="checkbox" id="option2-1-3-2" class="options2-1-3" name="options2-1-3" value="1">
                <label for="option2-1-3-2">Assure the customers that the advertisements are normal and that there is nothing to worry about</label>
              </div>
              <div>
                <input type="checkbox" id="option2-1-3-3" class="options2-1-3" name="options2-1-3" value="1">
                <label for="option2-1-3-3">Provide a clear, simple, and concise explanation of the terms, conditions and privacy policies for users to review and agree to before they create their account</label>
              </div>
              <div>
                <input type="checkbox" id="option2-1-3-4" class="options2-1-3" name="options2-1-3" value="1">
                <label for="option2-1-3-4">No solution is required, online advertisements have nothing to do with the company launching the health and wellness platform</label>
              </div>
            </div>
            <button type="button" id="submitButton2_1_3" class="submitButton btn" onclick="checkAnswer2_1_3()">
              Submit
            </button>

            <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess2-1-3">
              <div class="feedback__content">
                <p class="">That’s correct, both are possible solutions that will help the company communicate to their users about their cookie policy and get proper consent beforehand. Nice work!</p>

                <a class="btn " onclick="continueToNextQuestion2_1_3()">Next</a>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-1-3-1">
              <div class="feedback__content">
                <p>
                  You should select two out of the four options available.
                </p>
                <button class="btn " onclick="tryAgain2_1_3()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-1-3-2">
              <div class="feedback__content">
                <p>
                  You’re close! You should select one more answer.
                </p>
                <button class="btn " onclick="tryAgain2_1_3()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-1-3-3">
              <div class="feedback__content">
                <p>
                  Hmm, that’s not quite right. Read through the options carefully and think about which options could help the organisation to properly communicate its cookie policy to users.
                </p>
                <button class="btn " onclick="tryAgain2_1_3()">Try Again</button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  {{--2.2 If they click on: Beta Tester 2--}}
  <section id="subsection-2-2" class="hide task flex flex--column animate__animated animate__fadeIn animate__slow">
    <div class="container no-gap">
      @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-beta-tester-2')
      <div class="box box--task bg--offwhite">

        <div class="container--steps-with-button">
          <ul id="list-2.2" class="step-counter flex gap--sm flex--align-center">
            <li id="dot-2-2-1" class="step dot-1 active">1</li>
            <li id="dot-2-2-2" class="step dot-2">2</li>
            <li id="dot-2-2-3" class="step dot-3">3</li>
          </ul>
          <button class="btn secondary" onclick="openFramework()"> Digital Ethics Guide</button>
        </div>

        <div id="question2-2-1" class="question" style="display:none;">
          <div class="flex flex--column gap--xlg flex--center container">
            <div class="flex flex--column gap--sm flex--center">
              <p>
                What is a potential concern in this report?
              </p>
            </div>
            <div class="answers flex flex--wrap gap--sm">
              <div>
                <input type="radio" id="option2-2-1-1" class="options2-2-1" name="options2-2-1" value="1">
                <label for="option2-2-1-1">There is no procedure in place for when there is an issue</label>
              </div>
              <div>
                <input type="radio" id="option2-2-1-2" class="options2-2-1" name="options2-2-1" value="1">
                <label for="option2-2-1-2">User data is being breached</label>
              </div>
              <div>
                <input type="radio" id="option2-2-1-3" class="options2-2-1" name="options2-2-1" value="1">
                <label for="option2-2-1-3">Lack of transparency about data storage and usage</label>
              </div>
              <div>
                <input type="radio" id="option2-2-1-4" class="options1-1-1" name="options2-2-1" value="1">
                <label for="option2-2-1-4">The user is overreacting and might affect the experience of others on the platform</label>
              </div>
            </div>
            <button type="button" id="submitButton2_2_1" class="submitButton btn" onclick="checkAnswer2_2_1()">
              Submit
            </button>

            <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess2-2-1">
              <div class="feedback__content">
                <p class="">That’s correct! The user has identified an issue and wants to let someone from the company know but is unable to do so. </p>
                <a class="btn " onclick="continueToNextQuestion2_2_1()">Next</a>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-2-1">
              <div class="feedback__content">
                <p>
                  Hmm, that’s not quite right. Please read through the options carefully and try again.
                </p>
                <button class="btn " onclick="tryAgain2_2_1()">Try Again</button>
              </div>
            </div>
          </div>
        </div>

        {{--If they click on: Beta Tester 2 - Q2--}}
        <div id="question2-2-2" class="question" style="display:none;">

          <div class="flex flex--column gap--xlg flex--center container">
            <div class="flex flex--column gap--sm flex--center">
              <p>What can this lead to?</p>
              <p><i>Please select all that apply.</i></p>
            </div>
            <div class="answers flex flex--wrap gap--sm">
              <div>
                <input type="checkbox" id="option2-2-2-1" name="options2-2-2" value="a">
                <label for="option2-2-2-1">The user’s personal data might get leaked</label>
              </div>
              <div>
                <input type="checkbox" id="option2-2-2-2" name="options2-2-2" value="b">
                <label for="option2-2-2-2">The user might ruin the experience on the platform for someone else</label>
              </div>
              <div>
                <input type="checkbox" id="option2-2-2-3" name="options2-2-2" value="c">
                <label for="option2-2-2-3">Issues being ignored or missed, leaving them unresolved and potentially affecting more users</label>
              </div>
              <div>
                <input type="checkbox" id="option2-2-2-4" name="options2-2-2" value="d">
                <label for="option2-2-2-4">Issues might not get resolved in the proper way and in a timely manner </label>
              </div>
            </div>

            <button type="button" id="submitButton2_2_2" class="submitButton btn" onclick="checkAnswer2_2_2()">
              Submit
            </button>
            <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess2-2-2-1">
              <div class="feedback__content">
                <p class="">Well done! When there is no clear system in place for users to report their issues or concerns, the company will not get the information they need to step in or prevent any additional issues from arising. And when issues aren’t addressed properly, the company can be at risk of losing its users!</p>

                <a class="btn " onclick="continueToNextQuestion2_2_2()">Next</a>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-2-2-1">
              <div class="feedback__content">
                <p>
                  Close! Hint: there is more than one answer.
                </p>
                <button class="btn " onclick="tryAgain2_2_2()">Try Again</button>
              </div>
            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-2-2-2">
              <div class="feedback__content">
                <p>
                  Hmm, that’s not quite right. What might happen if there is no system or procedure in place for when users need to report an issue?
                </p>
                <button class="btn " onclick="tryAgain2_2_2()">Try Again</button>
              </div>

            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-2-2-3">
              <div class="feedback__content">
                <p>
                  Very close! Hint: There are only two correct answers.
                </p>
                <button class="btn " onclick="tryAgain2_2_2()">Try Again</button>
              </div>

            </div>

            <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-2-2-4">
              <div class="feedback__content">
                <p>
                  Very close! Hint: There are two correct answers and one of your answers is correct.
                </p>
                <button class="btn " onclick="tryAgain2_2_2()">Try Again</button>
              </div>

            </div>
          </div>

        </div>


        <div id="question2-2-3" class="question" style="display:none;">
          <div class="flex flex--center">
            <div class="flex flex--column gap--xlg flex--center container">
              <div class="flex flex--column gap--sm flex--center">
                <p>
                  What possible solution could you propose for the lack of procedures in place for issues to be reported?

                </p>
                <p><i>Please select all that apply.</i></p>
              </div>
              <div class="answers flex flex--wrap gap--sm">
                <div>
                  <input type="checkbox" id="option2-2-3-1" class="options2-2-3" name="options2-2-3" value="1">
                  <label for="option2-2-3-1">Add a form or button that is clear and easy to find on the platform for users to report issues </label>
                </div>
                <div>
                  <input type="checkbox" id="option2-2-3-2" class="options2-2-3" name="options2-2-3" value="1">
                  <label for="option2-2-3-2">Designate a person on the team to be held accountable when things go wrong</label>
                </div>
                <div>
                  <input type="checkbox" id="option2-2-3-3" class="options2-2-3" name="options2-2-3" value="1">
                  <label for="option2-2-3-3">Create procedures for when users report an issue or when things go wrong</label>
                </div>
                <div>
                  <input type="checkbox" id="option2-2-3-4" class="options2-2-3" name="options2-2-3" value="1">
                  <label for="option2-2-3-4">Ensure there is a designated team member who monitors the company’s social media accounts to see if any users tag them in posts where they are reporting issues and concerns</label>
                </div>
              </div>
              <button type="button" id="submitButton2_2_3" class="submitButton btn" onclick="checkAnswer2_2_3()">
                Submit
              </button>

              <div class='hide jsFeedbackSuccess feedback success animate__animated animate__zoomIn animate__faster' id="jsFeedbackSuccess2-2-3">
                <div class="feedback__content">
                  <p class="">That’s right, all of these are possible solutions that will help enhance the user experience and help with internal procedures to make sure that all complaints, issues, and concerns are recorded and addressed properly. Great work!</p>
                  <button class="btn " onclick="continueToNextQuestion2_2_3()">Next</button>
                </div>

              </div>

              <div class='hide jsFeedbackFail  feedback fail animate__animated animate__zoomIn animate__faster' id="jsFeedbackFail2-2-3">
                <div class="feedback__content">
                  <p>
                    Almost! Are there more?
                  </p>
                  <button class="btn " onclick="tryAgain2_2_3()">Try Again</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

@include('vendor.digitalmarmalade.badges.digital-ethics.partials.overlay')


@endsection @section('javascript')

<script src="/badge-assets/{{$url['slug']}}/_global/js/tasks/step7.js"></script>
<script>
  $(document).ready(function() {
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
  oBadges.setSlugAndStep('{{$url['slug']}}', 7);
</script>

@endsection
