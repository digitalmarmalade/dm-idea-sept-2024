@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<main>

  <section>

      <div class="questions">
          {{--1/3: About the Role--}}
          <div id ="question1" class="question" >
              <div>
                  <h1>About the Role</h1>
                  <p>
                      As a digital ethicist, you will be responsible for

                      <select class="question1-1" name="question1-1" id="question1-1">
                          <option value="">select one</option>
                          <option value="0">learning about</option>
                          <option value="1">raising awareness of</option>
                          <option value="0">dictating</option>
                      </select>

                      digital ethics and the associated responsibilities across the organisation and helping to develop

                      <select class="question1-2" name="question1-2" id="question1-2">
                          <option value="">select one</option>
                          <option value="1">systems, processes and tools</option>
                          <option value="0">algorithms</option>
                          <option value="0">products</option>
                      </select>

                      to enable the team to embed digital ethics best practices in their work.

                      This is a thought-provoking, collaborative, fun and challenging role where you will have the opportunity to not only develop a robust and sustainable digital ethics culture within the organisation but also help shape what digital ethics will be like across the industry.

                      Digital ethics is a

                      <select class="question1-3" name="question1-3" id="question1-3">
                          <option value="">select one</option>
                          <option value="0">fascinating and historical</option>
                          <option value="0">narrow and unique</option>
                          <option value="1">new and emerging</option>
                      </select>

                      field so don’t worry if you haven’t worked in this exact role in the past - we welcome candidates with

                      <select class="question1-4" name="question1-4" id="question1-4">
                          <option value="">select one</option>
                          <option value="0">software development skills</option>
                          <option value="1">diverse backgrounds and experiences</option>
                          <option value="0">a PhD in computer science</option>
                      </select>

                      to join the team!
                  </p>


                  <button type="button" id="checkButton1" class="checkButton" onclick="checkAnswer()">
                      Check
                  </button>
              </div>
              <div>
                  <div class='hide jsFeedbackSuccess1'
                       id="jsFeedbackSuccess1">
                      <p class="">Well done! Let’s continue to the key accountabilities section of this job description.</p>
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                         onclick="continueToNextQuestion()">Continue</a>
                  </div>

                  <div class='hide jsFeedbackFail-empty-1'
                       id="jsFeedbackFail-empty-1">
                      <p class="animate__animated animate__fadeInLeft animate__fast">Please make sure that you have completed all the answers before submitting.</p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail1-0'
                       id="jsFeedbackFail1-0">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Oops! That’s not quite. Read the text carefully and have another go!
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail1-1'
                       id="jsFeedbackFail1-1">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          You’ve got one right so far, please have another go at the other ones.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail1-2'
                       id="jsFeedbackFail1-2">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          You’re halfway there! Keep trying.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail1-3'
                       id="jsFeedbackFail1-3">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Almost! There’s just one answer that you need to take another look at.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>
              </div>
          </div>

          {{--2/3: Key Accountabilities--}}
          <div id ="question2" class="question" style="display:none;">
              <div>
                  <h1>Key Accountabilities</h1>
                  <ul>
                      <li>
                          <p>Build awareness and understanding about digital ethics and why it matters to the organisation and the
                              <select class="question2-1" name="question2-1" id="question2-1">
                                  <option value="">select one</option>
                                  <option value="0">CEO</option>
                                  <option value="0">stock prices</option>
                                  <option value="1">wider community</option>
                              </select>
                          </p></li>
                      <li>
                          <p>Lead the creation and implementation of digital ethics tools and methods, and help build frameworks and systems for digital ethics assessment and
                              <select class="question2-2" name="question2-2" id="question2-2">
                                  <option value="">select one</option>
                                  <option value="0">crime prevention</option>
                                  <option value="1">decision-making</option>
                                  <option value="0">research and funding</option>
                              </select>
                          </p>
                      </li>
                      <li><p>Design and implement learning programmes that will teach colleagues how to apply ethical principles in their work </p></li>
                      <li><p>Work with leaders
                              <select class="question2-3" name="question2-3" id="question2-3">
                                  <option value="">select one</option>
                                  <option value="0">strategically</option>
                                  <option value="1">across all departments</option>
                                  <option value="0">most senior</option>
                              </select>
                              in the organisation to ensure that there is accountability and procedures in place to monitor, prevent and react to potential issues related to digital ethics</p></li>
                      <li>
                          <p>Make sure digital ethics are baked into our corporate
                              <select class="question2-4" name="question2-4" id="question2-4">
                                  <option value="">select one</option>
                                  <option value="0">responsibilities</option>
                                  <option value="0">events</option>
                                  <option value="1">values</option>
                              </select>
                          </p>
                      </li>
                      <li>
                          <p>Develop practices that enhance our brand around the world and ensure that we use
                              <select class="question2-5" name="question2-5" id="question2-5">
                                  <option value="">select one</option>
                                  <option value="0">digital ethics</option>
                                  <option value="1">data and digital technologies</option>
                                  <option value="0">persuasive technology</option>
                              </select>
                              for good</p>
                      </li>
                  </ul>


                  <button type="button" id="checkButton2" class="checkButton" onclick="checkAnswer()">
                      Check
                  </button>
              </div>
              <div>
                  <div class='hide jsFeedbackSuccess2'
                       id="jsFeedbackSuccess2">
                      <p class="">
                          Nice work! Now that you’ve completed the key accountabilities section of this job description, can you determine what skills and experiences the employer may be looking for?
                      </p>
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                         onclick="continueToNextQuestion()">Continue</a>
                  </div>

                  <div class='hide jsFeedbackFail-empty-2'
                       id="jsFeedbackFail-empty-2">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Please make sure that you have completed all the answers before submitting.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail2-0'
                       id="jsFeedbackFail2-0">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Oops! That’s not quite. Read the text carefully and have another go!
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail2-1'
                       id="jsFeedbackFail2-1">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          One down, four to go! Please have another go.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail2-2'
                       id="jsFeedbackFail2-2">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Two down, three to go! Keep up the good work.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail2-3'
                       id="jsFeedbackFail2-3">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Nice work, you’ve got three right so far! There are two that you need to take another look at.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail2-4'
                       id="jsFeedbackFail2-4">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          You’re very close! There’s just one answer that you need to take another look at.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>
              </div>
          </div>

          {{--3/3: We are looking for someone who--}}
          <div id ="question3" class="question" style="display:none;">
              <div>
                  <h1>We are looking for someone who</h1>

                  <ul>
                      <li>
                          <p>Has a strong sense of
                              <select class="question3-1" name="question3-1" id="question3-1">
                                  <option value="">select one</option>
                                  <option value="0">fulfilment</option>
                                  <option value="1">integrity</option>
                                  <option value="0">ego</option>
                              </select>
                          </p>
                      </li>
                      <li>
                          <p>Is passionate about embracing and managing change</p>
                      </li>
                      <li>
                          <p>Can demonstrate great communication and leadership skills, enjoys working
                              <select class="question3-2" name="question3-2" id="question3-2">
                                  <option value="">select one</option>
                                  <option value="0">within a team</option>
                                  <option value="1">collaboratively across teams</option>
                                  <option value="0">independently</option>
                              </select>
                              and can bridge gaps between technical and non-technical co-workers
                          </p>
                      </li>
                      <li>
                          <p>Wants to guide business decisions around data and digital technology towards the benefit of people and the
                              <select class="question3-3" name="question3-3" id="question3-3">
                                  <option value="">select one</option>
                                  <option value="1">environment</option>
                                  <option value="0">CEO</option>
                                  <option value="0">shareholders</option>
                              </select>
                          </p>
                      </li>
                      <li>
                          <p>Can work effectively in a fast-paced and dynamic environment
                          </p>
                      </li>
                      <li>
                          <p>Enthusiastic about
                              <select class="question3-4" name="question3-4" id="question3-4">
                                  <option value="">select one</option>
                                  <option value="0">debating</option>
                                  <option value="0">table tennis</option>
                                  <option value="1">critical thinking</option>
                              </select>
                              and creative problem solving, and is open to different or new perspectives

                          </p>
                      </li>
                      <li>
                          <p>
                              Has experience in or studied fields such as social sciences, philosophy, business, technology and data science
                          </p>
                      </li>
                      <li>
                          <p>Has experience and knowledge of methods for assessing the
                              <select class="question3-5" name="question3-5" id="question3-5">
                                  <option value="">select one</option>
                                  <option value="0">potential scale</option>
                                  <option value="0">profitability</option>
                                  <option value="1">impact</option>
                              </select>
                              of digital technology</p>
                      </li>
                      <li>
                          <p>Has strong
                              <select class="question3-6" name="question3-6" id="question3-6">
                                  <option value="">select one</option>
                                  <option value="0">coding</option>
                                  <option value="0">design</option>
                                  <option value="1">analytical</option>
                              </select>
                              skills</p>
                      </li>



                  </ul>


                  <button type="button" id="checkButton3" class="checkButton3" onclick="checkAnswer()">
                      Check
                  </button>
              </div>
              <div>
                  <div class='hide jsFeedbackSuccess3'
                       id="jsFeedbackSuccess3">
                      <p class="">Well done! You have assembled the description brilliantly.</p>
                      <p>There’s no set path to working as a digital ethicist. As you can see, the role is quite a varied and dynamic one that requires a wide range of meta-skills [Tooltip: Timeless, higher-order skills that create adaptive learners and promote success in whatever context the future brings. Also known as soft skills. For example: integrity, adaptability, communication, creativity.], experiences, backgrounds, and interests - many of which you may already have! </p>
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                         onclick="continueToNextQuestion()">Continue</a>
                  </div>

                  <div class='hide jsFeedbackFail-empty-3'
                       id="jsFeedbackFail-empty-3">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Please make sure that you have completed all the answers before submitting.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail3-0'
                       id="jsFeedbackFail3-0">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Oops! That’s not quite. Read the text carefully and have another go!
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail3-1'
                       id="jsFeedbackFail3-1">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          That’s one down, now there are five to go!
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail3-2'
                       id="jsFeedbackFail3-2">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          You’ve got two right, there are four to go!
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail3-3'
                       id="jsFeedbackFail3-3">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Keep up the good work! You’re halfway there already.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail3-4'
                       id="jsFeedbackFail3-4">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          Nice work, you’ve got four right so far! There are two that you need to take another look at.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>

                  <div class='hide jsFeedbackFail3-5'
                       id="jsFeedbackFail3-5">
                      <p class="animate__animated animate__fadeInLeft animate__fast">
                          You’re so close! There’s just one that you need to try again.
                      </p>
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                              onclick="tryAgain()">Try Again</button>
                  </div>
              </div>
          </div>
      </div>

  </section>

</main>
@endsection
@section('javascript')
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step3.js"></script>

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
