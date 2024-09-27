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
      <li class="step active">6</li>
      <li class="step">7</li>
      <li class="step">8</li>
    </ol>
    <div class="container">
      <div class='box box--step-header bg--white flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <div class="flex flex--column gap box__copy">
          <h1>Digital Ethics is Everyone’s Job</h1>
          <p>​​It may be easy to assume that being aware of and enacting digital ethics is only the responsibility of those who are specifically trained to do so, but the truth is that everyone &#8212; regardless of what they do or what position they hold &#8212; has a part to play and has the power to make a difference.</p>
        </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--everyone-job.svg" alt="" />
      </div>     
      <div class="col flex flex--column gap--sm text-align--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <p>There are often regulations, guidelines, standards, and legislation in place, however, the technology and the digital world are evolving very quickly so it can be challenging for regulators to keep up. This is referred to as “The Pacing Problem”. </p>
        <p>Take a look at the different roles shown on the organisational chart below. Organisational charts can be big or small but essentially, they are diagrams that show the structure of an organisation and details the roles, responsibilities and relationships between the individuals within it.</p>
      </div>
    
      <div id="continueToTask" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600" data-aos-anchor-placement="bottom-bottom">
        <button class="btn" onclick="continueToTask()">
        Let&rsquo;s go!
        </button>
      </div>
    </div>
  </section>

  <section id="sectionTask" class="hide task flex flex--column" >
    <div class="box box--task organisation-chart bg--offwhite container animate__animated animate__fadeInUp animate__slow">
      <div class="container flex--center" >
        <div class="flex flex--column ">  
          <div class="flex flex--column gap--sm flex-1 flex--justify-center flex--grow-1 col">
            <p>In this exercise, you will focus on just a few of the roles and you will assign them each a responsibility to help embed digital ethics best practices into their working lives.</p>
            <p class='hide-desktop'>Scroll left or right to move around the diagram to see all areas of the organisational chart.</p>
            <p>For the seven roles highlighted, scroll through the answers provided and select the responsibility that you think is most appropriate to the role.</p>
            <p>Once you have locked in your answer for every role, click the “Check” button to submit your answers.</p>
          </div>
        </div>
      </div>

        <div class="container container--organisation-chart-window">
          <div class="container--organisation-chart">
            <div class="container--organisation-chart__bg">
              <img src="/badge-assets/digital-ethics/_global/svg/illustrations/bg--organisation-chart.svg" alt="" />
            </div>

          <!-- Agnes: we need to to toggle a class of fail and success when the feedback is in place. If the answer is succes,that class stays on after the user clicks try again -->


            <div class="container--organisation-chart__positions">
              <div>
                <div id="question1" class="question container--organisation-chart__position ceo">
                    <img src="/badge-assets/digital-ethics/_global/svg/avatars/ceo.svg" alt="" />
                    <h3>Chief Executive Officer</h3>
                    <div id="p-container-1" class="p-container">
                        <p id="content1-1" class="content active">Establish corporate values to guide ethical decisions</p>
                        <p id="content1-2" class="content">Allocate resources to support values and ethics</p>
                        <p id="content1-3" class="content">Check for digital ethics processes and controls</p>
                        <p id="content1-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                        <p id="content1-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                        <p id="content1-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                        <p id="content1-7" class="content">Demonstrate values to customers, gather and report feedback</p>
                    </div>

                    <div class="flex gap--sm flex--align-center">
                      <button id="prev" onclick="prev(1)"> &lt; </button>
                      <div id="dot-container-1" class="dot-container">
                          <button onclick = "dot(1,1)"></button>
                          <button onclick = "dot(1,2)"></button>
                          <button onclick = "dot(1,3)"></button>
                          <button onclick = "dot(1,4)"></button>
                          <button onclick = "dot(1,5)"></button>
                          <button onclick = "dot(1,6)"></button>
                          <button onclick = "dot(1,7)"></button>
                      </div>
                      <button id="next" onclick="next(1)"> &gt; </button>
                    </div>
                </div>

                <div id="question2" class="question container--organisation-chart__position director-finance">
                    <img src="/badge-assets/digital-ethics/_global/svg/avatars/director-finance.svg" alt="" />
                    <h3>Director of Finance</h3>
                    <div id="p-container-2" class="p-container">
                        <p id="content2-1" class="content active">Establish corporate values to guide ethical decisions</p>
                        <p id="content2-2" class="content">Allocate resources to support values and ethics</p>
                        <p id="content2-3" class="content">Check for digital ethics processes and controls</p>
                        <p id="content2-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                        <p id="content2-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                        <p id="content2-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                        <p id="content2-7" class="content">Demonstrate values to customers, gather and report feedback</p>
                    </div>
                    <div class="flex gap--sm flex--align-center">
                      <button id="prev" onclick="prev(2)"> &lt; </button>
                      <div id="dot-container-2" class="dot-container">
                          <button onclick = "dot(2,1)"></button>
                          <button onclick = "dot(2,2)"></button>
                          <button onclick = "dot(2,3)"></button>
                          <button onclick = "dot(2,4)"></button>
                          <button onclick = "dot(2,5)"></button>
                          <button onclick = "dot(2,6)"></button>
                          <button onclick = "dot(2,7)"></button>
                      </div>
                      <button id="next" onclick="next(2)"> &gt; </button>
                    </div>
                </div>

                <div id="question3" class="question container--organisation-chart__position auditor">
                    <img src="/badge-assets/digital-ethics/_global/svg/avatars/auditor.svg" alt="" />
                    <h3><span class="tooltip-trigger jsTooltip" data-tooltip-content="#tooltip7_content">Auditor</span></h3>
                    <div id="p-container-3" class="p-container">
                        <p id="content3-1" class="content active">Establish corporate values to guide ethical decisions</p>
                        <p id="content3-2" class="content">Allocate resources to support values and ethics</p>
                        <p id="content3-3" class="content">Check for digital ethics processes and controls</p>
                        <p id="content3-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                        <p id="content3-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                        <p id="content3-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                        <p id="content3-7" class="content">Demonstrate values to customers, gather and report feedback</p>
                    </div>
                    <div class="flex gap--sm flex--align-center">
                      <button id="prev" onclick="prev(3)"> &lt; </button>
                      <div id="dot-container-3" class="dot-container">
                          <button onclick = "dot(3,1)"></button>
                          <button onclick = "dot(3,2)"></button>
                          <button onclick = "dot(3,3)"></button>
                          <button onclick = "dot(3,4)"></button>
                          <button onclick = "dot(3,5)"></button>
                          <button onclick = "dot(3,6)"></button>
                          <button onclick = "dot(3,7)"></button>
                      </div>
                      <button id="next" onclick="next(3)"> &gt; </button>
                    </div>
                </div>

                <div id="question4" class="question container--organisation-chart__position pm">
                    <img src="/badge-assets/digital-ethics/_global/svg/avatars/pm.svg" alt="" />
                    <h3>Project Manager</h3>
                    <div id="p-container-4" class="p-container">
                        <p id="content4-1" class="content active">Establish corporate values to guide ethical decisions</p>
                        <p id="content4-2" class="content">Allocate resources to support values and ethics</p>
                        <p id="content4-3" class="content">Check for digital ethics processes and controls</p>
                        <p id="content4-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                        <p id="content4-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                        <p id="content4-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                        <p id="content4-7" class="content">Demonstrate values to customers, gather and report feedback</p>
                    </div>
                    <div class="flex gap--sm flex--align-center">
                      <button id="prev" onclick="prev(4)"> &lt; </button>
                      <div id="dot-container-4" class="dot-container">
                          <button onclick = "dot(4,1)"></button>
                          <button onclick = "dot(4,2)"></button>
                          <button onclick = "dot(4,3)"></button>
                          <button onclick = "dot(4,4)"></button>
                          <button onclick = "dot(4,5)"></button>
                          <button onclick = "dot(4,6)"></button>
                          <button onclick = "dot(4,7)"></button>
                      </div>
                      <button id="next" onclick="next(4)"> &gt; </button>
                    </div>
                </div>

                <div id="question5" class="question container--organisation-chart__position product-designer">
                    <img src="/badge-assets/digital-ethics/_global/svg/avatars/product-designer.svg" alt="" />
                    <h3>Product Designer</h3>
                    <div id="p-container-5" class="p-container">
                        <p id="content5-1" class="content active">Establish corporate values to guide ethical decisions</p>
                        <p id="content5-2" class="content">Allocate resources to support values and ethics</p>
                        <p id="content5-3" class="content">Check for digital ethics processes and controls</p>
                        <p id="content5-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                        <p id="content5-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                        <p id="content5-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                        <p id="content5-7" class="content">Demonstrate values to customers, gather and report feedback</p>
                    </div>
                    <div class="flex gap--sm flex--align-center">
                      <button id="prev" onclick="prev(5)"> &lt; </button>
                      <div id="dot-container-5" class="dot-container">
                          <button onclick = "dot(5,1)"></button>
                          <button onclick = "dot(5,2)"></button>
                          <button onclick = "dot(5,3)"></button>
                          <button onclick = "dot(5,4)"></button>
                          <button onclick = "dot(5,5)"></button>
                          <button onclick = "dot(5,6)"></button>
                          <button onclick = "dot(5,7)"></button>
                      </div>
                      <button id="next" onclick="next(5)"> &gt; </button>
                    </div>
                </div>

                <div id="question6" class="question container--organisation-chart__position qa">
                    <img src="/badge-assets/digital-ethics/_global/svg/avatars/qa.svg" alt="" />
                    <h3>Quality Controller</h3>
                    <div id="p-container-6" class="p-container">
                        <p id="content6-1" class="content active">Establish corporate values to guide ethical decisions</p>
                        <p id="content6-2" class="content">Allocate resources to support values and ethics</p>
                        <p id="content6-3" class="content">Check for digital ethics processes and controls</p>
                        <p id="content6-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                        <p id="content6-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                        <p id="content6-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                        <p id="content6-7" class="content">Demonstrate values to customers, gather and report feedback</p>
                    </div>
                    <div class="flex gap--sm flex--align-center">
                      <button id="prev" onclick="prev(6)"> &lt; </button>
                      <div id="dot-container-6" class="dot-container">
                          <button onclick = "dot(6,1)"></button>
                          <button onclick = "dot(6,2)"></button>
                          <button onclick = "dot(6,3)"></button>
                          <button onclick = "dot(6,4)"></button>
                          <button onclick = "dot(6,5)"></button>
                          <button onclick = "dot(6,6)"></button>
                          <button onclick = "dot(6,7)"></button>
                      </div>
                      <button id="next" onclick="next(6)"> &gt; </button>
                    </div>
                </div>

                <div id="question7" class="question container--organisation-chart__position customer-service-representative">
                    <img src="/badge-assets/digital-ethics/_global/svg/avatars/customer-service-representative.svg" alt="" />
                    <h3>Customer Service Representative</h3>
                    <div id="p-container-7" class="p-container">
                        <p id="content7-1" class="content active">Establish corporate values to guide ethical decisions</p>
                        <p id="content7-2" class="content">Allocate resources to support values and ethics</p>
                        <p id="content7-3" class="content">Check for digital ethics processes and controls</p>
                        <p id="content7-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                        <p id="content7-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                        <p id="content7-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                        <p id="content7-7" class="content">Demonstrate values to customers, gather and report feedback</p>
                    </div>
                    <div class="flex gap--sm flex--align-center">
                      <button id="prev" onclick="prev(7)"> &lt; </button>
                      <div id="dot-container-7" class="dot-container">
                          <button onclick = "dot(7,1)"></button>
                          <button onclick = "dot(7,2)"></button>
                          <button onclick = "dot(7,3)"></button>
                          <button onclick = "dot(7,4)"></button>
                          <button onclick = "dot(7,5)"></button>
                          <button onclick = "dot(7,6)"></button>
                          <button onclick = "dot(7,7)"></button>
                      </div>
                      <button id="next" onclick="next(7)"> &gt; </button>
                    </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>


      <div class="container flex--center" data-aos="fade-up" data-aos-duration="1500"  data-aos-anchor-placement="bottom-bottom">
        
          <a class="btn flex--align-self-center" id='checkButton' onclick="checkAnswer()">Check</a>
          
          <div class='hide jsFeedbackSuccess1 feedbackSuccess feedback success animate__animated animate__zoomIn animate__faster'
                id="jsFeedbackSuccess1">
                <div class="feedback__content">
                <p class="">That’s correct, well done! Digital ethics really is everyone’s responsibility and there is usually at least one thing that someone in any role at any level can do to help ensure that the organisation is operating ethically. </p>
              </div>
          </div>

          <div class='hide jsFeedbackSuccessAll flex flex--column flex--center animate__animated animate__zoomIn animate__faster'
                id="jsFeedbackSuccessAll">
                <div class="col flex flex--column gap--lg flex--center">
                <p class="">Now it’s time to really get thinking like a digital ethicist! Put your skills to the test as you work through this next challenge.</p>
                    <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
              </div>
          </div>

          <div class='hide jsFeedbackFail feedback fail animate__animated animate__zoomIn animate__faster '
                id="jsFeedbackFail1">
                <div class="feedback__content">
              <p >
                  Oops! Please make sure you have selected an action for every role.
              </p>
              <button class="btn"
                      onclick="tryAgain()">Try Again</button>
            </div>
          </div>

          <div class='hide jsFeedbackFail feedback fail animate__animated animate__zoomIn animate__faster'
                id="jsFeedbackFail2">
                <div class="feedback__content">
                <p>
                    Oops, that’s not quite right. Please read through the options carefully and select the responsibility that is most appropriate for the role.
                </p>
                <button class="btn" onclick="tryAgain()">Try Again</button>
              </div>
          </div> 
      </div>
    </div>
  </section>


</main>



@endsection @section('javascript')

<script src="/badge-assets/{{$url['slug']}}/_global/js/tasks/step6.js"></script>
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
  oBadges.setSlugAndStep('{{$url['slug']}}', 6);
</script>

@endsection
