@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
@endsection @section('page')

    <main>
        <section>
            @include('vendor.digitalmarmalade.badges.digital-ethics.header',
            ['title' => 'Header'])

            <ol class="step-counter flex gap--sm flex--align-center" data-aos="flip-up" data-aos-duration="1500"
                data-aos-delay="500">
                <li class="step completed">1</li>
                <li class="step active">2</li>
                <li class="step">3</li>
                <li class="step">4</li>
                <li class="step">5</li>
                <li class="step">6</li>
                <li class="step">7</li>
                <li class="step">8</li>
            </ol>
            <div class="container">
                <div class='box box--step-header bg--yellow flex flex--column' data-aos="fade-up"
                     data-aos-duration="1500" data-aos-delay="800">
                    <div class="flex flex--column gap box__copy">
                        <h1>The Ethical Impact of Digital Innovation</h1>
                        <p>The creation and use of digital products, tools and services can bring about many ethical
                            dilemmas that can potentially impact individuals, whole communities, and the world.</p>
                    </div>
                    <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--ethical-impact.svg"
                         alt=""/>
                </div>
                <div class="col flex flex--column gap--sm text-align--center" data-aos="fade-up"
                     data-aos-duration="1500" data-aos-delay="1000">
                    <p>While digital innovation offers many benefits, there are also pitfalls that we must be aware of
                        and try to avoid. As you learn about digital ethics and look at situations through an ethical
                        lens, you will realise that there is also a big grey area where there may not be a clear right
                        or wrong answer.</p>
                    <p>Next, you will explore six different examples of digital innovation.</p>
                    <p>Your task is to carefully consider the impact (both positive and negative) of each one, and how
                        it could affect individuals, society, or the world.</p>
                </div>
                <div id="continueToTask" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200"
                     data-aos-anchor-placement="bottom-bottom">
                    <button class="btn" onclick="continueToTask()">
                        Let&rsquo;s go!
                    </button>
                </div>
            </div>
        </section>

        <section id="sectionTask" class="hide task flex flex--column">
            <div class="container animate__animated animate__fadeInUp animate__slow">

                <div class="questions flex flex--column">
                    <ol class="flex flex--center gap--sm flex--align-self-start">
                        <li class="step dot-4 active">1</li>
                        <li class="step dot-7">2</li>
                        <li class="step dot-10">3</li>
                        <li class="step dot-13">4</li>
                        <li class="step dot-16">5</li>
                        <li class="step dot-19">6</li>
                    </ol>



                    <div id="question1" class="question ">
                            <div class="flex flex--column flex--align-center ">
                                @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-1')
                                <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                    <div class="col flex flex--column gap--xlg flex--center">
                                        <div class="flex flex--column gap--sm">
                                            <h3>Individual</h3>
                                            <p>Use the slider to show the scale of impact you think the digitisation of
                                                welfare services could have on <strong>individuals</strong>.</p>
                                            <p><i>When you have made a selection, click submit.</i></p>
                                        </div>
                                        <div class="container--input-range flex flex--column gap--sm flex--center">
                                            <div class="container--input-range__values">
                                                {{--                    --}}
                                                <span id="sliderLabel1" class="hide container--input-range__value"></span>
                                            </div>
                                            <input id="sliderQuestion1" type="range" min="0" max="3" value="0">

                                        </div>
                                        <button type="button" class="submitButton btn" onclick="submitAnswer(1)">Submit
                                        </button>
                                        <div class="flex flex--column gap--sm">
                                            <div class='hide feedback neutral-1' id="jsFeedbackLow-1-1">
                                                <p>The individuals that use the new digital service could be greatly
                                                    affected by the consequences. Remember that different people can be
                                                    impacted in different ways and to varying levels.</p>
                                            </div>
                                            <div class='hide feedback neutral-1' id="jsFeedbackMedium-1-2">
                                                <p>Implementing the new digital system could impact the people who use it
                                                    quite highly. Remember that different people can be affected in
                                                    different ways and to varying levels.</p>
                                            </div>
                                            <div class='hide feedback neutral-2' id="jsFeedbackHigh-1-3">
                                                <p>Good thinking! Rolling out the new digital system is likely to have a
                                                    high impact on the individuals who use it. Remember that different
                                                    people can be impacted in different ways and to varying levels.</p>
                                            </div>
                                            <div id="jsFeedback-1"
                                                class='hide feedback list animate__animated animate__zoomUp animate__slow"'>
                                                <div class="feedback__content flex flex--column flex--align-center">
                                                    <p>The following are some of the potential consequences for
                                                        individuals.</p>
                                                    <ul>
                                                        <li >It
                                                            makes claiming support easier for some people
                                                        </li>
                                                        <li >Less
                                                            time is required for social service workers to manually process
                                                            claims
                                                        </li>
                                                        <li >People
                                                            who can use the system get more independence and control over
                                                            their finances
                                                        </li>
                                                        <li >People
                                                            will need training on how to use the system to make claims
                                                        </li>
                                                        <li >Social
                                                            service workers may be required to retrain or risk job loss
                                                        </li>
                                                        <li >It
                                                            will not be possible for people who are digitally excluded to
                                                            access support independently
                
                                                        </li>
                                                        <li>
                                                        <button class="btn " onclick="continueToNextQuestion()">Continue</button>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <div class='hide jsFeedbackNone feedback fail animate__zoomIn animate__slow'
                                            id="jsFeedbackNone-1-0"
                                        ">
                                        <div class="feedback__content">
                                            <p>It’s unlikely that the new digital service will not impact individuals.
                                                Please try again.</p>
                                        <button class="btn" onclick="tryAgain(1)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div id="question2" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-1')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Society</h3>
                                        <p>Use the slider to show the scale of <strong>societal</strong> impact that you
                                            think the digitisation of welfare services could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel2" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion2" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(2)">Submit</button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-2-1">
                                            <p>This innovation could have a significant impact on the people and communities
                                                who administer and use the system.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-2-2">
                                            <p>Nice work! The implementation of the new digital system for welfare services
                                                could have a significant impact on people and communities.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-2-3">
                                            <p>Nice work! This innovation could significantly impact people who administer
                                                the system as well as those who use it to access support.</p>
                                        </div>
                                        <div id="jsFeedback-2" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for individuals.</p>
                                                <ul>
                                                    <li >As a
                                                        result of the savings from the more efficient system, the government
                                                        could invest in other key services to benefit the country
                                                    </li>
                                                    <li >The impact
                                                        on households of the individuals that are eligible for support can
                                                        be positive or negative which may affect how much they spend with
                                                        local businesses
                                                    </li>
                                                    <li >This
                                                        department of the social services workforce might have to retrain or
                                                        experience job shortages
                                                    </li>
                                                    <li >Certain
                                                        groups may be disproportionately affected by changes to the system
                                                    </li>
                                                    <li>
                                                        <button class="btn " onclick="continueToNextQuestion()">Continue</button>
                                                    </li>
                
                                                </ul>
            
                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-2-0"
                                    ">
                                    <div class="feedback__content">
                                        <p>It’s unlikely that this new digital service will have no impact on society.
                                            Please try again. </p>
                                    <button class="btn" onclick="tryAgain(2)">Try Again</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                         </div>
                    </div>
                    <div id="question3" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-1')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Global</h3>
                                        <p>Use the slider to show the level of <strong>global</strong> impact that you think the
                                            digitisation of welfare services could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel3" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion3" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(3)">Submit</button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-3-1">
                                            <p>Something has a global impact if it happens in all parts of the world, or affects
                                                all parts of the world. If all countries adopt the digital system, then it could
                                                have a considerable global impact.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-3-2">
                                            <p>If all countries adopt the digital system, people and economies around the world
                                                could potentially be impacted.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-3-3">
                                            <p>If all countries adopt the digital system, people and economies around the world
                                                could potentially be impacted.</p>
                                        </div>
                                        <div class='hide jsFeedbackNone feedback neutral-1' id="jsFeedbackNone-3-0">
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>Something has a global impact if it happens in all parts of the world, or
                                                    affects all parts of the world. If all countries adopt the digital system,
                                                    then its impact would be global.</p>

{{--                                                <button class="btn"--}}
{{--                                                        onclick="continueToNextQuestion()">Continue--}}
{{--                                                </button>--}}
                                            </div>
                                        </div>
                                        <div id="jsFeedback-3" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential global consequences.</p>
                                                <ul>
                                                    <li >If everyone
                                                        around the world is able to use an online welfare system to access
                                                        appropriate support, then the world could become a more fair and equal
                                                        place
                                                    </li>
                                                    <li >Citizens
                                                        around the world could find it easier to access services which could
                                                        increase their wellbeing and quality of life
                                                    </li>
                                                    <li >Whole
                                                        communities of people around the world who are digitally excluded will
                                                        not be able to access the online services independently and so they risk
                                                        being left behind
                                                    </li>
                                                    <li >It’s unlikely
                                                        that all countries would be able to provide equal support to citizens.
                                                        The gap between weak and strong economies could widen
                                                    </li>
                                                    <li>
                                                            <button class="btn " onclick="continueToNextQuestion()">Continue</button>
                                                            </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    {{--                <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast' id="jsFeedbackNone-3-0" ">--}}
                                    {{--                  <div class="feedback__content">--}}
                                    {{--                    <p>Something has a global impact if it happens in all parts of the world, or affects all parts of the world. If all countries adopt the digital system, then its impact would be global.</p>--}}
                                    {{--                   <button class="btn" onclick="tryAgain(3)">Try Again</button>--}}
                                    {{--                  </div>--}}
                                    {{--                </div>--}}
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div id="question4" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-2')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Individual</h3>
                                        <p>Use the slider to show the scale of impact you think this online learning platform
                                            could have on <strong>individuals</strong>.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel4" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion4" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(4)">Submit</button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-4-1">
                                            <p>People can be impacted by different things in different ways and to varying
                                                levels and this innovation seems like it could have a considerable impact on
                                                those that use it.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-4-2">
                                            <p>Good thinking! There could be a considerable impact on individuals who trust and
                                                use this platform for learning online. Remember that different people can be
                                                impacted in different ways and to varying levels.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-4-3">
                                            <p>The platform could have a considerable impact on individuals that use it.
                                                Remember that different people can be impacted in different ways and to varying
                                                levels.</p>
                                        </div>
                                        <div id="jsFeedback-4" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for individuals.</p>
                                                <ul>
                                                    <li >Benefits from
                                                        learning could help individuals to improve their lives and the lives of
                                                        their families
                                                    </li>
                                                    <li >Learners feel
                                                        safe knowing that their data is protected
                                                    </li>
                                                    <li >Learners can
                                                        trust that the charity won’t try to use their personal information for
                                                        profit
                                                    </li>
                                                    <li >Individuals
                                                        who don’t have access to connectivity or a device for learning might get
                                                        left behind
                                                    </li>
                                                    <li >If the charity
                                                        cannot sustain an effective security system then user data may be at
                                                        risk
                                                    </li>
                                                    <li>
                                                        <button class="btn " onclick="continueToNextQuestion()">Continue</button>
                                                </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-4-0">
                                        <div class="feedback__content">
                                            <p>If nobody uses the platform then it probably won't have any impact on any individuals
                                                but for the purposes of this exercise, please assume that some people use it.</p>
                                        <button class="btn" onclick="tryAgain(4)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="question5" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-2')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Society</h3>
                                        <p>Use the slider to show the level of <strong>societal</strong> impact that you think
                                            this online learning platform could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel5" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion5" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(5)">Submit</button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-5-1">
                                            <p>This innovation could impact many different aspects of society to differing
                                                degrees. For example, it could affect people’s attitudes, their productivity, or
                                                how similar organisations within the industry operate.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-5-2">
                                            <p>Well done! This learning platform could impact many different aspects of society,
                                                such as people’s attitudes, their productivity, and how similar organisations
                                                within the industry may operate.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-5-3">
                                            <p>This innovation has the potential for making a considerable impact on society.
                                                For example, it could affect people’s attitudes and behaviours, their
                                                productivity, or how organisations operate.</p>
                                        </div>
                                        <div id="jsFeedback-5" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for society.</p>
                                                <ul>
                                                    <li >This trusted
                                                        platform could help to change perceptions and attitudes about learning
                                                        and enable more people to feel comfortable using technology for
                                                        education
                                                    </li>
                                                    <li >Other
                                                        organisations might take notice of the charity’s stance on data
                                                        protection and follow suit
                                                    </li>
                                                    <li >Employers
                                                        could recruit digitally skilled and confident colleagues
                                                    </li>
                                                    <li >Productivity
                                                        could increase as a result of more people having digital skills and
                                                        confidence
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>                                            
                                                </ul>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-5-0"
                                    >
                                    <div class="feedback__content">
                                        <p>If nobody uses the platform then it probably won't have any impact on society but for
                                            the purposes of this exercise, please assume that it is being used.</p>
                                    <button class="btn" onclick="tryAgain(5)">Try Again</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div id="question6" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-2')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Global</h3>
                                        <p>Use the slider to show the level of <strong>global</strong> impact that you think
                                            this online learning platform could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel6" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion6" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(6)">Submit</button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-6-1">
                                            <p>If the platform is used by people in all parts of the world, or if it affects all
                                                parts of the world then it will have a global impact.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-6-2">
                                            <p>Nice work! If the platform is used by people in all parts of the world and helps
                                                to educate people on a global scale, it could have a considerable impact!</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-6-3">
                                            <p>If the platform is used in all parts of the world, or if it affects people in all
                                                parts of the world then it will have a global impact. The level of impact could
                                                be quite considerable!</p>
                                        </div>
                                        <div id="jsFeedback-6" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential global consequences.</p>
                                                <ul>
                                                    <li >Other
                                                        organisations around the world could learn from how this charity
                                                        protects learner data
                                                    </li>
                                                    <li >Incidents of
                                                        cybercrime could be reduced around the world as more people know about
                                                        how to stay safe online
                                                    </li>
                                                    <li >Making digital
                                                        skills education free, fun and accessible to all could help to close
                                                        global skills gaps and increase employment rates around the world
                                                    </li>
                                                    <li >If the charity
                                                        is not able to keep up with protecting learner data and there is a data
                                                        breach, the personal information of learners all over the world may be
                                                        at risk
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>
            
                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-6-0"
                                    >
                                    <div class="feedback__content">
                                        <p>If nobody uses the platform then it probably won't have a global impact but for the
                                            purposes of this exercise, please assume that it is being used.</p>
                                    <button class="btn" onclick="tryAgain(6)">Try Again</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                    </div> 

                    <div id="question7" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-3')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Individual</h3>
                                        <p>Use the slider to show the scale of impact you think social media and echo chambers
                                            could have on <strong>individuals</strong>.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel7" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion7" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(7)">Submit</button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-7-1">
                                            <p>Social media could have a significant impact on individuals &#8212; for people
                                                who use it for connecting and communicating with others and to source and share
                                                information. Remember that different people can be impacted in different ways
                                                and to varying levels.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-7-2">
                                            <p>Social media could have a significant impact on individuals &#8212; both for
                                                those who use it to send and share information, and for those who use it to find
                                                information. Remember that different people can be impacted in different ways
                                                and to varying levels.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-7-3">
                                            <p>This innovation could have a significant impact on individuals that use the
                                                service. Remember that different people can be impacted in different ways and to
                                                varying levels.</p>
                                        </div>
                                        <div id="jsFeedback-7" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for individuals.</p>
                                                <ul>
                                                    <li >Social media
                                                        can give people a voice and a platform to share information
                                                    </li>
                                                    <li >Social media
                                                        can make information easily accessible to people
                                                    </li>
                                                    <li >Social media
                                                        can enable people to become influencers (whether it is in politics,
                                                        education, lifestyle, etc.) and to make careers out of it
                                                    </li>
                                                    <li >Echo chambers
                                                        on social media can help people find and gather more information and
                                                        opinions that support what they have learned or already believe in
                                                    </li>
                                                    <li >Echo chambers
                                                        can prevent people from gaining a well-rounded picture of different
                                                        viewpoints and ideologies
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>   
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-7-0">
                                        <div class="feedback__content">
                                            <p>It is unlikely that social media does not have an impact on individuals. Please
                                                try again.</p>
                                        <button class="btn" onclick="tryAgain(7)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div id="question8" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-3')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Society</h3>
                                        <p>Use the slider to show the level of <strong>societal</strong> impact that you think
                                            social media and echo chambers could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel8" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion8" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(8)">Submit</button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-8-1">
                                            <p>Social media and echo chambers could have a significant impact on society.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-8-2">
                                            <p>Social media and echo chambers could have a significant impact on society.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-8-3">
                                            <p>Good thinking! The widespread use of social media could have a significant impact
                                                on society.</p>
                                        </div>
                                        <div id="jsFeedback-8" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for society.</p>
                                                <ul>
                                                    <li >Social media
                                                        can give people who want to share their point of view a voice and
                                                        platform to start a movement or a campaign
                                                    </li>
                                                    <li >People who
                                                        have certain beliefs can have their beliefs or opinions strengthened
                                                        when they find a community of like-minded people
                                                    </li>
                                                    <li >On a large
                                                        scale, echo chambers could impact society by fueling political
                                                        polarisation and growing social mistrust
                                                    </li>
                                                    <li >Whole
                                                        communities can be influenced or led to believe something (real or fake)
                                                        when a topic goes viral on social media (e.g. a sports team winning, a
                                                        storm that is coming, a toilet paper shortage)
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-8-0">
                                        <div class="feedback__content">
                                            <p>The widespread use of social media is having an increasing impact on society.
                                                Please try again.</p>
                                        <button class="btn" onclick="tryAgain(8)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="question9" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-3')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Global</h3>
                                        <p>Use the slider to show the level of <strong>global</strong> impact that you think
                                            social media and echo chambers could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel9" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion9" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(9)">Submit</button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-9-1">
                                            <p>As the number of people around the world who use social media increases, it can
                                                have a significant global impact.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-9-2">
                                            <p>Nice work! More than half of the world now uses social media and this rate
                                                continues to rise.
                                                Social media already has a significant global impact and we can see this in the
                                                areas of politics, lifestyle and global trends.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-9-3">
                                            <p> Nice work! More than half of the world now uses social media and this rate
                                                continues to rise.
                                                Social media already has a significant global impact and we can see this in the
                                                areas of politics, lifestyle and global trends.</p>
                                        </div>
                                        <div id="jsFeedback-9" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential global consequences.</p>
                                                <ul>
                                                    <li >Social media
                                                        can bring light to important issues and place them on a global stage
                                                    </li>
                                                    <li >Social media
                                                        can democratise access to information and can enable people who use it
                                                        to broadcast information to a global audience that they might otherwise
                                                        not be able to reach
                                                    </li>
                                                    <li >Social media
                                                        can be used to recruit people who believe in specific causes and help
                                                        further movements
                                                    </li>
                                                    <li >Influential
                                                        people can use social media to control or sway what people see and hear
                                                        and can potentially create global movements
                                                    </li>
                                                    <li >Digital echo
                                                        chambers and filter bubbles are seen as one of the main causes of
                                                        polarisation and radicalisation online
                                                    </li>
                                                    <li >Political
                                                        polarisation and social mistrust could influence policy and law-making
                                                        in nations around the world
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>
            
                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-9-0">
                                        <div class="feedback__content">
                                            <p>More than half of the world now uses social media so it is very likely that
                                                social media has a global impact. Please try again.</p>
                                        <button class="btn" onclick="tryAgain(9)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div id="question10" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-4')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Individual</h3>
                                        <p>Use the slider to show the scale of impact you think that the implementation of the machine learning algorithm could have on <strong>individuals</strong>.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel10" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion10" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(10)">Submit</button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-10-1">
                                            <p>The machine learning algorithm could have a significant impact on the university
                                                applicants and the staff that work there. Remember that different people can be
                                                impacted in different ways and to varying levels.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-10-2">
                                            <p>The machine learning algorithm could have a significant impact on the university
                                                applicants and the staff that work there. Remember that different people can be
                                                impacted in different ways and to varying levels.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-10-3">
                                            <p>Great job! The machine learning algorithm could certainly have a high impact on
                                                both the applicants and the staff that work in recruitment. Remember that
                                                different people can be impacted in different ways and to varying levels.</p>

                                        </div>
                                        <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                            id="jsFeedbackNone-10-0">
                                            <div class="feedback__content">
                                                <p>It is unlikely that social media does not have an impact on individuals.
                                                    Please try again.</p>
                                            <button class="btn" onclick="tryAgain(10)">Try Again</button>
                                            </div>
                                        </div>
                                        <div id="jsFeedback-10" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for individuals.</p>
                                                <ul>
                                                    <li >Staff in
                                                        the admissions department can work more efficiently which helps the
                                                        university to save resources
                                                    </li>
                                                    <li >There is
                                                        less room for subjectivity and preferential treatment in the initial
                                                        screening process
                                                    </li>
                                                    <li >People
                                                        wanting to go to the university can find out more quickly whether
                                                        their application has been shortlisted
                                                    </li>
                                                    <li >If fewer
                                                        employees are needed by the university then some may risk job loss
                                                    </li>
                                                    <li >The
                                                        algorithm is <span class="tooltip-trigger jsTooltip"
                                                                        data-tooltip-content="#tooltip5_content">biased</span>
                                                        due to being created with unrepresentative data and so certain
                                                        applicants could face discrimination
                                                    </li>
                                                    <li >The
                                                        university’s reputation could be damaged because of the
                                                        implementation of the biased algorithm and senior leaders could be
                                                        forced to resign
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>
        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="question11" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-4')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Society</h3>
                                        <p>Use the slider to show the scale of <strong>societal</strong> impact you think that the implementation of the machine learning algorithm could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel11" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion11" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(11)">Submit
                                    </button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-11-1">
                                            <p>The implementation of the machine learning algorithm could have a significant
                                                impact on society. At the very least, it will probably affect a whole
                                                community of university applicants.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-11-2">
                                            <p>Good thinking! The implementation of the machine learning algorithm could
                                                have a significant impact on society. At the very least, it will probably
                                                affect a whole community of university applicants.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-11-3">
                                            <p>Good thinking! The implementation of the machine learning algorithm could
                                                have a significant impact on society. At the very least, it will probably
                                                affect a whole community of university applicants.</p>
                                        </div>
                                        <div id="jsFeedback-11" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for society.</p>
                                                <ul>
                                                    <li >The biased
                                                        algorithm could lead to gender discrimination
                                                    </li>
                                                    <li >If the
                                                        biased algorithm results in the university having a predominantly
                                                        male student body, this could limit diversity in the ideas and
                                                        experiences that this university offers
                                                    </li>
                                                    <li >Fewer
                                                        non-male candidates getting into university caused by the biased
                                                        algorithm means that there will be fewer non-male graduates entering
                                                        the job market with a university degree
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-11-0">
                                        <div class="feedback__content">
                                            <p>The machine learning algorithm could affect everyone who is applying to go to
                                                this university so it is unlikely that there will be no societal impact.
                                                Please try again.</p>
                                            <button class="btn" onclick="tryAgain(11)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="question12" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-4')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Global</h3>
                                        <p>Use the slider to show the scale of <strong>global</strong> impact you think that the implementation of the machine learning algorithm could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel12" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion12" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(12)">Submit
                                    </button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-12-1">
                                            <p>Something has a global impact if it happens in all parts of the world, or
                                                affects all parts of the world. People applying to the university and people
                                                who graduate from the university could be living and working all over the
                                                world so there are potential impacts on a global level.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-12-2">
                                            <p>Something has a global impact if it happens in all parts of the world, or
                                                affects all parts of the world. People applying to the university and people
                                                who graduate from the university could be living and working all over the
                                                world so there can be knock-on effects that create a global impact.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-12-3">
                                            <p> Something has a global impact if it happens in all parts of the world, or
                                                affects all parts of the world. People applying to the university and people
                                                who graduate from the university could be living and working all over the
                                                world so there are potential impacts on a global level.</p>
                                        </div>
                                        <div class='hide jsFeedbackNone feedback neutral-1' id="jsFeedbackNone-12-0">
                                            <div class="feedback__content">
                                                <p>People applying to the university and people who graduate from the
                                                    university could be living and working all over the world so there are
                                                    potential impacts on a global level.</p>
                                            </div>
                                        </div>
                                        <div id="jsFeedback-12" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential global consequences.</p>
                                                <ul>
                                                    <li >Access to
                                                        higher education is limited for people around the world who are
                                                        discriminated against by the biased algorithm
                                                    </li>
                                                    <li >Reduced
                                                        diversity in workforces around the world
                                                    </li>
                                                    <li >A lack of
                                                        representative role models in higher education and leadership roles
                                                        which could have a multi-generational knock-on effect
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   <div id="question13" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-5')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Individual</h3>
                                        <p>Use the slider to show the scale of impact that you think the automated machinery could have on <strong>individuals</strong>.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel13" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion13" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(13)">Submit
                                    </button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-13-1">
                                            <p>This innovation could have a significant impact on the farmers and their
                                                staff who will be using the automated machinery. Remember that different
                                                people can be impacted in different ways and to varying levels.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-13-2">
                                            <p>Nice work! This innovation could have a significant impact on the farmers and
                                                their staff who can use the automated machinery to disperse chemical
                                                fertilisers and pesticides. Remember that different people can be impacted
                                                in different ways and to varying levels.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-13-3">
                                            <p>Nice work! This innovation could have a significant impact on the farmers and
                                                their staff who can use the automated machinery to disperse chemical
                                                fertilisers and pesticides. Remember that different people can be impacted
                                                in different ways and to varying levels.</p>
                                        </div>
                                        <div id="jsFeedback-13" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for individuals.</p>
                                                <ul>
                                                    <li >More money
                                                        to be made by farmers due to higher crop yields
                                                    </li>
                                                    <li >High crop
                                                        yields mean more food for farmers and a more stable food supply
                                                    </li>
                                                    <li >Less
                                                        manual labour required from farmers to fertilise their crops and
                                                        prevent pests
                                                    </li>
                                                    <li >Less
                                                        direct contact with chemicals for farm workers could lead to
                                                        improved health conditions
                                                    </li>
                                                    <li >Farm
                                                        workers might need retraining or face redundancy
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-13-0">
                                        <div class="feedback__content">
                                            <p>It is unlikely that this automated machinery will not have an impact on
                                                individuals. Please try again.</p>
                                        <button class="btn" onclick="tryAgain(13)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="question14" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-5')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Society</h3>
                                        <p>Use the slider to show the level of <strong>societal</strong> impact that you think the automated machinery could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel14" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion14" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(14)">Submit
                                    </button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-14-1">
                                            <p>This technology could have a significant impact on society as it affects the
                                                farmers who use it, the communities that may benefit from improved crop
                                                yields, as well as the land that the chemical fertilisers and pesticides are
                                                being used on.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-14-2">
                                            <p>Nice work! The use of automated machinery for dispersing chemical fertilisers
                                                and pesticides can have a significant impact on communities and the
                                                environment beyond just the farmer and their farm.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-14-3">
                                            <p>Nice work! The automation of dispersing chemical fertilisers and pesticides
                                                can have a significant impact on communities and the environment beyond just
                                                the farmer and their farm.</p>
                                        </div>
                                        <div id="jsFeedback-14" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for society.</p>
                                                <ul>
                                                    <li >Can help
                                                        to create thriving rural communities with thriving businesses which
                                                        is good for the local economy and its people
                                                    </li>
                                                    <li >Automation
                                                        and less manual labour required could mean less jobs for farmers
                                                    </li>
                                                    <li >Some
                                                        chemical fertilisers and pesticides may cause harm to the
                                                        communities of people who come into contact with them
                                                    </li>
                                                    <li >Rundown of
                                                        chemicals to surrounding land and water could disturb local
                                                        ecosystems
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-14-0">
                                        <div class="feedback__content">
                                            <p>This technology enables chemical fertilisers and pesticides to be used more
                                                widely around the world. It is unlikely that this will have no impact on
                                                society. Please try again.</p>
                                        <button class="btn" onclick="tryAgain(14)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="question15" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-5')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Global</h3>
                                        <p>Use the slider to show the level of <strong>global</strong> impact that you think the automated machinery could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel15" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion15" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(15)">Submit
                                    </button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-15-1">
                                            <p>The use of automated machinery for dispersing chemical fertilisers and
                                                pesticides could have a significant global impact, especially if it enables
                                                chemicals to be used more widely around the world.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-15-2">
                                            <p>The use of automated machinery for dispersing chemical fertilisers and
                                                pesticides could have a significant global impact, especially if it enables
                                                chemicals to be used more widely around the world.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-15-3">
                                            <p>Good thinking! The use of automated machinery for dispersing chemical
                                                fertilisers and pesticides could have significant global impacts on people,
                                                the economy and ecosystems.</p>
                                        </div>
                                        <div id="jsFeedback-15" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential global consequences.</p>
                                                <ul>
                                                    <li >Increased
                                                        food supplies could reduce food costs for global consumers
                                                    </li>
                                                    <li >Increased
                                                        food supplies could help prevent global food shortages or even
                                                        famine
                                                    </li>
                                                    <li >Overuse of
                                                        some chemical fertilisers and pesticides could leave harmful
                                                        substances in food, leading to global health issues
                                                    </li>
                                                    <li >Overuse of
                                                        chemical fertilisers and pesticides could lead to environmental
                                                        deterioration
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-15-0">
                                        <div class="feedback__content">
                                            <p>This technology enables chemical fertilisers and pesticides to be used more
                                                widely around the world so it will probably have some impact globally.</p>
                                        <button class="btn" onclick="tryAgain(15)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="question16" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-6')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Individual</h3>
                                        <p>Use the slider to show the scale of impact you think the online retailer's privacy and security practices could have on <strong>individuals</strong>.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel16" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion16" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(16)">Submit
                                    </button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-16-1">
                                            <p>The way that this online retailer operates could have a significant impact on
                                                its customers, employees and the company’s own brand and reputation.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-16-2">
                                            <p>The way that this online retailer operates could have a significant impact on
                                                its customers, employees and the company’s own brand and reputation.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-16-3">
                                            <p>Nice work! This online retailer values protecting the security and privacy of
                                                its customers and ensuring that their employees are properly trained which
                                                could have a significant impact on individuals who use and work for this
                                                company!</p>
                                        </div>
                                        <div id="jsFeedback-16" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for individuals.</p>
                                                <ul>
                                                    <li >It is more
                                                        likely that individual customers will have a good experience with
                                                        the business as staff are properly trained, keep up with training
                                                        and are held accountable
                                                    </li>
                                                    <li >It is less
                                                        likely that customer data will be exposed
                                                    </li>
                                                    <li >Team
                                                        members are well trained, well informed and can feel confident that
                                                        they can handle the unexpected
                                                    </li>
                                                    <li >The
                                                        organisation will be recognised as a trusted business and could set
                                                        the industry standard for online retailers
                                                    </li>
                                                    <li >The
                                                        organisation’s strong reputation can lead to it becoming the market
                                                        leader, helping them to gain customers and become more profitable
                                                    </li>
                                                    <li >There will
                                                        be less opportunities for people who are not able to pass the
                                                        background checks to be employed by the company
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-16-0">
                                        <div class="feedback__content">
                                            <p> It is unlikely that this online retailer’s privacy and security best
                                                practices will have no impact on individuals. Please try again.</p>
                                        <button class="btn" onclick="tryAgain(16)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="question17" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-6')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Society</h3>
                                        <p>Use the slider to show the level of <strong>societal</strong> impact that you think the online retailer's privacy and security practices could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel17" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion17" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(17)">Submit
                                    </button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-17-1">
                                            <p>The steps taken by the retailer to protect customers could have a
                                                considerable impact on various communities within its industry.</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-17-2">
                                            <p>Great job! The steps taken by the retailer to protect customers could have a
                                                considerable impact on its industry and the local economies that it operates
                                                in.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-17-3">
                                            <p>The steps taken by the retailer to protect customers could have a
                                                considerable impact on various communities within its industry.</p>
                                        </div>
                                        <div id="jsFeedback-17" class='hide feedback list'>
                                            <div class="feedback__content flex flex--column flex--align-center">
                                                <p>The following are some of the potential consequences for society.</p>
                                                <ul>
                                                    <li >The
                                                        organisation could become recognised as a trusted retailer and a
                                                        leader in the global market, resulting in them becoming more
                                                        reputable, more widely used and ultimately, more profitable
                                                    </li>
                                                    <li >These best
                                                        practices set an example for other online retailers and also set a
                                                        standard for the industry
                                                    </li>
                                                    <li >As the
                                                        organisation grows and becomes more profitable, it could also create
                                                        more jobs
                                                    </li>
                                                    <li >Higher
                                                        levels of employment can strengthen local economies
                                                    </li>
                                                    <li >There will
                                                        be less opportunities for people who are not able to pass the
                                                        background checks to be employed by the company
                                                    </li>
                                                    <li>
                                                        <button class="btn"
                                                        onclick="continueToNextQuestion()">Continue
                                                        </button>
                                                    </li>     
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-17-0">
                                        <div class="feedback__content">
                                            <p>As this is a global online retailer, it is unlikely that their business
                                                practices will have no societal impact.</p>
                                        <button class="btn" onclick="tryAgain(17)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="question18" class="question" style="display:none;">
                        <div class="flex flex--column flex--align-center ">
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-6')
                            <div class="flex flex--column gap--lg box box--task bg--offwhite">
                                <div class="col flex flex--column gap--xlg flex--center">
                                    <div class="flex flex--column gap--sm">
                                        <h3>Global</h3>
                                        <p>Use the slider to show the level of <strong>global</strong> impact that you think the online retailer's privacy and security practices could have.</p>
                                        <p><i>When you have made a selection, click submit.</i></p>
                                    </div>
                                    <div class="container--input-range flex flex--column gap--sm flex--center">
                                        <div class="container--input-range__values">
                                            
                                            <span id="sliderLabel18" class="hide container--input-range__value"></span>
                                        </div>
                                        <input id="sliderQuestion18" type="range" min="0" max="3" value="0">

                                    </div>
                                    <button type="button" class="submitButton btn" onclick="submitAnswer(18)">Submit
                                    </button>
                                    <div class="flex flex--column gap--sm">
                                        <div class='hide feedback neutral-1' id="jsFeedbackLow-18-1">
                                            <p>As this global online retailer has the best interest of its customers and
                                                employees in mind and values protecting the global online community, it
                                                could have a considerable impact in many parts of the world!</p>
                                        </div>
                                        <div class='hide feedback neutral-1' id="jsFeedbackMedium-18-2">
                                            <p>Nice work! This online retailer has the potential to impact many people and
                                                markets around the world and to be a leader in creating a safe global online
                                                community.</p>
                                        </div>
                                        <div class='hide feedback neutral-2' id="jsFeedbackHigh-18-3">
                                            <p>As this global online retailer has the best interest of its customers and
                                                employees in mind and values protecting the global online community, it
                                                could have a considerable impact in many parts of the world!</p>
                                        </div>
                                        <div class="hide" id="jsFeedback-18">
                                            <div class="flex flex--column gap--xlg">
                                                <div class='feedback list gap--xlg'>
                                                    <div class="feedback__content flex flex--column flex--align-center">
                                                        <p>The following are some of the potential global consequences.</p>
                                                        <ul>
                                                            <li >
                                                                Ethical practices such as this example contribute to a
                                                                global online community that is fair and safe for all
                                                            </li>
                                                            <li >A
                                                                successful global retailer could create many jobs
                                                                opportunities, boost the global economy, and foster
                                                                innovation within its industry
                                                            </li>
                                                            <li class="has-bg" >If
                                                                many people around the world trust and transact with this
                                                                online retailer and a data or security breach occurs or if
                                                                the company has to shut down, potentially millions of
                                                                people, including customers, employees, suppliers and
                                                                investors may suffer
                                                            </li>
                                                        </ul>

                                                    </div>


                                                </div>
                                                <div class="flex flex--column gap--xlg ">
                                                    <div class="flex flex--column gap--sm flex--center">
                                                        <p class="animate__animated animate__zoomIn animate__fast flex--center" style="animation-delay: 12s">You did a great job!</p>
                                                        <p class="animate__animated animate__zoomIn animate__fast flex--center" style="animation-delay: 22s">It’s important to think carefully about how you harness and
                                                            manage technologies and digital solutions. The decisions made
                                                            along the way can have implications for individuals, communities
                                                            and the world.</p>
                                                        <p class="animate__animated animate__zoomIn animate__fast flex--center" style="animation-delay: 14s">There are people who specialise in understanding these
                                                            implications and helping others to weigh the moral and ethical
                                                            impacts of their decisions. These people are known as digital
                                                            ethicists.
                                                            Let’s find out more about them next.</p>

                                                    </div>
                                                    <a class="btn animate__animated animate__zoomIn animate__fast flex--center" style="animation-delay: 16s"
                                                            onclick="oBadges.stepCompleted();" href="{{$links['next']}}">
                                                        Continue
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='hide jsFeedbackNone feedback fail animate__animated animate__zoomIn animate__fast'
                                        id="jsFeedbackNone-18-0">
                                        <div class="feedback__content">
                                            <p>As this is a global online retailer, it is unlikely that there will be no
                                                impact. Please try again</p>
                                        <button class="btn" onclick="tryAgain(18)">Try Again</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </main>

@endsection @section('javascript')

    <script src="/badge-assets/{{$url['slug']}}/_global/js/tasks/step2.js"></script>
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

    </script>
    <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 2);
    </script>

@endsection
