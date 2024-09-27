@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
@endsection @section('page')

<main>
  <section>
    @include('vendor.digitalmarmalade.badges.digital-ethics.header',
    ['title' => 'Header'])

    <ol class="step-counter flex gap--sm flex--align-center" data-aos="flip-up" data-aos-duration="1500" data-aos-delay="500">
      <li class="step completed">1</li>
      <li class="step completed">2</li>
      <li class="step active">3</li>
      <li class="step">4</li>
      <li class="step">5</li>
      <li class="step">6</li>
      <li class="step">7</li>
      <li class="step">8</li>
    </ol>
    <div class="container">
      <div class='box box--step-header bg--blue flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
        <div class="flex flex--column gap box__copy">
          <h1>What is the role of a Digital Ethicist?</h1>
          <p>Thinking about digital ethics helps the people behind the creation and implementation of technology products, tools and services to make decisions that lead to positive impacts and avoid unfair outcomes.</p>
        </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--digital-ethicist.svg" alt="" />
      </div>     
      <div class="col flex flex--column gap--sm text-align--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
        <p>There isn’t one set of defined rules for digital ethics &#8212; “right” or “wrong” can depend on the context, situation, or someone’s perspective. Sometimes, there may not even be a right answer, just a “less wrong” answer. Therefore, it is essential that ethical principles like transparency, accountability and explainability are embedded into the process. Digital ethicists can help with this.</p>
        <p>Digital ethicists are important because sometimes, those who design, create, or have the authority or resources to implement certain technologies may not have the training required for ethical decision-making.</p>
        <p>Some organisations can have teams of digital ethicists whilst others may work with independent consultants. Some organisations might even have people who do the role of a digital ethicist as a part of their job, but aren’t called digital ethicists. If you’re curious about a job role, one way to find out more about it is to look up job advertisements and read the descriptions. </p>
        <p>Let’s find out about the role of a digital ethicist!</p>
      </div>
      <div id="continueToTask" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200" data-aos-anchor-placement="bottom-bottom">
        <button class="btn" onclick="continueToTask()">
        Let&rsquo;s go!
        </button>
      </div>
    </div>
  </section>

  <section id="sectionTask" class="hide task flex flex--column" >
    <div class="box box--task bg--offwhite container animate__animated animate__fadeInUp animate__slow">
      <p class="col">You’re going to help put together a job description for a digital ethicist. There are three sections to it but each one has missing parts. Click on the dropdown menu and choose the answer you think is correct for each blank field. When you have finished, click on the “Check” button.</p>

      <div class="questions flex flex--column gap--xxxsm">


            {{--1/3: About the Role--}}
            <div id ="question1" class="question bg--cream text-align--left" >
                      <h2>About the Role</h2>
                      <p>
                          As a digital ethicist, you will be responsible for

                        <span class="input--select-alternative">
                          <select class="question1-1" name="question1-1" id="question1-1">
                              <option value="">select one</option>
                              <option value="0">learning about</option>
                              <option value="1">raising awareness of</option>
                              <option value="0">dictating</option>
                          </select>
                        </span>

                          digital ethics and the associated responsibilities across the organisation and helping to develop
                          <span class="input--select-alternative">
                            <select class="question1-2" name="question1-2" id="question1-2">
                                <option value="">select one</option>
                                <option value="1">systems, processes and tools</option>
                                <option value="0">algorithms</option>
                                <option value="0">products</option>
                            </select>
                          </span>

                          to enable the team to embed digital ethics best practices in their work.
                      </p>
                      <p>
                          This is a thought-provoking, collaborative, fun and challenging role where you will have the opportunity to not only develop a robust and sustainable digital ethics culture within the organisation but also help shape what digital ethics will be like across the industry.
                      </p>
                      <p>
                        Digital ethics is a
                        <span class="input--select-alternative">
                          <select class="question1-3" name="question1-3" id="question1-3">
                              <option value="">select one</option>
                              <option value="0">fascinating and historical</option>
                              <option value="0">narrow and unique</option>
                              <option value="1">new and emerging</option>
                          </select>
                        </span>
                        field so don’t worry if you haven’t worked in this exact role in the past &#8212; we welcome candidates with
                        <span class="input--select-alternative">
                          <select class="question1-4" name="question1-4" id="question1-4">
                              <option value="">select one</option>
                              <option value="0">software development skills</option>
                              <option value="1">diverse backgrounds and experiences</option>
                              <option value="0">a PhD in computer science</option>
                          </select>
                        </span>
                        to join the team!
                      </p>
                      <button type="button" id="checkButton1" class="btn checkButton flex--align-self-start" onclick="checkAnswer()">
                          Check
                      </button>
                
                      <div class='hide success feedback animate__animated animate__zoomIn animate__fastsusccess jsFeedbackSuccess1'
                          id="jsFeedbackSuccess1">
                          <div class="feedback__content">
                            <p>Well done! Let’s continue to the key accountabilities section of this job description.</p>
                            <a class="btn"
                              onclick="continueToNextQuestion()">Continue</a>
                          </div>
                      </div>

                      <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail-empty-1'
                          id="jsFeedbackFail-empty-1">
                          <div class="feedback__content">
                            <p>Please make sure that you have completed all the answers before submitting.</p>
                          
                            <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                          </div>
                      </div>

                      <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail1-0'
                          id="jsFeedbackFail1-0">
                          <div class="feedback__content">
                            <p>
                                Oops! That’s not quite. Read the text carefully and have another go!
                            </p>
                            <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                          </div>
      
                      </div>

                      <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail1-1'
                          id="jsFeedbackFail1-1">
                          <div class="feedback__content">
                            <p>
                                You’ve got one right so far, please have another go at the other ones.
                            </p>
                            <button class="btn"
                                    onclick="tryAgain()">Try Again</button>
                          </div>
                      </div>

                      <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail1-2'
                          id="jsFeedbackFail1-2">
                          <div class="feedback__content">
                            <p>
                                You’re halfway there! Keep trying.
                            </p>
                            <button class="btn"
                                    onclick="tryAgain()">Try Again</button>
                          </div>
                      </div>

                      <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail1-3'
                          id="jsFeedbackFail1-3">
                          <div class="feedback__content">
                            <p>
                                Almost! There’s just one answer that you need to take another look at.
                            </p>
                            <button class="btn"
                                    onclick="tryAgain()">Try Again</button>
                          </div>
                      </div>
            </div>

            {{--2/3: Key Accountabilities--}}
            <div id ="question2" class="question bg--cream text-align--left gap--md flex flex--column" style="display:none;">          
                    <h2>Key Accountabilities</h2>
                    <ul class="list--li-bg-white-48">
                        <li>
                            <p>Build awareness and understanding about digital ethics and why it matters to the organisation and the
                            <span class="input--select-alternative">
                                <select class="question2-1" name="question2-1" id="question2-1">
                                    <option value="">select one</option>
                                    <option value="0">CEO</option>
                                    <option value="0">stock prices</option>
                                    <option value="1">wider community</option>
                                </select>
                              </span>
                            </p></li>
                        <li>
                            <p>Lead the creation and implementation of digital ethics tools and methods, and help build frameworks and systems for digital ethics assessment and
                              <span class="input--select-alternative">
                                <select class="question2-2" name="question2-2" id="question2-2">
                                    <option value="">select one</option>
                                    <option value="0">crime prevention</option>
                                    <option value="1">decision-making</option>
                                    <option value="0">research and funding</option>
                                </select>
                              </span>
                            </p>
                        </li>
                        <li><p>Design and implement learning programmes that will teach colleagues how to apply ethical principles in their work </p></li>
                        <li><p>Work with leaders
                              <span class="input--select-alternative">
                                <select class="question2-3" name="question2-3" id="question2-3">
                                    <option value="">select one</option>
                                    <option value="0">strategically</option>
                                    <option value="1">across all departments</option>
                                    <option value="0">most senior</option>
                                </select>
                              </span>
                                in the organisation to ensure that there is accountability and procedures in place to monitor, prevent and react to potential issues related to digital ethics</p></li>
                        <li>
                            <p>Make sure digital ethics are baked into our corporate
                             <span class="input--select-alternative">
                                <select class="question2-4" name="question2-4" id="question2-4">
                                    <option value="">select one</option>
                                    <option value="0">responsibilities</option>
                                    <option value="0">events</option>
                                    <option value="1">values</option>
                                </select>
                              </span>
                            </p>
                        </li>
                        <li>
                            <p>Develop practices that enhance our brand around the world and ensure that we use
                              <span class="input--select-alternative">
                                <select class="question2-5" name="question2-5" id="question2-5">
                                    <option value="">select one</option>
                                    <option value="0">digital ethics</option>
                                    <option value="1">data and digital technologies</option>
                                    <option value="0">persuasive technology</option>
                                </select>
                              </span>
                                for good</p>
                        </li>
                    </ul>

                    <button type="button" id="checkButton2" class="checkButton flex--align-self-start btn" onclick="checkAnswer()">
                        Check
                    </button>
           
                    <div class='hide success feedback animate__animated animate__zoomIn animate__fastsusccess jsFeedbackSuccess2'
                        id="jsFeedbackSuccess2">
                        <div class="feedback__content">
                          <p>
                              Nice work! Now that you’ve completed the key accountabilities section of this job description, can you determine what skills and experiences the employer may be looking for?
                          </p>
                          <a class="btn"
                            onclick="continueToNextQuestion()">Continue</a>
                        </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail-empty-2'
                        id="jsFeedbackFail-empty-2">
                        <div class="feedback__content">
                          <p>
                              Please make sure that you have completed all the answers before submitting.
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail2-0'
                        id="jsFeedbackFail2-0">
                        <div class="feedback__content">
                          <p>
                              Oops! That’s not quite. Read the text carefully and have another go!
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail2-1'
                        id="jsFeedbackFail2-1">
                      <div class="feedback__content">
                        <p>
                            One down, four to go! Please have another go.
                        </p>
                        <button class="btn"
                                onclick="tryAgain()">Try Again</button>
                      </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail2-2'
                        id="jsFeedbackFail2-2">
                        <div class="feedback__content">
                          <p>
                              Two down, three to go! Keep up the good work.
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>  
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail2-3'
                        id="jsFeedbackFail2-3">
                        <div class="feedback__content">
                          <p>
                              Nice work, you’ve got three right so far! There are two that you need to take another look at.
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail2-4'
                        id="jsFeedbackFail2-4">
                        <div class="feedback__content">
                          <p>
                              You’re very close! There’s just one answer that you need to take another look at.
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>
              
            </div>

            {{--3/3: We are looking for someone who--}}
            <div id ="question3" class="question question bg--cream text-align--left gap--md flex flex--column" style="display:none;">       
                    <h2>We are looking for someone who</h2>
                    <ul class="list--li-bg-white-48"> 
                        <li>
                            <p>Has a strong sense of
                              <span class="input--select-alternative">
                                <select class="question3-1" name="question3-1" id="question3-1">
                                    <option value="">select one</option>
                                    <option value="0">fulfilment</option>
                                    <option value="1">integrity</option>
                                    <option value="0">ego</option>
                                </select>
                              </span>
                            </p>
                        </li>
                        <li>
                            <p>Is passionate about embracing and managing change</p>
                        </li>
                        <li>
                            <p>Can demonstrate great communication and leadership skills, enjoys working
                              <span class="input--select-alternative">
                                <select class="question3-2" name="question3-2" id="question3-2">
                                    <option value="">select one</option>
                                    <option value="0">within a team</option>
                                    <option value="1">collaboratively across teams</option>
                                    <option value="0">independently</option>
                                </select>
                              </span>
                                and can bridge gaps between technical and non-technical co-workers
                            </p>
                        </li>
                        <li>
                            <p>Wants to guide business decisions around data and digital technology towards the benefit of people and the
                              <span class="input--select-alternative">
                                <select class="question3-3" name="question3-3" id="question3-3">
                                    <option value="">select one</option>
                                    <option value="1">environment</option>
                                    <option value="0">CEO</option>
                                    <option value="0">shareholders</option>
                                </select>
                              </span>
                            </p>
                        </li>
                        <li>
                            <p>Can work effectively in a fast-paced and dynamic environment
                            </p>
                        </li>
                        <li>
                            <p>Enthusiastic about
                                <span class="input--select-alternative">
                                  <select class="question3-4" name="question3-4" id="question3-4">
                                    <option value="">select one</option>
                                    <option value="0">debating</option>
                                    <option value="0">table tennis</option>
                                    <option value="1">critical thinking</option>
                                  </select>
                                </span>
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
                              <span class="input--select-alternative">
                                <select class="question3-5" name="question3-5" id="question3-5">
                                    <option value="">select one</option>
                                    <option value="0">potential scale</option>
                                    <option value="0">profitability</option>
                                    <option value="1">impact</option>
                                </select>
                              </span>
                                of digital technology</p>
                        </li>
                        <li>
                            <p>Has strong
                              <span class="input--select-alternative">
                                <select class="question3-6" name="question3-6" id="question3-6">
                                    <option value="">select one</option>
                                    <option value="0">coding</option>
                                    <option value="0">design</option>
                                    <option value="1">analytical</option>
                                </select>
                              </span>
                                skills</p>
                        </li>



                    </ul>
                    <button type="button" id="checkButton3" class="checkButton flex--align-self-start btn" onclick="checkAnswer()">
                        Check
                    </button>
                    <div class='hide success feedback animate__animated animate__zoomIn animate__fastsusccess jsFeedbackSuccess3'
                        id="jsFeedbackSuccess3">
                        <div class="feedback__content">
                          <p class="">Well done! You have assembled the description brilliantly.</p>
                          <p>There’s no set path to working as a digital ethicist. As you can see, the role is quite a varied and dynamic one that requires a wide range of <span class="tooltip-trigger jsTooltip" data-tooltip-content="#tooltip6_content">meta-skills</span>, experiences, backgrounds, and interests - many of which you may already have! </p>
                          <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
                        </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail-empty-3'
                        id="jsFeedbackFail-empty-3">
                        <div class="feedback__content">
                          <p>
                              Please make sure that you have completed all the answers before submitting.
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail3-0'
                        id="jsFeedbackFail3-0">
                        <div class="feedback__content">
                          <p>
                              Oops! That’s not quite. Read the text carefully and have another go!
                          </p>
                          <button class="btn"
                                onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail3-1'                    
                        id="jsFeedbackFail3-1">
                        <div class="feedback__content">
                          <p>
                              That’s one down, now there are five to go!
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>

                    <div class='hide  fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail3-2'
                        id="jsFeedbackFail3-2">
                        <div class="feedback__content">
                          <p>
                              You’ve got two right, there are four to go!
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail3-3'
                        id="jsFeedbackFail3-3">
                        <div class="feedback__content">
                          <p>
                              Keep up the good work! You’re halfway there already.
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail3-4'
                        id="jsFeedbackFail3-4">
                        <div class="feedback__content">
                          <p>
                              Nice work, you’ve got four right so far! There are two that you need to take another look at.
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>

                    <div class='hide fail feedback animate__animated animate__zoomIn animate__fastfail jsFeedbackFail3-5'
                        id="jsFeedbackFail3-5">
                        <div class="feedback__content">
                          <p>
                              You’re so close! There’s just one that you need to try again.
                          </p>
                          <button class="btn"
                                  onclick="tryAgain()">Try Again</button>
                        </div>
                    </div>
            </div>
      </div>

    </div>
  </section>


</main>

@endsection @section('javascript')

<script src="/badge-assets/{{$url['slug']}}/_global/js/tasks/step3.js"></script>
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
  oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>

@endsection
