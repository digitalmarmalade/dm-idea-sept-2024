@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<main>

  <section>
      <ul class="flex flex--center">
          <li class="dot-4 active">1</li>
          <li class="dot-7">2</li>
          <li class="dot-10">3</li>
          <li class="dot-13">4</li>
          <li class="dot-16">5</li>
          <li class="dot-19">6</li>
      </ul>

      <div class="questions">
          {{--1/6: Digitisation of welfare services--}}
          <div id ="question1" class="question" >
              <div>
                  <h1>Digitisation of welfare services</h1>
                  <p>As part of their ongoing efforts to deliver welfare services more effectively and efficiently, a government decided to digitise the process completely. This means that people can only make their claims for support using an online system. The online system determines the amount of financial support that the person can receive (which may differ from one month to the next if they earn a different amount, or if their circumstances change) and processes payment automatically.</p>
                  <h2><strong>Individual</strong></h2>
                  <p>Use the slider to show the scale of impact you think the digitisation of welfare services could have on individuals.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion1" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(1)">
                      Submit
                  </button>
              </div>
              
              <div class='hide' id="jsFeedbackLow-1-1">
                <p>The individuals that use the new digital service could be greatly affected by the consequences.Remember that different people can be impacted in different ways and to varying levels.</p>
              </div>

              <div class='hide' id="jsFeedbackMedium-1-2">
                <p>Implementing the new digital system could impact the people who use it quite highly.Remember that different people can be affected in different ways and to varying levels.</p>
              </div>

              <div class='hide' id="jsFeedbackHigh-1-3">
                <p>Good thinking! Rolling out the new digital system is likely to have a high impact on the individuals who use it.Remember that different people can be impacted in different ways and to varying levels.</p>
              </div>

              <div id="jsFeedback-1" class='hide'>
                <h4>The following are some of the potential consequences for individuals.</h4>
                <ul>
                    <li>It makes claiming support easier for some people</li>
                    <li>Less time is required for social service workers to manually process claims</li>
                    <li>People who can use the system get more independence and control over their finances</li>
                    <li>People will need training on how to use the system to make claims</li>
                    <li>Social service workers may be required to retrain or risk job loss</li>
                    <li>It will not be possible for people who are digitally excluded to access support independently</li>
                </ul>
                <button class="btn"onclick="continueToNextQuestion()">Continue</button>
              </div>

              <div class='hide jsFeedbackNone' id="jsFeedbackNone-1-0">
                <p>It’s unlikely that the new digital service will not impact individuals. Please try again.</p>
                <button class="btn" onclick="tryAgain(1)">Try Again</button>
              </div>
          </div>

          <div id ="question2" class="question" style="display:none;">
              <div>
                  <h2><strong>Society</strong></h2>

                  <p>Use the slider to show the scale of societal impact that you think the digitisation of welfare services could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion2" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton btn" onclick="submitAnswer(2)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-2-1">
                  <p class="">
                      This innovation could have a significant impact on the people and communities who administer and use the system.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-2-2">
                  <p class="">
                      Nice work!

                      The implementation of the new digital system for welfare services could have a significant impact on people and communities.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-2-3">
                  <p class="">
                      Nice work!

                      This innovation could significantly impact people who administer the system as well as those who use it to access support.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-2" class='hide'>
                  <h4>The following are some of the potential consequences for society.</h4>
                  <ul>
                      <li>As a result of the savings from the more efficient system, the government could invest in other key services to benefit the country</li>
                      <li>The impact on households of the individuals that are eligible for support can be positive or negative which may affect how much they spend with local businesses </li>
                      <li>This department of the social services workforce might have to retrain or experience job shortages </li>
                      <li>Certain groups may be disproportionately affected by changes to the system</li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone-'
                   id="jsFeedbackNone-2-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      It’s unlikely that this new digital service will have no impact on society. Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(2)">Try Again</button>
              </div>
          </div>

          <div id ="question3" class="question" style="display:none;">
              <div>
                  <h2><strong>Global</strong></h2>

                  <p>Use the slider to show the level of global impact that you think the digitisation of welfare services could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion3" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(3)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-3-1">
                  <p class="">
                      Something has a global impact if it happens in all parts of the world, or affects all parts of the world. If all countries adopt the digital system, then it could have a considerable global impact.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-3-2">
                  <p class="">
                      If all countries adopt the digital system, people and economies around the world could potentially be impacted.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-3-3">
                  <p class="">
                      If all countries adopt the digital system, people and economies around the world could potentially be impacted.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-3" class='hide'>
                  <h4>The following are some of the potential global consequences.</h4>
                  <ul>
                      <li>If everyone around the world is able to use an online welfare system to access appropriate support, then the world could become a more fair and equal place</li>
                      <li>Citizens around the world could find it easier to access services which could increase their wellbeing and quality of life</li>
                      <li>Whole communities of people around the world who are digitally excluded will not be able to access the online services independently and so they risk being left behind</li>
                      <li>It’s unlikely that all countries would be able to provide equal support to citizens. The gap between weak and strong economies could widen</li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone'
                   id="jsFeedbackNone-3-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      Something has a global impact if it happens in all parts of the world, or affects all parts of the world. If all countries adopt the digital system, then its impact would be global.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(3)">Try Again</button>
              </div>
          </div>

          {{--2/6: Online learning platform--}}
          <div id ="question4" class="question" style="display:none;">
              <div>
                  <h1>Online learning platform</h1>
                  <p>To help people develop their understanding and awareness of the online world, and build the skills needed for responsible digital participation, a charity created a global online learning platform which can be accessed for free.
                      The team that works on the platform takes all matters of privacy and security seriously, they do their best to provide a safe and secure online environment where everyone can feel welcome and comfortable learning. The charity’s mission is education, not profit, so the organisation has pledged never to sell user information to third parties.
                  </p>
                  <h2><strong>Individual</strong></h2>

                  <p>Use the slider to show the scale of impact you think this online learning platform could have on individuals.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion4" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(4)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-4-1">
                  <p class="">
                      People can be impacted by different things in different ways and to varying levels and this innovation seems like it could have a considerable impact on those that use it.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-4-2">
                  <p class="">
                      Good thinking!
                      There could be a considerable impact on individuals who trust and use this platform for learning online.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-4-3">
                  <p class="">
                      The platform could have a considerable impact on individuals that use it.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-4" class='hide'>
                  <h4>The following are some of the potential consequences for individuals.</h4>
                  <ul>
                      <li>Benefits from learning could help individuals to improve their lives and the lives of their families</li>
                      <li>Learners feel safe knowing that their data is protected</li>
                      <li>Learners can trust that the charity won’t try to use their personal information for profit </li>
                      <li>Individuals who don’t have access to connectivity or a device for learning might get left behind</li>
                      <li>If the charity cannot sustain an effective security system then user data may be at risk </li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone-'
                   id="jsFeedbackNone-4-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      If nobody uses the platform then it probably won't have any impact on any individuals but for the purposes of this exercise, please assume that some people use it.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(4)">Try Again</button>
              </div>
          </div>

          <div id ="question5" class="question" style="display:none;">
              <div>
                  <h2><strong>Society</strong></h2>

                  <p>Use the slider to show the level of societal impact that you think this online learning platform could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion5" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(5)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-5-1">
                  <p class="">
                      This innovation could impact many different aspects of society to differing degrees. For example, it could affect people’s attitudes, their productivity, or how similar organisations within the industry operate.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-5-2">
                  <p class="">
                      Well done!

                      This learning platform could impact many different aspects of society, such as people’s attitudes, their productivity, and how similar organisations within the industry may operate.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-5-3">
                  <p class="">
                      This innovation has the potential for making a considerable impact on society.

                      For example, it could affect people’s attitudes and behaviours, their productivity, or how organisations operate.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-5" class='hide'>
                  <h4>The following are some of the potential consequences for society.</h4>
                  <ul>
                      <li>This trusted platform could help to change perceptions and attitudes about learning and enable more people to feel comfortable using technology for education</li>
                      <li>Other organisations might take notice of the charity’s stance on data protection and follow suit</li>
                      <li>Employers could recruit digitally skilled and confident colleagues</li>
                      <li>Productivity could increase as a result of more people having digital skills and confidence </li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone-'
                   id="jsFeedbackNone-5-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      If nobody uses the platform then it probably won't have any impact on society but for the purposes of this exercise, please assume that it is being used.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(5)">Try Again</button>
              </div>
          </div>

          <div id ="question6" class="question" style="display:none;">
              <div>
                  <h2><strong>Global</strong></h2>

                  <p>Use the slider to show the level of global impact that you think this online learning platform could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion6" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(6)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-6-1">
                  <p class="">
                      If the platform is used by people in all parts of the world, or if it affects all parts of the world then it will have a global impact.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-6-2">
                  <p class="">
                      Nice work!
                      If the platform is used by people in all parts of the world and helps to educate people on a global scale, it could have a considerable impact!
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-6-3">
                  <p class="">
                      If the platform is used in all parts of the world, or if it affects people in all parts of the world then it will have a global impact. The level of impact could be quite considerable!
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-6" class='hide'>
                  <h4>The following are some of the potential global consequences.</h4>
                  <ul>
                      <li>Other organisations around the world could learn from how this charity protects learner data </li>
                      <li>Incidents of cybercrime could be reduced around the world as more people know about how to stay safe online</li>
                      <li>Making digital skills education free, fun and accessible to all could help to close global skills gaps and increase employment rates around the world</li>
                      <li>If the charity is not able to keep up with protecting learner data and there is a data breach, the personal information of learners all over the world may be at risk</li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone'
                   id="jsFeedbackNone-6-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      If nobody uses the platform then it probably won't have a global impact but for the purposes of this exercise, please assume that it is being used.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(6)">Try Again</button>
              </div>
          </div>

          {{--3/6: Social media and echo chambers--}}
          <div id ="question7" class="question" style="display:none;">
              <div>
                  <h1>Social media and echo chambers</h1>
                  <p>Social media has enabled news to travel far and fast, and has given a voice and platform to many people to share their point of view. Anyone can find, share or create information instantly and broadcast it to the masses.
                      Social media can also enable echo chambers where users are continuously fed more information that supports their preconceptions, whether this information is real or made-up.
                      Tooltips below:
                      Echo chambers [Tooltip: An environment where a person only encounters information or opinions that reflect and reinforce their own.]
                      Preconceptions [Tooltip: An idea or opinion formed without enough information or experience.]</p>
                  <h2><strong>Individual</strong></h2>

                  <p>Use the slider to show the scale of impact you think social media and echo chambers could have on individuals. </p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion7" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(7)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-7-1">
                  <p class="">
                      Social media could have a significant impact on individuals - for people who use it for connecting and communicating with others and to source and share information.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-7-2">
                  <p class="">
                      Social media could have a significant impact on individuals - both for those who use it to send and share information, and for those who use it to find information.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-7-3">
                  <p class="">
                      This innovation could have a significant impact on individuals that use the service.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-7" class='hide'>
                  <h4>The following are some of the potential consequences for individuals.</h4>
                  <ul>
                      <li>Social media can give people a voice and a platform to share information</li>
                      <li>Social media can make information easily accessible to people</li>
                      <li>Social media can enable people to become influencers (whether it is in politics, education, lifestyle, etc.) and to make careers out of it</li>
                      <li>Echo chambers on social media can help people find and gather more information and opinions that support what they have learned or already believe in</li>
                      <li>Echo chambers can prevent people from gaining a well-rounded picture of different viewpoints and ideologies </li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone--1'
                   id="jsFeedbackNone-7-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      It is unlikely that social media does not have an impact on individuals.
                      Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(7)">Try Again</button>
              </div>
          </div>

          <div id ="question8" class="question" style="display:none;">
              <div>
                  <h2><strong>Society</strong></h2>

                  <p>Use the slider to show the level of societal impact that you think social media and echo chambers could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion8" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(8)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-8-1">
                  <p class="">
                      Social media and echo chambers could have a significant impact on society.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-8-2">
                  <p class="">
                      Social media and echo chambers could have a significant impact on society.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-8-3">
                  <p class="">
                      Good thinking!
                      The widespread use of social media could have a significant impact on society.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-8" class='hide'>
                  <h4>The following are some of the potential consequences for society. </h4>
                  <ul>
                      <li>Social media can give people who want to share their point of view a voice and platform to start a movement or a campaign</li>
                      <li>People who have certain beliefs can have their beliefs or opinions strengthened when they find a community of like-minded people</li>
                      <li>On a large scale, echo chambers could impact society by fueling political polarisation and growing social mistrust</li>
                      <li>Whole communities can be influenced or led to believe something (real or fake) when a topic goes viral on social media (e.g. a sports team winning, a storm that is coming, a toilet paper shortage) </li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone-'
                   id="jsFeedbackNone-8-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      The widespread use of social media is having an increasing impact on society.
                      Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(8)">Try Again</button>
              </div>
          </div>

          <div id ="question9" class="question" style="display:none;">
              <div>
                  <h2><strong>Global</strong></h2>

                  <p>Use the slider to show the level of global impact that you think social media and echo chambers could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion9" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(9)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-9-1">
                  <p class="">
                      As the number of people around the world who use social media increases, it can have a significant global impact.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-9-2">
                  <p class="">
                      Nice work!
                      More than half of the world now uses social media and this rate continues to rise.
                      Social media already has a significant global impact and we can see this in the areas of politics, lifestyle and global trends.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-9-3">
                  <p class="">
                      Nice work!
                      More than half of the world now uses social media and this rate continues to rise.
                      Social media already has a significant global impact and we can see this in the areas of politics, lifestyle and global trends.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-9" class='hide'>
                  <h4>The following are some of the potential global consequences.</h4>
                  <ul>
                      <li>Social media can bring light to important issues and place them on a global stage </li>
                      <li>Social media can democratise access to information and can enable people who use it to broadcast information to a global audience that they might otherwise not be able to reach </li>
                      <li>Social media can be used to recruit people who believe in specific causes and help further movements</li>
                      <li>Influential people can use social media to control or sway what people see and hear and can potentially create global movements </li>
                      <li>Digital echo chambers and filter bubbles are seen as one of the main causes of polarisation and radicalisation online</li>
                      <li>Political polarisation and social mistrust could influence policy and law-making in nations around the world</li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone-'
                   id="jsFeedbackNone-9-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      More than half of the world now uses social media so it is very likely that social media has a global impact.
                      Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(9)">Try Again</button>
              </div>
          </div>

          {{--4/6: Machine learning algorithm for university recruitment--}}
          <div id ="question10" class="question" style="display:none;">
              <div>
                  <h1>Machine learning algorithm for university recruitment</h1>
                  <p>A university introduced a machine learning algorithm to select students in the initial screening stage to help accelerate the recruitment process. The algorithm was designed based on the criteria of the university’s most successful students since it started. Until recently, this was a male-only university. As a result, the number of non-male candidates shortlisted by the algorithm were very low. </p>
                  <h2><strong>Individual</strong></h2>

                  <p>Use the slider to show the scale of impact you think that the implementation of the machine learning algorithm could have on individuals.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion10" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(10)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-10-1">
                  <p class="">
                      The machine learning algorithm could have a significant impact on the university applicants and the staff that work there.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-10-2">
                  <p class="">
                      The machine learning algorithm could have a significant impact on the university applicants and the staff that work there.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-10-3">
                  <p class="">
                      Great job!
                      The machine learning algorithm could certainly have a high impact on both the applicants and the staff that work in recruitment.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-10" class='hide'>
                  <h4>The following are some of the potential consequences for individuals.</h4>
                  <ul>
                      <li>Staff in the admissions department can work more efficiently which helps the university to save resources</li>
                      <li>There is less room for subjectivity and preferential treatment in the initial screening process</li>
                      <li>People wanting to go to the university can find out more quickly whether their application has been shortlisted</li>
                      <li>If fewer employees are needed by the university then some may risk job loss</li>
                      <li>The algorithm is biased [Tooltip: Preference for one person or thing over another in a way that is usually unfair] due to being created with unrepresentative data and so certain applicants could face discrimination</li>
                      <li>The university’s reputation could be damaged because of the implementation of the biased algorithm and senior leaders could be forced to resign</li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone-'
                   id="jsFeedbackNone-10-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      It is unlikely that the machine learning algorithm will have no impact on individuals.
                      Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(10)">Try Again</button>
              </div>
          </div>

          <div id ="question11" class="question" style="display:none;">
              <div>
                  <h2><strong>Society</strong></h2>

                  <p>Use the slider to show the scale of societal impact you think that the implementation of the machine learning algorithm could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion11" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(11)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-11-1">
                  <p class="">
                      The implementation of the machine learning algorithm could have a significant impact on society. At the very least, it will probably affect a whole community of university applicants.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-11-2">
                  <p class="">
                      Good thinking!
                      The implementation of the machine learning algorithm could have a significant impact on society. At the very least, it will probably affect a whole community of university applicants.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-11-3">
                  <p class="">
                      Good thinking!
                      The implementation of the machine learning algorithm could have a significant impact on society. At the very least, it will probably affect a whole community of university applicants.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-11" class='hide'>
                  <h4>The following are some of the potential consequences for society. </h4>
                  <ul>
                      <li>The biased algorithm could lead to gender discrimination </li>
                      <li>If the biased algorithm results in the university having a predominantly male student body, this could limit diversity in the ideas and experiences that this university offers</li>
                      <li>Fewer non-male candidates getting into university caused by the biased algorithm means that there will be fewer non-male graduates entering the job market with a university degree</li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone'
                   id="jsFeedbackNone-11-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      The machine learning algorithm could affect everyone who is applying to go to this university so it is unlikely that there will be no societal impact.
                      Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(11)">Try Again</button>
              </div>
          </div>

          <div id ="question12" class="question" style="display:none;">
              <div>
                  <h2><strong>Global</strong></h2>

                  <p>Use the slider to show the scale of global impact you think that the implementation of the machine learning algorithm could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion12" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(12)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-12-1">
                  <p class="">
                      Something has a global impact if it happens in all parts of the world, or affects all parts of the world.
                      People applying to the university and people who graduate from the university could be living and working all over the world so there are potential impacts on a global level.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-12-2">
                  <p class="">
                      Something has a global impact if it happens in all parts of the world, or affects all parts of the world.
                      People applying to the university and people who graduate from the university could be living and working all over the world so there can be knock-on effects that create a global impact .
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-12-3">
                  <p class="">
                      Something has a global impact if it happens in all parts of the world, or affects all parts of the world.
                      People applying to the university and people who graduate from the university could be living and working all over the world so there are potential impacts on a global level.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-12" class='hide'>
                  <h4>The following are some of the potential global consequences.</h4>
                  <ul>
                      <li>Access to higher education is limited for people around the world who are discriminated against by the biased algorithm</li>
                      <li>Reduced diversity in workforces around the world</li>
                      <li>A lack of representative role models in higher education and leadership roles which could  have a multi-generational knock-on effect</li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone--1'
                   id="jsFeedbackNone-12-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      People applying to the university and people who graduate from the university could be living and working all over the world so there are potential impacts on a global level.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(12)">Try Again</button>
              </div>
          </div>

          {{--5/6: AgriTech--}}
          <div id ="question13" class="question" style="display:none;">
              <div>
                  <h1>AgriTech</h1>
                  <p>Technological advancements in agriculture have led to the development of automated machinery for dispersing chemical fertilisers and pesticides. This technology enables farmers to spread these chemicals across their farmland more quickly and easily, which helps crops grow and significantly improves crop yields. It also enables these chemicals to be used more widely around the world. </p>
                  <h2><strong>Individual</strong></h2>

                  <p>Use the slider to show the scale of impact that you think the automated machinery could have on individuals.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion13" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(13)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-13-1">
                  <p class="">
                      This innovation could have a significant impact on the farmers and their staff who will be using the automated machinery.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-13-2">
                  <p class="">
                      Nice work!
                      This innovation could have a significant impact on the farmers and their staff who can use the automated machinery to disperse chemical fertilisers and pesticides.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-13-3">
                  <p class="">
                      Nice work!
                      This innovation could have a significant impact on the farmers and their staff who can use the automated machinery to disperse chemical fertilisers and pesticides.
                      Remember that different people can be impacted in different ways and to varying levels.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-13" class='hide'>
                  <h4>The following are some of the potential consequences for individuals.</h4>
                  <ul>
                      <li>More money to be made by farmers due to higher crop yields</li>
                      <li>High crop yields mean more food for farmers and a more stable food supply</li>
                      <li>Less manual labour required from farmers to fertilise their crops and prevent pests</li>
                      <li>Less direct contact with chemicals for farm workers could lead to improved health conditions </li>
                      <li>Farm workers might need retraining or face redundancy</li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone'
                   id="jsFeedbackNone-13-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      It is unlikely that this automated machinery will not have an impact on individuals.
                      Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(13)">Try Again</button>
              </div>
          </div>

          <div id ="question14" class="question" style="display:none;">
              <div>
                  <h2><strong>Society</strong></h2>

                  <p>Use the slider to show the level of societal impact that you think the automated machinery could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion14" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(14)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-14-1">
                  <p class="">
                      This technology could have a significant impact on society as it affects the farmers who use it, the communities that may benefit from improved crop yields, as well as the land that the chemical fertilisers and pesticides are being used on.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-14-2">
                  <p class="">
                      Nice work! The use of automated machinery for dispersing chemical fertilisers and pesticides can have a significant impact on communities and the environment beyond just the farmer and their farm.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-14-3">
                  <p class="">
                      Nice work! The automation of dispersing chemical fertilisers and pesticides can have a significant impact on communities and the environment beyond just the farmer and their farm.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-14" class='hide'>
                  <h4>The following are some of the potential consequences for society.</h4>
                  <ul>
                      <li>Can help to create thriving rural communities with thriving businesses which is good for the local economy and its people</li>
                      <li>Automation and less manual labour required could mean less jobs for farmers</li>
                      <li>Some chemical fertilisers and pesticides may cause harm to the communities of people who come into contact with them</li>
                      <li>Rundown of chemicals to surrounding land and water could disturb local ecosystems </li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone'
                   id="jsFeedbackNone-14-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      This technology enables chemical fertilisers and pesticides to be used more widely around the world. It is unlikely that this will have no impact on society.
                      Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(14)">Try Again</button>
              </div>
          </div>

          <div id ="question15" class="question" style="display:none;">
              <div>
                  <h2><strong>Global</strong></h2>

                  <p>Use the slider to show the level of global impact that you think the automated machinery could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion15" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(15)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-15-1">
                  <p class="">
                      The use of automated machinery for dispersing chemical fertilisers and pesticides could have a significant global impact, especially if it enables chemicals to be used more widely around the world.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-15-2">
                  <p class="">
                      The use of automated machinery for dispersing chemical fertilisers and pesticides could have a significant global impact, especially if it enables chemicals to be used more widely around the world.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-15-3">
                  <p class="">
                      Good thinking!
                      The use of automated machinery for dispersing chemical fertilisers and pesticides could have significant global impacts on people, the economy and ecosystems.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-15" class='hide'>
                  <h4>The following are some of the potential global consequences.</h4>
                  <ul>
                      <li>Increased food supplies could reduce food costs for global consumers</li>
                      <li>Increased food supplies could help prevent global food shortages or even famine </li>
                      <li>Overuse of some chemical fertilisers and pesticides could leave harmful substances in food, leading to global health issues</li>
                      <li>Overuse of chemical fertilisers and pesticides could lead to environmental deterioration </li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone'
                   id="jsFeedbackNone-15-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      This technology enables chemical fertilisers and pesticides to be used more widely around the world so it will probably have some impact globally.
                      Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(15)">Try Again</button>
              </div>
          </div>

          {{--6/6: Global online retailer--}}
          <div id ="question16" class="question" style="display:none;">
              <div>
                  <h1>Global online retailer </h1>
                  <p>A global online retailer needs to provide support for its customers so support staff sometimes need access to the customer’s data to address their requests for help.
                      In this organisation, employees are screened with background checks before they start their jobs and access to customer data is controlled via a least-privilege policy, which means that staff are given the minimum levels of access, or permissions needed to perform their duties. Employees are trained on security and privacy regularly and they practise the organisation’s incident response plan at least annually.
                  </p>
                  <h2><strong>Individual</strong></h2>

                  <p>Use the slider to show the scale of impact you think the online retailer's privacy and security practices could have on individuals.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion16" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(16)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-16-1">
                  <p class="">
                      The way that this online retailer operates could have a significant impact on its customers, employees and the company’s own brand and reputation.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-16-2">
                  <p class="">
                      The way that this online retailer operates could have a significant impact on its customers, employees and the company’s own brand and reputation.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-16-3">
                  <p class="">
                      Nice work!
                      This online retailer values protecting the security and privacy of its customers and ensuring that their employees are properly trained which could have a significant impact on individuals who use and work for this company!
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-16" class='hide'>
                  <h4>The following are some of the potential consequences for individuals.</h4>
                  <ul>
                      <li>It is more likely that individual customers will have a good experience with the business as staff are properly trained, keep up with training and are held accountable</li>
                      <li>It is less likely that customer data will be exposed </li>
                      <li>Team members are well trained, well informed and can feel confident that they can handle the unexpected</li>
                      <li>The organisation will be recognised as a trusted business and could set the industry standard for online retailers</li>
                      <li>The organisation’s strong reputation can lead to it becoming the market leader, helping them to gain customers and become more profitable</li>
                      <li>There will be less opportunities for people who are not able to pass the background checks to be employed by the company</li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone'
                   id="jsFeedbackNone-16-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      It is unlikely that this online retailer’s privacy and security best practices will have no impact on individuals.
                      Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(16)">Try Again</button>
              </div>
          </div>

          <div id ="question17" class="question" style="display:none;">
              <div>
                  <h2><strong>Society</strong></h2>

                  <p>Use the slider to show the level of societal impact that you think the online retailer's privacy and security practices could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion17" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(17)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-17-1">
                  <p class="">
                      The steps taken by the retailer to protect customers could have a considerable impact on various communities within its industry.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-17-2">
                  <p class="">
                      Great job!
                      The steps taken by the retailer to protect customers could have a considerable impact on its industry and the local economies that it operates in.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-17-3">
                  <p class="">
                      The steps taken by the retailer to protect customers could have a considerable impact on various communities within its industry.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-17" class='hide'>
                  <h4>The following are some of the potential consequences for society.</h4>
                  <ul>
                      <li>The organisation could become recognised as a trusted retailer and a leader in the global market, resulting in them becoming more reputable, more widely used and ultimately, more profitable</li>
                      <li>These best practices set an example for other online retailers and also set a standard for the industry </li>
                      <li>As the organisation grows and becomes more profitable, it could also create more jobs </li>
                      <li>Higher levels of employment can strengthen local economies</li>
                      <li>There will be less opportunities for people who are not able to pass the background checks to be employed by the company</li>
                  </ul>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone'
                   id="jsFeedbackNone-17-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">
                      As this is a global online retailer, it is unlikely that their business practices will have no societal impact.
                      Please try again.
                  </p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(17)">Try Again</button>
              </div>
          </div>

          <div id ="question18" class="question" style="display:none;">
              <div>
                  <h2><strong>Global</strong></h2>

                  <p>Use the slider to show the level of global impact that you think the online retailer's privacy and security practices  could have.</p>
                  <p>When you are finished, click submit.</p>

                  <div class="range">
                      <input id="sliderQuestion18" type="range" min="0" max="3" value="0">
                      <div class="ticks">
                          <!-- You could generate the ticks based on your min, max & step values. -->
                          <span class="tick">None</span>
                          <span class="tick">Low</span>
                          <span class="tick">Medium</span>
                          <span class="tick">High</span>
                      </div>
                  </div>

                  <button type="button" class="submitButton" onclick="submitAnswer(18)">
                      Submit
                  </button>
              </div>
              <div class='hide'
                   id="jsFeedbackLow-18-1">
                  <p class="">
                      As this global online retailer has the best interest of its customers and  employees in mind and values protecting the global online community, it could have a considerable impact in many parts of the world!
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackMedium-18-2">
                  <p class="">
                      Nice work!
                      This online retailer has the potential to impact many people and markets around the world and to be a leader in creating a safe global online community.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div class='hide'
                   id="jsFeedbackHigh-18-3">
                  <p class="">
                      As this global online retailer has the best interest of its customers and  employees in mind and values protecting the global online community, it could have a considerable impact in many parts of the world!This innovation has the potential for making a considerable impact on society.
                      For example, it could affect people’s attitudes and behaviours, their productivity, or how organisations operate.
                  </p>
{{--                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"--}}
{{--                     onclick="continueToNextQuestion()">Continue</a>--}}
              </div>

              <div id="jsFeedback-18" class='hide'>
                  <h4>The following are some of the potential global consequences.</h4>
                  <ul>
                      <li>Ethical practices such as this example contribute to a global online community that is fair and safe for all</li>
                      <li>A successful global retailer could create many jobs opportunities, boost the global economy, and foster innovation within its industry</li>
                      <li>If many people around the world trust and transact with this online retailer and a data or security breach occurs or if the company has to shut down, potentially millions of people, including customers, employees, suppliers and investors may suffer</li>
                  </ul>

                  <div>
                      <strong>You did a great job!</strong>

                      It’s important to think carefully about how you harness and manage technologies and digital solutions. The decisions made along the way can have implications for individuals, communities and the world.
                      There are people who specialise in understanding these implications and helping others to weigh the moral and ethical impacts of their decisions. These people are known as digital ethicists.
                      Let’s find out more about them next.

                  </div>

                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                     onclick="continueToNextQuestion()">Continue</a>
              </div>

              <div class='hide jsFeedbackNone'
                   id="jsFeedbackNone-18-0">
                  <p class="animate__animated animate__fadeInLeft animate__fast">It’s unlikely that the new digital service will not impact individuals. Please try again.</p>
                  <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                          onclick="tryAgain(18)">Try Again</button>
              </div>
          </div>
      </div>

  </section>

</main>
@endsection
@section('javascript')
<script src="/badge-assets/{{$url['slug']}}/_global/js/step2.js"></script>

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
