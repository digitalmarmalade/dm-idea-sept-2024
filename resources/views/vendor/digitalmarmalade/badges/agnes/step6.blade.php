@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<main>

  <section id="task6">

      <div>
          <div id="question1" class="question ">
              <h3>Chief Executive Officer</h3>
              <button id="prev" onclick="prev(1)"> &lt; </button>

              <div id="p-container-1" class="p-container">
                  <p id="content1-1" class="content active">Establish corporate values to guide ethical decisions</p>
                  <p id="content1-2" class="content">Allocate resources to support values and ethics</p>
                  <p id="content1-3" class="content">Check for digital ethics processes and controls</p>
                  <p id="content1-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                  <p id="content1-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                  <p id="content1-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                  <p id="content1-7" class="content">Demonstrate values to customers, gather and report feedback</p>
              </div>

              <button id="next" onclick="next(1)"> &gt; </button>

              <div id="dot-container-1" class="dot-container">
                  <button onclick = "dot(1,1)"></button>
                  <button onclick = "dot(1,2)"></button>
                  <button onclick = "dot(1,3)"></button>
                  <button onclick = "dot(1,4)"></button>
                  <button onclick = "dot(1,5)"></button>
                  <button onclick = "dot(1,6)"></button>
                  <button onclick = "dot(1,7)"></button>
              </div>
          </div>

          <div id="question2" class="question ">
              <h3>Director of Finance</h3>
              <button id="prev" onclick="prev(2)"> &lt; </button>
              <div id="p-container-2" class="p-container">
                  <p id="content2-1" class="content active">Establish corporate values to guide ethical decisions</p>
                  <p id="content2-2" class="content">Allocate resources to support values and ethics</p>
                  <p id="content2-3" class="content">Check for digital ethics processes and controls</p>
                  <p id="content2-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                  <p id="content2-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                  <p id="content2-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                  <p id="content2-7" class="content">Demonstrate values to customers, gather and report feedback</p>
              </div>
              <button id="next" onclick="next(2)"> &gt; </button>

              <div id="dot-container-2" class="dot-container">
                  <button onclick = "dot(2,1)"></button>
                  <button onclick = "dot(2,2)"></button>
                  <button onclick = "dot(2,3)"></button>
                  <button onclick = "dot(2,4)"></button>
                  <button onclick = "dot(2,5)"></button>
                  <button onclick = "dot(2,6)"></button>
                  <button onclick = "dot(2,7)"></button>
              </div>
          </div>

          <div id="question3" class="question ">
              <h3>Auditor</h3>
              <button id="prev" onclick="prev(3)"> &lt; </button>
              <div id="p-container-3" class="p-container">
                  <p id="content3-1" class="content active">Establish corporate values to guide ethical decisions</p>
                  <p id="content3-2" class="content">Allocate resources to support values and ethics</p>
                  <p id="content3-3" class="content">Check for digital ethics processes and controls</p>
                  <p id="content3-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                  <p id="content3-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                  <p id="content3-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                  <p id="content3-7" class="content">Demonstrate values to customers, gather and report feedback</p>
              </div>
              <button id="next" onclick="next(3)"> &gt; </button>

              <div id="dot-container-3" class="dot-container">
                  <button onclick = "dot(3,1)"></button>
                  <button onclick = "dot(3,2)"></button>
                  <button onclick = "dot(3,3)"></button>
                  <button onclick = "dot(3,4)"></button>
                  <button onclick = "dot(3,5)"></button>
                  <button onclick = "dot(3,6)"></button>
                  <button onclick = "dot(3,7)"></button>
              </div>
          </div>

          <div id="question4" class="question ">
              <h3>Project Manager</h3>
              <button id="prev" onclick="prev(4)"> &lt; </button>
              <div id="p-container-4" class="p-container">
                  <p id="content4-1" class="content active">Establish corporate values to guide ethical decisions</p>
                  <p id="content4-2" class="content">Allocate resources to support values and ethics</p>
                  <p id="content4-3" class="content">Check for digital ethics processes and controls</p>
                  <p id="content4-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                  <p id="content4-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                  <p id="content4-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                  <p id="content4-7" class="content">Demonstrate values to customers, gather and report feedback</p>
              </div>
              <button id="next" onclick="next(4)"> &gt; </button>

              <div id="dot-container-4" class="dot-container">
                  <button onclick = "dot(4,1)"></button>
                  <button onclick = "dot(4,2)"></button>
                  <button onclick = "dot(4,3)"></button>
                  <button onclick = "dot(4,4)"></button>
                  <button onclick = "dot(4,5)"></button>
                  <button onclick = "dot(4,6)"></button>
                  <button onclick = "dot(4,7)"></button>
              </div>
          </div>

          <div id="question5" class="question ">
              <h3>Product Designer</h3>
              <button id="prev" onclick="prev(5)"> &lt; </button>
              <div id="p-container-5" class="p-container">
                  <p id="content5-1" class="content active">Establish corporate values to guide ethical decisions</p>
                  <p id="content5-2" class="content">Allocate resources to support values and ethics</p>
                  <p id="content5-3" class="content">Check for digital ethics processes and controls</p>
                  <p id="content5-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                  <p id="content5-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                  <p id="content5-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                  <p id="content5-7" class="content">Demonstrate values to customers, gather and report feedback</p>
              </div>
              <button id="next" onclick="next(5)"> &gt; </button>

              <div id="dot-container-5" class="dot-container">
                  <button onclick = "dot(5,1)"></button>
                  <button onclick = "dot(5,2)"></button>
                  <button onclick = "dot(5,3)"></button>
                  <button onclick = "dot(5,4)"></button>
                  <button onclick = "dot(5,5)"></button>
                  <button onclick = "dot(5,6)"></button>
                  <button onclick = "dot(5,7)"></button>
              </div>
          </div>

          <div id="question6" class="question ">
              <h3>Quality Controller</h3>
              <button id="prev" onclick="prev(6)"> &lt; </button>
              <div id="p-container-6" class="p-container">
                  <p id="content6-1" class="content active">Establish corporate values to guide ethical decisions</p>
                  <p id="content6-2" class="content">Allocate resources to support values and ethics</p>
                  <p id="content6-3" class="content">Check for digital ethics processes and controls</p>
                  <p id="content6-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                  <p id="content6-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                  <p id="content6-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                  <p id="content6-7" class="content">Demonstrate values to customers, gather and report feedback</p>
              </div>
              <button id="next" onclick="next(6)"> &gt; </button>

              <div id="dot-container-6" class="dot-container">
                  <button onclick = "dot(6,1)"></button>
                  <button onclick = "dot(6,2)"></button>
                  <button onclick = "dot(6,3)"></button>
                  <button onclick = "dot(6,4)"></button>
                  <button onclick = "dot(6,5)"></button>
                  <button onclick = "dot(6,6)"></button>
                  <button onclick = "dot(6,7)"></button>
              </div>
          </div>

          <div id="question7" class="question ">
              <h3>Customer Service Representative</h3>
              <button id="prev" onclick="prev(7)"> &lt; </button>
              <div id="p-container-7" class="p-container">
                  <p id="content7-1" class="content active">Establish corporate values to guide ethical decisions</p>
                  <p id="content7-2" class="content">Allocate resources to support values and ethics</p>
                  <p id="content7-3" class="content">Check for digital ethics processes and controls</p>
                  <p id="content7-4" class="content">Involve diverse stakeholders and ensure regular ethical reviews</p>
                  <p id="content7-5" class="content">Consider all stakeholders and apply ethical principles to design decisions</p>
                  <p id="content7-6" class="content">Assess for ethical implications and assure ethical alignment</p>
                  <p id="content7-7" class="content">Demonstrate values to customers, gather and report feedback</p>
              </div>
              <button id="next" onclick="next(7)"> &gt; </button>

              <div id="dot-container-7" class="dot-container">
                  <button onclick = "dot(7,1)"></button>
                  <button onclick = "dot(7,2)"></button>
                  <button onclick = "dot(7,3)"></button>
                  <button onclick = "dot(7,4)"></button>
                  <button onclick = "dot(7,5)"></button>
                  <button onclick = "dot(7,6)"></button>
                  <button onclick = "dot(7,7)"></button>
              </div>
          </div>

          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
             id='checkButton' onclick="checkAnswer()">Check</a>
      </div>

      <div>
          <div class='hide jsFeedbackSuccess1 feedbackSuccess'
               id="jsFeedbackSuccess1">
              <p class="">That’s correct, well done! Digital ethics really is everyone’s responsibility and there is usually at least one thing that someone in any role at any level can do to help ensure that the organisation is operating ethically. </p>
          </div>

          <div class='hide jsFeedbackSuccessAll feedback'
               id="jsFeedbackSuccessAll">
              <p class="">Now it’s time to really get thinking like a digital ethicist! Put your skills to the test as you work through this next challenge.</p>
              <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide"
                 onclick="continueToNextQuestion()">Continue</a>
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

</main>
@endsection


@section('javascript')
    <style>
        .p-container{
            position: relative;
        }

        .content{
            position: relative;
            width: 460px;
            height: 10px;
            display: none;
        }

        .active{
            display: block;
        }
        .dot-container{
            width: 250px;
            margin: 20px auto 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        button{
            outline: none;
            cursor: pointer;
        }

        .dot-container button{
            height: 15px;
            width: 50px;
            border-radius: 10%;
            border: 3px solid #076bb8;
            background-color: transparent;
        }

        // .dot-container button:nth-child(1){
        //     background-color: #076bb8;
        // }
        // #prev,#next{
        //     height: 40px;
        //     width: 40px;
        //     position: absolute;
        //     background-color: #076bb8;
        //     color: #ffffff;
        //     margin: auto;
        //     top: 0;
        //     bottom: 0;
        //     border: none;
        //     border-radius: 3px;
        //     font-size: 18px;
        //     font-weight: bolder;
        // }
        //
        // #prev{
        //     left: 5px;
        // }
        //
        // #next{
        //     right: 5px;
        // }
    </style>

    <script src="/badge-assets/{{$url['slug']}}/_global/js/step6.js"></script>

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
