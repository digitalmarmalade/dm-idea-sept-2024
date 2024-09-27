@extends($url['viewDir'] . $url['slug'] . '.master')
<link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/wordsearch.css">
@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.sustainable-development-goals.header', ['title' => 'Header'])

<ul class="steps">
  <li>1</li>
  <li>2</li>
  <li class="steps--active">3</li>
  <li>4</li>
</ul>

<main class="step-3 bg-cream">

  <section class="step-3">


    <div class="step-3-intro">

      <div class="step-3-intro-text">
          <p>
          A <strong>goal keeper</strong>  is someone who tries to create positive impact in people’s lives, and helps accelerate progress towards the SDGs.
        </p>
      </div>
    </div>


<div class="goal-keeper-boxes">


  <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goal-keeper.png" alt="" class="goal-keeper-img" data-aos="fade-up"  data-aos-delay="200">


  <div class="goal-2-col">

    <div class="goal-1-col">

      <div class="goal-keeper-box pace-of-change" data-aos="fade-right" data-aos-delay="100" >
        <p>
          The pace of change of technology means we are living in an increasingly interconnected world.
        </p>
      </div>

      <div class="textblock" data-aos="fade-right" data-aos-delay="200" >

        <p>
          If you want to make a difference, you can in both small ways and big ways. </p>
        <p>
        Discovering more about the SDGs will help us become global citizens. Exploring how you we help means we are caring for others and the planet itself.
        </p>
      </div>
    </div>

    <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goal-keeper-desktop.png" alt="" class="goal-keeper-desktop hide-mobile desktop-img " data-aos="fade-up" data-aos-delay="500">


    <div class="goal-keeper-box multicultural-world" data-aos="fade-right" data-aos-delay="300" >
      <p>
         We are also living in an increasingly multicultural world.
      </p>
      <p>
         To succeed and thrive, it is essential to understand other people from other places – the way they live, their points of view, their challenges.
      </p>
      <p>
         The SDGs are universal goals, which means they are for everyone.
      </p>

<!--
      <div class="multicultural-world-img">
        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/multicultural-world.png" alt="" class="box-align-bottom mobile-img">

      <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/multicultural-world-desktop.png" alt="" class="box-align-bottom desktop-img">

      </div>-->

    </div>

 </div>

    <div class="goal-3-col">

      <div class="goal-keeper-box global-nature" data-aos="fade-right" data-aos-delay="400" >
        <div class="global-nature-img">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/globe.png" alt="" class="box-align-top">
        </div>
        <p>They are also global in nature.</p>
        <p>Learning about the SDGs helps us to develop insights into issues around the world.</p>

      </div>


      <div class="goal-keeper-box the-goals" data-aos="fade-right" data-aos-delay="500" >
        <p>The Goals help introduce us to history, geography, culture, economics, sociology and more.</p>
        <p>To truly understand the SDGs, we need to learn about the world around us.</p>
        <div class="the-goals-img">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/the-goals.png" alt="" class="box-align-bottom">
        </div>

      </div>


      <div class="textblock textblock-goalkeeper" data-aos="fade-right" data-aos-delay="600">
        <p>If you want to be a goal keeper, it is helpful to develop problem-solving skills and also compassion. The first step is consolidating your understanding of the SDGs. </p>
        <p>We’ve highlighted ten for you to test your knowledge and understanding. </p>
      </div>

    </div>

</div>


  </section>


  <section class="bg-purple no-min-heightx section-padding hide-overflow center-task">

    <div class="task-dropdown-wrapper task-dropdown-targets">
        <div class="task-dropdown">


          <div class="quiz-image">
            <img src="/badge-assets/sustainable-development-goals/_global/img/step-1/task__illustration.png" alt="" class="mobile">

          </div>

          <p class="task-dropdown-title">Choose the correct words to complete the sentences...</p>
          <ol>

            <li class="active">

                <div class="dropdown-content">

                  <div class="task-dropdown-question-number" data-aos="zoom-in"></div>

                  <div class="task-info-wrapper">
                    <div class="task-target no-poverty"  data-aos="fade-right" data-aos-delay="100" >
                      <div class="task-target-number">1</div>
                      <div class="task-target-title">No <br>Poverty</div>
                    </div>

                    <div class="task-dropdown-target-img"  data-aos="fade-right" data-aos-delay="200" >
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goals/no-poverty.svg" alt="">
                    </div>
                  </div>

                  <div class="dropdown-content-wrapper"  data-aos="fade-right" data-aos-delay="300" >
                  <p>By 2030, ensure that all

                    <span class="select-wrapper ">
                      <select id="task-1-1">
                        <option value="0">Select one...</option>
                        <option value="1" data-answer >men and women</option>
                        <option value="2">men</option>
                        <option value="3">women</option>
                        <option value="5">children</option>
                      </select>
                    </span> , in particular

                    <span class="select-wrapper ">
                      <select id="task-1-2">
                        <option value="0">Select one...</option>
                        <option value="1">the rich and the wealthy</option>
                        <option value="2">the reasonably well off</option>
                        <option value="3" data-answer> the poor and the needy</option>
                      </select>
                    </span> , have equal rights to economic resources, as well as access to basic services, ownership and control over land and other forms of property, inheritance, natural resources, appropriate new technology and financial services, including <a class="tooltip" href="#">microfinance<span>Microfinance is the provision of savings accounts, loans, insurance, money transfers and other banking services to customers that lack access to traditional financial services, usually because of poverty.</span></a>.
                  </p>
                  </div>

                <div class="task-dropdown-check">
                  <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>
                </div>

              </div>
            </li>


            <li data-aos="fade-right" data-aos-delay="200">

                <div class="dropdown-content">

                  <div class="task-dropdown-question-number"></div>

                  <div class="task-info-wrapper">
                    <div class="task-target no-hunger" >
                      <div class="task-target-number">2</div>
                      <div class="task-target-title">Zero Hunger</div>
                    </div>

                    <div class="task-dropdown-target-img" >
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goals/zero-hunger.svg" alt="">
                    </div>
                  </div>

                  <div class="dropdown-content-wrapper" >
                    <p>
                    By 2030, end all forms of
                      <span class="select-wrapper">
                        <select id="task-2-1">
                          <option value="0">Select one...</option>
                          <option value="1">illiteracy</option>
                          <option value="2" data-answer>malnutrition</option>
                          <option value="3">cruelty to animals</option>
                          <option value="4">poverty</option>
                        </select>
                      </span>, including achieving, by 2025, the internationally agreed targets on <a class="tooltip" href="#">stunting<span>To prevent from growing or developing properly</span></a>

                       and wasting in children under 5 years of age, and address the
                      <span class="select-wrapper">
                        <select id="task-2-2">
                          <option value="0">Select one...</option>
                          <option value="1">literacy</option>
                          <option value="2">social</option>
                          <option value="3" data-answer>nutritional</option>
                          <option value="4">chocolate</option>
                        </select>
                      </span> needs of adolescent girls, pregnant and <a class="tooltip" href="#">lactating<span>When a woman is producing milk for her child</span></a> women and older people
                    </p>
                  </div>

                  <div class="task-dropdown-check">
                    <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>
                  </div>

              </div>
            </li>


            <li data-aos="fade-right" data-aos-delay="200">

                <div class="dropdown-content">

                  <div class="task-dropdown-question-number"></div>

                  <div class="task-info-wrapper">
                    <div class="task-target good-health">
                      <div class="task-target-number">3</div>
                      <div class="task-target-title">Good health and well-being</div>
                    </div>

                    <div class="task-dropdown-target-img">
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goals/good-health.svg" alt="">
                    </div>
                  </div>

                  <div class="dropdown-content-wrapper">
                    <p>
                     By 2030, reduce by one third
                     <span class="select-wrapper ">
                          <select id="task-3-1">
                            <option value="0">Select one...</option>
                            <option value="1">infections</option>
                            <option value="2">lesions</option>
                            <option value="3" data-answer>premature mortality</option>
                            <option value="4">increased life span</option>
                          </select>
                        </span> from <a class="tooltip" href="#">non-communicable diseases<span>A non-communicable disease (NCD) is a disease that is not transmissible directly from one person to another. NCDs include Parkinson's disease, autoimmune diseases, strokes, most heart diseases, most cancers, diabetes, chronic kidney disease, osteoarthritis, osteoporosis, Alzheimer's disease, cataracts, and others.</span></a> through

                        <span class="select-wrapper ">
                          <select id="task-3-2">
                            <option value="0">Select one...</option>
                            <option value="1" data-answer>prevention and treatment</option>
                            <option value="2">observing from a distance</option>
                            <option value="3">doing nothing</option>
                            <option value="4">hoping for the best</option>
                          </select>
                        </span> and promote mental health and well-being
                    </p>
                  </div>

                  <div class="task-dropdown-check">
                    <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>
                  </div>

              </div>
            </li>


            <li data-aos="fade-right" data-aos-delay="200">

                <div class="dropdown-content">

                  <div class="task-dropdown-question-number"></div>

                  <div class="task-info-wrapper">
                    <div class="task-target quality-education">
                      <div class="task-target-number">4</div>
                      <div class="task-target-title">Quality Education</div>
                    </div>

                    <div class="task-dropdown-target-img">
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goals/quality-education.svg" alt="">
                    </div>
                  </div>

                  <div class="dropdown-content-wrapper">
                    <p>By 2030, substantially

                     <span class="select-wrapper ">
                        <select>
                          <option value="0">Select one...</option>
                          <option value="1">maintain</option>
                          <option value="2">monitor</option>
                          <option value="3" data-answer>increase</option>
                          <option value="4">decrease</option>
                        </select>
                      </span>

                      the number of youth and adults who have relevant skills, including technical and <a class="tooltip" href="#">vocational<span><strong>Vocational skills</strong> are <strong>skills</strong> directly related to work and can be technical and operational.</span></a> skills, for

                      <span class="select-wrapper ">
                          <select>
                          <option value="0">Select one...</option>
                          <option value="1">wrestling</option>
                          <option value="2">magic</option>
                          <option value="3">recreation</option>
                          <option value="4" data-answer>employment</option>
                        </select>
                      </span>

                     , decent jobs and entrepreneurship
                    </p>
                  </div>

                  <div class="task-dropdown-check">
                    <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>
                  </div>

              </div>
            </li>


            <li data-aos="fade-right" data-aos-delay="200">

                <div class="dropdown-content">

                  <div class="task-dropdown-question-number"></div>

                  <div class="task-info-wrapper">
                    <div class="task-target gender-equality">
                      <div class="task-target-number">5</div>
                      <div class="task-target-title">Gender Equality</div>
                    </div>

                    <div class="task-dropdown-target-img">
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goals/gender-equality-5.2.svg" alt="">
                    </div>
                  </div>

                  <div class="dropdown-content-wrapper">
                    <p>
                      <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1">Forget</option>
                        <option value="2" data-answer>Eliminate</option>
                        <option value="3">Understand</option>
                        <option value="4">Reduce</option>
                      </select>
                      </span>
                      all forms of
                      <span class="select-wrapper ">
                          <select>
                          <option value="0">Select one...</option>
                          <option value="1">protest</option>
                          <option value="2">sport</option>
                          <option value="3" data-answer>violence</option>
                          <option value="4">activity</option>
                        </select>
                      </span>
                      against all women and girls in the public and private spheres, including trafficking and sexual and other types of exploitation
                    </p>
                  </div>

                  <div class="task-dropdown-check">
                    <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>
                  </div>

              </div>
            </li>

            <li data-aos="fade-right" data-aos-delay="200">

                <div class="dropdown-content dropdown-content-game">

                  <div class="task-dropdown-question-number"></div>

                  <div class="task-info-wrapper">
                    <div class="task-target gender-equality">
                      <div class="task-target-number">5</div>
                      <div class="task-target-title">Gender Equality</div>
                    </div>

                    <div class="task-dropdown-target-img">
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goals/gender-equality-5.5.svg" alt="">
                    </div>
                  </div>


                  <div class="dropdown-content-wrapper">
                    <a href="#" class="btn btn--check jsLaunchWordsearch">Launch Wordsearch</a>
                  </div>

                </div>

                <!--
                <div class="task-dropdown-check">
                  <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>
                  <a href="#" class="btn btn--check btn-check-dropdowns">Continue</a>
                </div>-->

            </li>



            <li data-aos="fade-right" data-aos-delay="200">

                <div class="dropdown-content">

                  <div class="task-dropdown-question-number"></div>

                  <div class="task-info-wrapper">
                    <div class="task-target gender-equality">
                      <div class="task-target-number">5</div>
                      <div class="task-target-title">Gender Equality</div>
                    </div>

                    <div class="task-dropdown-target-img">
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goals/gender-equality-5.b.svg" alt="">
                    </div>
                  </div>

                  <div class="dropdown-content-wrapper">

                    <p>Enhance the use of
                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1" data-answer>enabling</option>
                        <option value="2">disabling</option>
                      </select>
                    </span>

                    technology, in particular

                    <span class="select-wrapper ">
                      <select>
                        <option value="0">Select one...</option>
                        <option value="1" data-answer>information</option>
                        <option value="2">disinformation</option>
                      </select>
                    </span>

                    and communications <span class="select-wrapper ">
                      <select>
                        <option value="0">Select one...</option>
                        <option value="1">papers</option>
                        <option value="2">semaphore</option>
                        <option value="3" data-answer>technology</option>
                      </select>
                    </span>
                    </p>
                  </div>

                  <div class="task-dropdown-check">
                    <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>
                  </div>

              </div>
            </li>

            <li data-aos="fade-right" data-aos-delay="200">

                <div class="dropdown-content">

                  <div class="task-dropdown-question-number"></div>

                  <div class="task-info-wrapper">

                    <div class="task-target good-jobs">
                      <div class="task-target-number">8</div>
                      <div class="task-target-title">Decent work and economic growth</div>
                    </div>

                    <div class="task-dropdown-target-img">
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goals/good-jobs-8.7.svg" alt="">
                    </div>
                  </div>


                  <div class="dropdown-content-wrapper">
                    <p>Take

                      <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1">delayed</option>
                        <option value="2" data-answer>immediate</option>
                      </select>
                    </span>

                     and effective measures to eradicate

                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1" data-answer>forced labour</option>
                        <option value="2">part-time jobs</option>
                      </select>
                    </span>

                    , end modern slavery and human trafficking and secure the <a class="tooltip" href="#">prohibition<span><strong>Prohibition</strong> is the act or practice of banning something by law, but is used to refer to a period of time during which such bans are enforced.</span></a> and elimination of the

                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1" data-answer>worst</option>
                        <option value="2">best</option>
                      </select>
                    </span>

                     forms of child labour, including recruitment and use of child soldiers, and by 2025 end child labour in all its forms
                    </p>
                  </div>

                <div class="task-dropdown-check">
                  <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>
                </div>

              </div>
            </li>

            <li data-aos="fade-right" data-aos-delay="200">

                <div class="dropdown-content">

                  <div class="task-dropdown-question-number"></div>

                  <div class="task-info-wrapper">
                    <div class="task-target good-jobs">
                      <div class="task-target-number">8</div>
                      <div class="task-target-title">Decent work and economic growth</div>
                    </div>
                    <div class="task-dropdown-target-img">
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goals/good-jobs-8.5.svg" alt="">
                    </div>
                  </div>

                  <div class="dropdown-content-wrapper">
                    <p>By
                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1">2020</option>
                        <option value="2" data-answer>2030</option>
                        <option value="3">2040</option>
                      </select>
                    </span>
                    , achieve

                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1">part time</option>
                        <option value="2">moderate</option>
                        <option value="3">lots of</option>
                        <option value="4" data-answer>full and productive</option>
                      </select>
                    </span>

                     employment and decent work for all women and men, including for young people and people with disabilities, and

                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1" data-answer>equal</option>
                        <option value="2">inequal</option>
                      </select>
                    </span>

                     pay for work of

                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1" data-answer>equal</option>
                        <option value="2">inequal</option>
                      </select>
                    </span>

                     value
                    </p>
                  </div>

                <div class="task-dropdown-check">
                  <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>
                </div>

              </div>
            </li>

             <li data-aos="fade-right" data-aos-delay="200">

                <div class="dropdown-content">

                  <div class="task-dropdown-question-number"></div>

                  <div class="task-info-wrapper">
                    <div class="task-target climate-action">
                      <div class="task-target-number">13</div>
                      <div class="task-target-title">Climate Action</div>
                    </div>

                    <div class="task-dropdown-target-img">
                        <img src="/badge-assets/{{$url['slug']}}/_global/img/step-3/goals/climate-action-13.3.svg" alt="">
                    </div>
                  </div>

                  <div class="dropdown-content-wrapper">
                    <p>Improve

                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1">ignorance</option>
                        <option value="2">fake News</option>
                        <option value="3" data-answer>education</option>
                      </select>
                    </span>, awareness-raising and human and institutional capacity on climate

                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1">control</option>
                        <option value="2" data-answer>change</option>
                      </select>
                    </span>

                    <a class="tooltip" href="#">mitigation<span>Climate change mitigations, are actions that limit, stop or reverse the rate of long-term climate change, sch as reducing energy demand by increasing energy efficiency, phasing out fossil fuels by switching to low-carbon energy sources, and removing carbon dioxide from Earth's atmosphere.[3][6] for example, through improved building insulation</span></a>, adaptation, impact

                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1">increase</option>
                        <option value="2" data-answer>reduction</option>
                      </select>
                    </span>

                    and

                    <span class="select-wrapper ">
                        <select>
                        <option value="0">Select one...</option>
                        <option value="1" data-answer>early</option>
                        <option value="2">late</option>
                        <option value="3">just in time</option>
                      </select>
                    </span>

                    warning
                    </p>
                  </div>

                <div class="task-dropdown-check">
                  <a href="#" class="btn btn--check btn-check-dropdowns">Check</a>
                </div>

              </div>
            </li>
          </ol>
        </div>

        <div class="holder task-dropdown-feedback invisible">

          <div class="feedback-box feedback-incorrect hide">
                <span class="quiz-feedback-title">Oops...<br>Not quite right.</span>
                <a href="#" class="btn btn--try-again">Try again</a>
          </div>

          <div class="feedback-box feedback-correct hide">
            <span class="quiz-feedback-title">Well done!</span>
            <a href="#" class="btn js-dropdown-next" data-aos="zoom-in" data-aos-delay="200">Next</a>
          </div>

          <div class="feedback-box feedback-correct-continue hide">
                <span class="quiz-feedback-title">Continue</span>
                <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn--continue" data-aos="zoom-in" data-aos-delay="200">Continue</a>
          </div>

        </div>
        </div>

        <div class="overlay-puzzle-wrapper">
          <div class="overlay-puzzle">
          <div class="top grad-green feedback feedback-success">
            <div class="holder">
            <a href="" class="overlay-close jsOverlayClose">X</a>
                <h2 data-aos="fade-right" data-aos-delay="100" class="overlay-title">Can you now find your answers in this wordsearch?</h2>

                <div class="playable-area">

                  <div class="puzzle" id="puzzle">
                    <div class="table-holder" id="tableHolder">
                      <table cellpadding="0" cellspacing="0" id="wordSearchTable">
                        <tbody class="puzzleholder">

                        </tbody>
                      </table>
                      <div id="dragger" class="cell-drag-selection"></div>
                      <div id="viewer-tpl" class="viewer"></div>
                    </div>
                    <ul class="words clearfix"></ul>
                  </div>
                </div><!--/playable-area-->

                <div class="feedback-wordsearch">
                    <h3 data-aos="fade-right" data-aos-delay="100">Well done!</h3>
                    <p>Let's move on.</p>
                    <a  href="#" class="btn jsWordsearchContinue" data-aos="zoom-in" data-aos-delay="200">Continue</a>
                </div>
              </div>

            </div>
          </div>
        </div>



  </section>

</main>

@endsection

@section('javascript')


  <script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
  </script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/main.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>

  <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/jquery-1.11.0.min.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/TweenMax.min.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/Draggable.min.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/idangerous.swiper.js"></script>

  <script src="/badge-assets/{{$url['slug']}}/_global/js/wordsearch/class.puzzlebase.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/wordsearch/class.wordsearch.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/wordsearch/puzzlebase-platform-specific-web.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/wordsearch/wordsearch-event-handlers-web.js"></script>

  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
  <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

  <script>
  var item_length = $('.slider > div').length - 1,
    wrongAnswers = 0;

  $('.slider').slick({
      infinite: false,
      dots: true,
  }).on('afterChange', function(event, slick, currentSlide, nextSlide){
    if(currentSlide == item_length) {
      $('.next-step').removeClass('hide');
      $("html, body").animate({scrollTop: $(document).height()});
    }
  });

  // WORDSEARCH
  var utag_meta = {},
      utag_data = {},
      oApp = new Wordsearch();
      oApp.init();


</script>

@endsection
