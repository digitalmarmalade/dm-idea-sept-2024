
<section class="task-12 hide flex flex--justify-center" id="task-12">
  <div class="Js_training flex flex--column flex--justify-end holder  bg--computer-zoomed-in">

    <div class='activity--feedback activity--feedback-fail  jsTrainingFail1 hide'>

        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInDown animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">
              <strong class="title">Hmm ...</strong>
              <p>That is still quite a high margin of error, please try again.</p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
          <a class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsResetTimer">Try again</a>

      </div>
    </div>
    <div class='activity--feedback activity--feedback-fail  jsFeedbackFail jsTrainingFail2 hide'>

        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInDown animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">
              <strong class="title">Close!</strong>
              <p>Observe the changes of the error margin and try again.</p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
          <a class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsResetTimer">Try again</a>

      </div>
    </div>
    <div class='activity--feedback activity--feedback-success  jsTrainingSuccess hide'>

        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInDown animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">
              <strong class="title"> That’s correct!</strong>
              <p> The CNN has been trained to make a prediction of what the objects are with a very low margin of error, meaning that it can make accurate predictions in most of the cases.</p><br />
              <p>Let’s do a quick recap of what we have just learned.</p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
          <!-- Hassan, program this button to show the next activity section -->
          <a class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn  animate__delay-1s animate__faster jsTask13Pass" >Continue</a>
        </div>
      </div>

      <div class="flex flex-grow--1 flex--column holder_animations">

        <div class="animation__holder">
            <img src="/badge-assets/computer-vision/_global/imgs/tasks/task-11--helmet.png" alt="" class="width--auto helmet">

            <table>
              <tbody>
                  <!-- Hassan, change the percentages to reflect what the user sees when the trainer is paused  and show appropriate feedback. If the higher percentage is not helmet, add class 'fail' to change background to red. If helmet shows higher percentage toggle class 'success' to get a green background -->
                <tr>
                  <td class="border--left">Motorcycle Helmet</td>

                  <td  id= "motorcycle-helmet-percentage" class="border--right">20%</td>
                </tr>
                <tr>
                  <td class="border--left">Motocross Helmet</td>
                  <!-- Hassan, change this percentage to reflect what the user sees when the trainer is paused -->
                  <td id="motocross-helmet-percentage" class="border--right">10%</td>
                </tr>
                <tr>
                  <!-- Hassan, change this percentage to reflect what the user sees when the trainer is paused -->
                  <td class="border--left">Car</td>
                  <td id="car-percentage" class="border--right">70%</td>
                </tr>
              </tbody>
            </table>

            <div class="animation--cnn__holder">
              <img src="/badge-assets/computer-vision/_global/svg/animations/animation--cnn.svg" alt="" class="animation--cnn">
            </div>

        </div>
        <div class="animation__holder flex flex--center">
          <div class="flex">
            <table>
              <thead>
                <tr>
                    <th></th>
                    <th class="border--left">ACTUAL OUTPUT</th>
                    <th>ERROR</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td class="arrows jsCar">
                      <!-- Hassan, hide and show the arrows as apropriate -->
                      <span class="positive hide">&#8593;</span>
                      <span class="negative hide">&#8595;</span>
                    </td>
                    <td class="border--left actual-output">0</td>
                        <!-- Hassan, toggle classes "positive" or "negative" as apropriate; this should change the colour of the number to green or red-->
                    <td id="Car" class="jsCounter border--right" data-target="20" data-error="increment">+0.6</td>
                </tr>
                <tr>
                  <td class="arrows jsPerson">
                      <!-- Hassan, hide and show the arrows as apropriate -->
                    <span class="positive">&#8593;</span>
                    <span class="negative">&#8595;</span>
                  </td>
                  <td class="border--left actual-output">1</td>
                      <!-- Hassan, toggle classes "positive" or "negative" as apropriate; this should change the colour of the number to green or red-->
                  <td id="Person" class="jsCounter border--right" data-target="20" data-error="increment">+0.5</td>
                </tr>
                <tr>
                  <td class="arrows jsHelmet">
                      <!-- Hassan, hide and show the arrows as apropriate -->
                    <span class="positive">&#8593;</span>
                    <span class="negative">&#8595;</span>
                  </td>
                  <td class="border--left actual-output">0</td>
                  <!-- Hassan, toggle classes "positive" or "negative" as apropriate; this should change the colour of the number to green or red-->
                  <td id="Helmet" class="jsCounter border--right" data-target="20" data-error="increment">+0.7</td>
                </tr>
              </tbody>
            </table>
          </div>

            <button class="Js_training-pause btn btn--yellow inline-flex flex--center btn--pause-training">Pause Training</button>
        </div>

      </div>



    </div>


  </div>
</section>
