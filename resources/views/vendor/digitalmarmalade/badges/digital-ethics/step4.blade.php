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
      <li class="step active">4</li>
      <li class="step">5</li>
      <li class="step">6</li>
      <li class="step">7</li>
      <li class="step">8</li>
    </ol>
    <div class="container">
      <div class='box box--step-header bg--blue flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <div class="flex flex--column gap box__copy">
          <h1>Thinking Like a Digital Ethicist</h1>
          <p>You now know about the role of a digital ethicist, why they are needed and what they are responsible for. Next, you’re going to learn how to think like one.</p>
        </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--framework.svg" alt="" />
      </div>     
      <div class="col flex flex--column gap--sm text-align--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <p>It can be helpful to have a structure and a methodology to use when you encounter a situation for ethical assessment.</p>
        <p>In this section, you will learn about a Digital Ethics Guide with seven steps, each containing a series of questions that can be applied to any product, service, situation, or company culture for ethical consideration.</p>
        <p>This framework aims to help you weigh the moral and ethical impacts of a digital innovation so that you can ensure it is actually helping people and not harming them.</p>
        <p>The seven steps are as follows:</p>
      </div>

      <ul class="framework static col">
        <li class="framework__step-header"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
            <span class="step">1</span>
            <span>Purpose</span>
        </li>
        <li class="framework__step-header"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
            <span class="step">2</span>
            <span>Benefits </span>
        </li>
        <li class="framework__step-header"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000">
            <span class="step">3</span>
            <span>Risks</span>
        </li>
        <li class="framework__step-header bg--green"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200">
            <span class="step">4</span>
            <span>Security & Privacy</span>
        </li>
        <li class="framework__step-header bg--green"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400">
            <span class="step">5</span>
            <span>Wellbeing </span>
        </li>
        <li class="framework__step-header bg--green"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1600">
            <span class="step">6</span>
            <span>Transparency</span>
        </li>
        <li class="framework__step-header bg--green"  data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1800">
            <span class="step">7</span>
            <span>Accountability</span>
        </li>
      </ul>

      <div class="col flex flex--column gap--sm text-align--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2000">
          <p>The first three steps are there to help you gain a thorough understanding of the technology that you are presented with, assessing whether it's fulfilling its intended purpose and figuring out its potential impacts &mdash; both the good and the bad. </p>
          <p>Once you’ve assessed the situation, steps four to seven will help you take your ethical investigation to the next level and identify potential ethical issues and their causes.</p>
          <p>Let’s take a closer look. Click the arrow to expand each section and read through the questions for consideration.</p>
      </div>

      <div class="framework col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2200">
          <div class="framework__step" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
            <input type="checkbox" id="chck1-1" onclick="inputCheckBox()">
            <label class="framework__step-header" for="chck1-1">
              <span class="step">1</span>
              <span>Purpose</span>
            </label>
            <ul class="framework__step-content list--li-bg-white-48 text-align--left">
              <li>What are the goals, purposes and intended applications of the technology?</li>
              <li>Is the technology fulfilling its purpose?</li>
            </ul>
          </div>
          <div class="framework__step" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
            <input type="checkbox" id="chck2-1" onclick="inputCheckBox()">
            <label class="framework__step-header" for="chck2-1">
              <span class="step">2</span>
              <span>Benefits</span>
            </label>
            <ul class="framework__step-content list--li-bg-white-48 text-align--left">
              <li>Who or what might benefit from the technology? Consider all who may be at risk, including individuals, groups, whole communities and the environment. </li>
            </ul>
          </div>
          <div class="framework__step" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
            <input type="checkbox" id="chck3-1" onclick="inputCheckBox()">
            <label class="framework__step-header" for="chck3-1">
              <span class="step">3</span>
              <span>Risks</span>
            </label>
            <ul class="framework__step-content list--li-bg-white-48 text-align--left">
              <li>Who or what might be at risk from the intended and unintended applications of the technology? Consider all who may be at risk, including individuals, groups, whole communities and the environment. </li>
              <li>Have all potential risks of the technology been considered from all angles, including accidental or intentional misuse?</li>
              <li>Is there a risk of the technology being used for discrimination? Does it exclude any groups or members of society in any way? Is it exploitative?</li>
              <li>How can it be known whether a bias has been created or reinforced with the system (e.g. data or algorithmic bias)?</li>
              <li>Is there currently a process to classify and assess potential risks associated with the use of this technology?</li>
            </ul>
          </div>
          <div class="framework__step" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
            <input type="checkbox" id="chck4-1" onclick="inputCheckBox()">
            <label class="framework__step-header bg--green" for="chck4-1">
              <span class="step">4</span>
              <span>Security & Privacy</span>
            </label>
            <ul class="framework__step-content list--li-bg-white-48 text-align--left  bg--green">
              <li>Does the technology respect and uphold an individual’s right to privacy and ensure personal data is protected and secure?</li>
              <li>Do people have a choice whether to provide their data and do they have access to their data?</li>
              <li>Is the use and handling of data responsible and compliant with legislation? Is there even more that can be done to ensure security and privacy, beyond the baseline of legal requirements?</li>
              <li>Is the collection and use of personal data appropriate and necessary for what this technology is intended to do and are all parties involved aware of how their personal data will be handled?</li>
              <li>What systems are in place to ensure data security and integrity?</li>
            </ul>
          </div>
          <div class="framework__step" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
            <input type="checkbox" id="chck5-1" onclick="inputCheckBox()">
            <label class="framework__step-header bg--green" for="chck5-1">
              <span class="step">5</span>
              <span>Wellbeing</span>
            </label>
            <ul class="framework__step-content list--li-bg-white-48 text-align--left  bg--green">
              <li>Do those affected have control over the usage or impact of your technology?</li>
              <li>Are people able to choose whether they use it or take part in it? Would not using it prevent them from achieving something important?</li>
              <li>Are users being deceived?</li>
              <li>Is user behaviour being manipulated?</li>
              <li>Might the technology affect user emotions and/or their mental health negatively?</li>
            </ul>
          </div>
          <div class="framework__step" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
            <input type="checkbox" id="chck6-1" onclick="inputCheckBox()">
            <label class="framework__step-header bg--green" for="chck6-1">
              <span class="step">6</span>
              <span>Transparency</span>
            </label>
            <ul class="framework__step-content list--li-bg-white-48 text-align--left  bg--green">
              <li>Does the organisation have proper systems and processes in place to ensure that the way the technology is created and implemented is transparent, trustworthy and reliable?</li>
              <li>Does the organisation communicate clearly, honestly, and directly about any potential risks of the product or service being provided?</li>
              <li>Is the functionality and intended purpose of the technology communicated to users and the public in a way that is accessible and easy to understand?</li>
              <li>Does the organisation engage with its team, partners, users and wider community to listen to, discuss and address ethical concerns?</li>
            </ul>
          </div>
          <div class="framework__step" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
            <input type="checkbox" id="chck7-1" onclick="inputCheckBox()">
            <label class="framework__step-header bg--green" for="chck7-1">
              <span class="step">7</span>
              <span>Accountability</span>
            </label>
            <ul class="framework__step-content list--li-bg-white-48 text-align--left  bg--green">
              <li>Who makes the key decisions when it comes to how this technology is designed, implemented, and distributed? Are they qualified to be making these decisions? Are they knowledgeable and representative of those who their technology might impact?</li>
              <li>Who is accountable if something goes wrong? Are they the appropriate people with the required knowledge and skills? Accountability is essential to complying with regulatory and legal requirements.</li>
              <li>Are there robust procedures in place for team members to follow if things go wrong? </li>
            </ul>
          </div>
        </div>
      <div id="continueToTask" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2400" data-aos-anchor-placement="bottom-bottom">
        <button id="letsGo" class="hide btn " onclick="continueToTask()">
        Let&rsquo;s go!
        </button>
      </div>
    </div>
  </section>

  <section id="sectionTask" class="hide task flex flex--column" >
    <div class="container animate__animated animate__fadeInUp animate__slow">
      <p class="col text-align--center">Please have a go at using the Digital Ethics Guide to help you consider the ethics of the “Like” button on social media. You may click on the "Digital Ethics Guide" button above each question if you need to refer to it at any time.</p>
      <div class="questions flex flex--column">
        <div class="flex flex--column flex--align-center ">
          <div class="flex header--case-study">
              <div class="flex flex--column gap--sm flex-1 flex--justify-center flex--grow-1">
                <p>The “Like” button is a feature on social media platforms that enables users to express that they like, enjoy or support something that has been shared online, which may be in the form of a statement, photo, video, or article.</p>
                <p>Most social media platforms display the number of people who have liked each piece of content and may show a full or partial list of the individuals who have liked the content as well.</p>
              </div>
              <div class="flex flex-1 flex--align-end">
                <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--task-like-button-1.svg" alt="" />
              </div>
          </div>

          <div id="questionSection" class="flex flex--column box box--task bg--offwhite">
            <div class="container--steps-with-button">
              <ol class="step-counter flex gap--sm flex--align-center">
                <li class="step dot-1 active">1</li>
                <li class="step dot-2">2</li>
                <li class="step dot-3">3</li>
                <li class="step dot-4">4</li>
                <li class="step dot-5">5</li>
                <li class="step dot-6">6</li>
              </ol>
              <button class="btn secondary" onclick="openFramework()"> Digital Ethics Guide</button>
            </div>
            <div class="questions flex flex--column gap--md flex--center">
              {{--Question 1/6--}}
   
                  <div id ="question1" class="question">
                      <div class="flex flex--column gap--sm col flex--center">
                        <p>
                            Think about the intended purposes of the “Like” button.
                            Is this feature fulfilling its intended purpose?
                        </p>
                      </div>
                      <div class="answers flex--justify-center flex flex--wrap gap--sm">
                        <div>
                          <input type="radio" id="option1" name="options1" value="a">
                          <label for="option1">Yes</label>
                        </div>
                        <div>
                          <input type="radio" id="option2" name="options1" value="b">
                          <label for="option2">No</label>
                        </div>
                      </div>
                      <button type="button" id="checkButton1" class="checkButton btn" onclick="checkAnswer1()">
                          Submit
                      </button>
                  </div>
            
                  <div class='hide jsFeedbackSuccess1 success feedback animate__animated animate__zoomIn animate__faster'
                      id="jsFeedbackSuccess1">
                      <div class="feedback__content">
                        <p >That’s correct! The "Like” button lets the author know that another user likes, enjoys or supports their post.</p>
                        <button class="btn "
                          onclick="continueToNextQuestion()">Next</button>
                      </div>
                  </div>

                  <div class='hide jsFeedbackFail1 fail feedback animate__animated animate__zoomIn animate__faster' 
                      id="jsFeedbackFail1">
                      <div class="feedback__content">
                        <p >
                            Interesting answer… At face value, the “Like” button fulfils its intended purpose because it does let the author know that someone likes their post.
                        </p>
                        <button class="btn "
                                onclick="nextInputText()">Next</button>
                      </div>          
                  </div>
                  
                  <div class='hide jsInputText1 ' id="jsInputText1">
                    <div class="flex flex--column gap--md flex--center">
                      <div class="flex flex--column gap--sm col flex--center">
                          <p>Why don't you think it’s fulfilling its purpose? Please enter your ideas in the box below.</p>
                          <p><i>Please write a minimum of 10 words in the space below.</i></p>
                      </div>
                      <div class="answers flex--justify-center flex flex--wrap gap--sm">
                        <textarea id="inputTextArea1" name="inputTextArea1" placeholder="Please write a minimum of 10 words"></textarea>
                      </div>
                      <button type="button" id="checkTextButton1" class="checkTextButton btn" onclick="checkInputText()">
                          Submit
                      </button>
                    </div>
                  </div>

                  <div class='hide jsFeedbackSuccessInputText1 success feedback animate__animated animate__zoomIn animate__faster'
                      id="jsFeedbackSuccessInputText1">
                      <div class="feedback__content">
                        <p class="">You may be onto something… let’s keep going!</p>
                        <a class="btn "
                          onclick="continueToNextQuestion()">Next</a>
                      </div>
                  </div>

                  <div class='hide jsFeedbackFailInputText1 fail feedback animate__animated animate__zoomIn animate__faster'
                      id="jsFeedbackFailInputText1">
                      <div class="feedback__content">
                        <p>
                            You won’t be able to move on until you enter an answer. You can’t go wrong here, it’s entirely up to you.
                        </p>
                        <button class="btn "
                                onclick="tryAgainInputText()">Try Again</button>
                      </div>          
                  </div>

                <div class='hide jsFeedbackFailInputText12 fail feedback animate__animated animate__zoomIn animate__faster'
                     id="jsFeedbackFailInputText12">
                    <div class="feedback__content">
                        <p>
                            Please write a minimum of 10 words.
                        </p>
                        <button class="btn "
                                onclick="tryAgainInputText()">Try Again</button>
                    </div>
                </div>
             
         

                 
  


              {{--Question 2/6--}}
       
                  <div id ="question2" class="question"  style="display:none;">
                      <div class="flex flex--column gap--sm col flex--center">
                        <p>
                        Think about some of the benefits of the “Like” button.
                          Who might benefit from this feature?
                        </p>
                        <p><i>Please select all that apply.</i></p>
                      </div>
                      <div class="answers flex--justify-center flex flex--wrap gap--sm">
                        <div>                     
                          <input type="checkbox" id="option2-1" class="options2" name="options2" value="1">
                          <label for="option2-1">The people who post content </label>
                        </div>
                        <div> 
                          <input type="checkbox" id="option2-2" class="options2" name="options2" value="1">
                          <label for="option2-2">The people who “like” content</label>
                        </div>
                        <div> 
                          <input type="checkbox" id="option2-3" class="options2" name="options2" value="1">
                          <label for="option2-3">Everyone on the platform who can see that content has been “liked”</label>
                        </div>
                      </div>
                      <button type="button" id="checkButton2" class="checkButton btn" onclick="checkAnswer2()">
                          Submit
                      </button>
         
                      <div class='hide jsFeedbackSuccess2 success feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackSuccess2">
                          <div class="feedback__content">
                            <p>That’s correct, all the people listed can benefit from this feature. The author can gauge the support that they are receiving from other users, users have a way to show their appreciation or support of a post, and everyone else on the platform can see posts that have received acknowledgement and appreciation.</p>
                            <a class="btn "
                              onclick="nextInputText()">Next</a>
                          </div>
                      </div>

                      <div class='hide jsFeedbackFail2 fail feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackFail2">
                          <div class="feedback__content">
                            <p >
                                You’re close! Are there any other individuals or groups that you think could benefit?
                            </p>
                            <!--Agnes, we need to tweak here to allow the user to try again to select all answers -->
                            <button class="btn "
                            onclick="tryAgainQuestion2()">Try again</button>
                        </div>

                      </div>
                  </div>

                  <div class='hide jsInputText2' id="jsInputText2">
                    <div class="flex flex--column gap--md flex--center">
                     <div class="flex flex--column gap--sm col flex--center">
                        <p>Can you think of any other benefits of the “Like” button that haven’t been mentioned yet?</p>
                        <p><i>Enter your ideas in the box below.</i></p>
                      </div>
                      <div class="answers flex--justify-center flex flex--wrap gap--sm">
                        <textarea id="inputTextArea2" name="inputTextArea2" placeholder=""></textarea>
                      </div>  
                      <button type="button" id="checkTextButton2" class="checkTextButton btn" onclick="checkInputText()">
                          Submit
                      </button>
                    </div>
                  </div>

           
                  <div class='hide jsFeedbackSuccessInputText2 success feedback animate__animated animate__zoomIn animate__faster'
                      id="jsFeedbackSuccessInputText2">
                      <div class="feedback__content">
                        <p class="">Great ideas! Let's continue.</p>
                        <a class="btn "
                          onclick="continueToNextQuestion()">Next</a>
                      </div>
                  </div>

                <div class='hide jsFeedbackSuccessInputText21 success feedback animate__animated animate__zoomIn animate__faster'
                     id="jsFeedbackSuccessInputText21">
                    <div class="feedback__content">
                        <p class="">Let's continue.</p>
                        <a class="btn "
                           onclick="continueToNextQuestion()">Next</a>
                    </div>
                </div>

                  <div class='hide jsFeedbackFailInputText2 fail feedback animate__animated animate__zoomIn animate__faster'
                      id="jsFeedbackFailInputText2">
                      <div class="feedback__content">
                        <p>
                            You won’t be able to move on until you enter an answer. If you don’t think there are any other benefits of the “Like” button, you can just type “no”.
                        </p>
                        <button class="btn "
                                onclick="tryAgainInputText()">Try Again</button>
                      </div>
                  </div>

                <div class='hide jsFeedbackFailInputText22 fail feedback animate__animated animate__zoomIn animate__faster'
                     id="jsFeedbackFailInputText22">
                    <div class="feedback__content">
                        <p>
                            Please write a minimum of 10 words.
                        </p>
                        <button class="btn "
                                onclick="tryAgainInputText()">Try Again</button>
                    </div>
                </div>


            </div>
              {{--Question 3/6--}}

              <div id ="question3" class="question"  style="display:none;">
                <div class="flex flex--column gap--sm col">
                  <p>
                      Think about the people who will interact with the “Like” button.
                        Who might be most at risk of a negative experience because of the “Like” button?
                        

                    </p>
                  <p><i>Please select all that apply.</i></p>
                </div>
                <div class="answers flex--justify-center flex flex--wrap gap--sm">
                  <div>
                    <input type="checkbox" id="option3-1" class="options3" name="options3" value="1">
                    <label for="option3-1">The people who post content </label>
                  </div>
                  <div>
                    <input type="checkbox" id="option3-2" class="options3" name="options3" value="1">
                    <label for="option3-2">The people who “like” content</label>
                  </div>
                  <div>
                    <input type="checkbox" id="option3-3" class="options3" name="options3" value="1">
                    <label for="option3-3">Everyone on the platform who can see that content has been “liked”</label>
                  </div>
                </div>
                  <button type="button" id="checkButton3" class="checkButton btn" onclick="checkAnswer3()">
                      Submit
                  </button>
    
                  <div class='hide jsFeedbackSuccess3 success feedback animate__animated animate__zoomIn animate__faster'
                      id="jsFeedbackSuccess3">
                      <div class="feedback__content">
                        <p>That’s correct! But why? Do you know how they may be at risk? Let’s keep going and work this out.</p>
                        <a class="btn "
                          onclick="continueToNextQuestion()">Next</a>
                      </div>
                  </div>

                  <div class='hide jsFeedbackFail3 fail feedback animate__animated animate__zoomIn animate__faster'
                      id="jsFeedbackFail3">
                      <div class="feedback__content">
                        <p>
                            Hmm… think about how each of the groups listed might be at risk and compare them to try to identify which group has the highest risk.
                            Tip: You may find it helpful to write down how you think each group could be at risk as a brainstorm.
                        </p>
                        <button class="btn "
                                onclick="tryAgainQuestion3()">Try Again</button>
                    </div>
                  </div>
          
              </div>

              {{--Question 4/6--}}
      
                  <div id ="question4" class="question" style="display:none;">
                    <div class="flex flex--column gap--sm col">
                        <p>You have just identified that people who post content are most at risk of having a negative experience as a result of the “Like” button.</p>
                        <p>To determine what some potential negative experiences might be, let’s use the framework to investigate further. You can access  the framework by clicking on the button above.</p>
                        <p>The framework has four areas that can help us assess what or where ethical risks may be. The four areas are: security and privacy, wellbeing, transparency, and accountability.</p>
                        <p>For the people who post content, which area has the highest risk for ethical concerns?</p>
                      </div>
                      <div class="answers flex--justify-center flex flex--wrap gap--sm">
                        <div>
                          <input type="checkbox" id="option4-1" class="options4" name="options4" value="1">
                          <label for="option4-1">Security & Privacy</label>
                         </div>
                         <div>
                          <input type="checkbox" id="option4-2" class="options4" name="options4" value="1">
                          <label for="option4-2">Wellbeing</label>
                        </div>
                        <div>
                          <input type="checkbox" id="option4-3" class="options4" name="options4" value="1">
                          <label for="option4-3">Transparency</label>
                         </div>
                        <div>
                          <input type="checkbox" id="option4-4" class="options4" name="options4" value="1">
                          <label for="option4-4">Accountability</label>
                        </div>
                      </div>
                      <button type="button" id="checkButton4" class="checkButton btn" onclick="checkAnswer4()">
                          Submit
                      </button>
             
                      <div class='hide jsFeedbackSuccess4 success feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackSuccess4">
                          <div class="feedback__content">
                            <p >That’s correct! Now let’s dive deeper.</p>
                            <a class="btn "
                              onclick="continueToNextQuestion()">Next</a>
                          </div>
                      </div>

                      <div class='hide jsFeedbackFail4-0 fail feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackFail4-0">
                          <div class="feedback__content">
                            <p >
                                Oops, that’s not quite right. Please select just one focus area.
                            </p>
                            <button class="btn "
                                    onclick="tryAgainQuestion4()">Try Again</button>
                          </div>
                      </div>

                      <div class='hide jsFeedbackFail4-1 fail feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackFail4-1">
                          <div class="feedback__content">
                            <p>
                                Although the “Like” button gathers information like a user’s preferences for certain types of content, it does not put the user’s personal information, privacy, or security at high risk. Please try again.
                            </p>
                            <button class="btn "
                                    onclick="tryAgainQuestion4()">Try Again</button>
                          </div>
                      </div>

                      <div class='hide jsFeedbackFail4-2 fail feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackFail4-2">
                          <div class="feedback__content">
                            <p>
                                An ethical concern within transparency could be that the company behind the social media platform may not have clearly and thoroughly communicated all the information about the nature of the product or service and its potential risks. However, this is not the ethical concern with the highest direct risk to the people posting content. Please try again.
                            </p>
                            <button class="btn "
                                    onclick="tryAgainQuestion4()">Try Again</button>
                          </div>
                      </div>

                      <div class='hide jsFeedbackFail4-3 fail feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackFail4-3">
                          <div class="feedback__content">
                            <p>
                                An ethical concern within accountability might be that the company behind the social media platform may not have a designated individual or team ready to react if something goes wrong with the “Like” button, however, this is not the ethical concern with the highest risk of this feature for the people posting content. Please try again.
                            </p>
                            <button class="btn "
                                    onclick="tryAgainQuestion4()">Try Again</button>
                          </div>
                      </div>
                
              </div>

              {{--Question 5/6--}}
         
                  <div id ="question5" class="question" style="display:none;">
                    <div class="flex flex--column gap--sm col">
                        <h2>Wellbeing</h2>
                        <p>
                            According to the <strong>wellbeing section</strong> of the framework, which of the following questions need to be considered? 
                            
                        </p>
                        <p><i>(Hint: If you need a refresher, you can access  the framework by clicking  on the button above.)</i></p>
                        <p><i>Please select all that apply.</i></p>
                      </div>
                      <div class="answers flex--justify-center flex flex--wrap gap--sm">
                        <div>
                          <input type="checkbox" id="option5-1" class="options5" name="options5" value="1">
                          <label for="option5-1">Do those affected have control over the usage or impact of your technology?</label>
                        </div>
                        <div>
                          <input type="checkbox" id="option5-2" class="options5" name="options5" value="1">
                          <label for="option5-2">Who makes the key decisions when it comes to how this technology is designed, implemented, and distributed?</label>
                        </div>
                        <div>
                          <input type="checkbox" id="option5-3" class="options5" name="options5" value="1">
                          <label for="option5-3">Are people able to choose whether they use it or take part in it? Would not using it prevent them from achieving something important?</label>
                        </div>
                        <div>
                          <input type="checkbox" id="option5-4" class="options5" name="options5" value="1">
                          <label for="option5-4">Are users being deceived?</label>
                        </div>
                        <div>
                          <input type="checkbox" id="option5-5" class="options5" name="options5" value="1">
                          <label for="option5-5">Is the use and handling of data responsible and compliant with legislation?</label>
                        </div>
                        <div>
                          <input type="checkbox" id="option5-6" class="options5" name="options5" value="1">
                          <label for="option5-6">Is user behaviour being manipulated?</label>
                        </div>
                        <div>
                          <input type="checkbox" id="option5-7" class="options5" name="options5" value="1">
                          <label for="option5-7">Might the technology affect user emotions and/or their mental health?</label>
                        </div>
                      </div>
                      <button type="button" id="checkButton5" class="checkButton btn" onclick="checkAnswer5()">
                          Submit
                      </button>
            
                      <div class='hide jsFeedbackSuccess5 success feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackSuccess5">
                          <div class="feedback__content">
                            <p>You have correctly identified the questions that need to be considered within the wellbeing section of the framework, well done!</p>
                            <a class="btn "
                              onclick="continueToNextQuestion()">Next</a>
                          </div>
                      </div>

                      <div class='hide jsFeedbackFail5-1 fail feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackFail5-1">
                          <div class="feedback__content">
                            <p>
                                Hint: You need to select five answers.
                            </p>
                            <button class="btn "
                                    onclick="tryAgainQuestion5()">Try Again</button>
                          </div>
                      </div>

                      <div class='hide jsFeedbackFail5-2 fail feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackFail5-2">
                          <div class="feedback__content">
                            <p>
                                Oops, that’s not quite right. You might find it helpful to take another look at the framework before trying again.
                            </p>
                            <button class="btn "
                                    onclick="tryAgainQuestion5()">Try Again</button>
                          </div>
                      </div>
               
              </div>

              {{--Question 6/6--}}
      
                  <div id ="question6" class="question" style="display:none;">
                     <div class="flex flex--column gap--lg col">
                        <p>Now, using these questions (we have listed the questions from wellbeing below) to guide your thinking, consider how the “Like” button may impact those <strong>who post content</strong>.</p>
                        <p><i>Hint: Run through these one by one and decide which one(s) are relevant to the question at hand. Then, use the relevant questions to help you dig deeper.</i></p>
  

                        <ul class="bg--cream list--li-bg-white-48">
                            <li>Do those affected have control over the usage or impact of your technology?</li>
                            <li>Are people able to choose whether they use it or take part in it?</li>
                            <li>Would not using it prevent them from achieving something important?</li>
                            <li>Are users being deceived?</li>
                            <li>Is user behaviour being manipulated?</li>
                            <li>Might the technology affect user emotions and /or their mental health negatively?</li>
                        </ul>

                        <p>When you are ready, please answer the following question: Can you identify the <strong>ethical concern</strong> below that people posting content may experience?</p>
                      </div>
                      <div class="answers flex--justify-center flex flex--wrap gap--sm">
                        <div>
                          <input type="radio" id="option6-1" class="options6" name="options6" value="1">
                          <label for="option6-1">People who receive too few likes may get bored of the platform and abandon it</label>
                        </div>
                        <div>
                          <input type="radio" id="option6-2" class="options6" name="options6" value="2">
                          <label for="option6-2">People use the “Like” button as a gauge of social support and when a post receives little recognition, it can cause feelings of anxiety, insecurity, and depression</label>
                        </div>
                        <div>
                          <input type="radio" id="option6-3" class="options6" name="options6" value="3">
                          <label for="option6-3">People who get too many likes on their posts might suffer from an inflated ego</label>
                        </div>
                      </div>
                      <button type="button" id="checkButton6" class="checkButton btn" onclick="checkAnswer6()">
                          Submit
                      </button>
        
                      <div class=' hide jsFeedbackSuccess6  animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackSuccess6">
                            <div class=" flex flex--column flex--align-center gap--lg">
                              <div class="success flex flex--column gap--lg feedback flex--justify-center">
                                <div class="feedback__content">
                                  <p>
                                      You got it! Although the “Like” button was created to promote positivity and is a way for users to show support for a post, studies show that “likes”, or a perceived lack of “likes” could unfortunately cause depression in social media users. This can also lead to users feeling inferior after comparing themselves to their seemingly more successful, or better “liked” peers.
                                  </p>
                                </div>
                              </div>

                              <div class="box bg--cream box--did-you-know">  
                                  <div class=" box--copy flex flex--column gap--sm flex-1">
                                    <h3>Did you know?</h3>
                                    <p>
                                        Did you know that this “Like” button case study is based on true events which are supported by scientific studies? The person who invented the “Like” button has since written that he doesn’t like it very much anymore and considers this invention as a contributor to “time poorly spent”. To read more about this, you can look up former Facebook engineer, Justin Rosenstein.
                                    </p>
                                  </div>
                                  <div class="flex flex-1 flex--align-end box__img">
                                    <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--task-like-button-2.svg" alt="" />
                                  </div>
                                </div>

                                <p class="col">
                                    A big and positive difference could be made in the world if everybody thought about technology the way digital ethicists do!
                                </p>
      

                              <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
                          </div>
                      </div>

                      <div class='hide jsFeedbackFail6 fail feedback animate__animated animate__zoomIn animate__faster'
                          id="jsFeedbackFail6">
                          <div class="feedback__content">
                            <p>
                                Hmm that’s not quite right. Read through each of the statements carefully and try again.
                            </p>
                            <button class="btn "
                                    onclick="tryAgainQuestion6()">Try Again</button>
                          </div>
                      </div>
               
              </div>
          </div>
        
        </div>
      </div>    
    </div>
  </section>


</main>

<!--Agnes, we need to hide this overlay, and show when user clicks on the button that says 'Digital Ethics Guides; also, can you please use your js magic to stop (while the overlay is open) the content of that step to work; reason being: i am using the same partial for the framework but that is stoping the framework on the overlay of working because of the conflicts with the ids. If you manage to stop the framework on the page to work while the overlay is open (like hiding it for instance, that should solve the issue - obviously we need to toggle that back when overaly is closed) -->
@include('vendor.digitalmarmalade.badges.digital-ethics.partials.overlay')


@endsection @section('javascript')

<script src="/badge-assets/{{$url['slug']}}/_global/js/tasks/step4.js"></script>
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
  oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>

@endsection
