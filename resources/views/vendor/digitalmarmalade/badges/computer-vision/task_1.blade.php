
<section
    class="activity task-1"
    data-aos="fade-up"
    data-aos-duration="1500"
    data-aos-delay="300"
    data-scroll-anchor="jsScrollAnchor1"
 >
    <div class="holder flex flex--column flex--align-center width--full">
      <div class="col-single">
            <p>
                Computer vision can perform many different meaningful tasks, some of
                which will help you solve today’s mystery!
            </p>
            <p>
                Let’s explore some of these tasks.   Drag and drop the
                definitions below to match its corresponding computer vision task:
            </p>
        </div>

      <div class="flex width--full flex-grow--1 drag-drop__container">

        <div class="Js_container_place_holders flex flex--column drop-areas__container flex-grow--1 ">

          <div class="container_place_holder flex  width--full flex-grow--1 drop-area__container ">
            <div class="col flex flex-grow--1 flex--center heading">
              <span>DETECTION</span>
              <img src="/badge-assets/computer-vision/_global/svg/tasks/task-1--detection.svg" alt="Representation of Detection" />
            </div>
            <p class="place col  drop-area flex flex-grow--1 flex--center" id="place_4"></p>

          </div>
          <div class="container_place_holder flex  width--full flex-grow--1 drop-area__container">
            <div class="col flex flex-grow--1 flex--center heading">
              <span>CLASSIFICATION</span>
                <img src="/badge-assets/computer-vision/_global/svg/tasks/task-1--classification.svg" alt="Representation of Classification" />
            </div>
            <p class="place col  drop-area flex flex-grow--1 flex--center" id="place_2"></p>

          </div>
          <div class="container_place_holder flex  width--full flex-grow--1 drop-area__container">
            <div class="col flex flex-grow--1  flex--center heading">
              <span>IDENTIFICATION</span>
                <img src="/badge-assets/computer-vision/_global/svg/tasks/task-1--identification.svg" alt="Representation of Identifications" />
            </div>
            <p class="place col  drop-area flex flex--center flex-grow--1" id="place_1"></p>

          </div>
          <div class="container_place_holder flex  width--full flex-grow--1 drop-area__container">
            <div class="col flex flex-grow--1  flex--center heading">
              <span>LOCALISATION</span>
                <img src="/badge-assets/computer-vision/_global/svg/tasks/task-1--localisation.svg" alt="Representation of Localisation" />
            </div>

            <p class="place col  drop-area flex flex-grow--1  flex--center" id="place_3"></p>

          </div>
          <div class="container_place_holder flex  width--full flex-grow--1 drop-area__container">
            <div class="col flex flex-grow--1  flex--center heading">
                <span>TRACKING</span>
                <img src="/badge-assets/computer-vision/_global/svg/tasks/task-1--tracking.svg" alt="Representation of Tracking" />
            </div>
            <p class="place col  drop-area flex flex-grow--1  flex--center" id="place_5"></p>

          </div>
        </div>

        <div class="Js_container_answer flex drop-items__container flex-grow--1">
            <p class="answer drop-item box white flex flex--center" id="answer_3" draggable="true">
                The computer finds a specific person among the people in the image
            </p>

            <p class="answer drop-item box white flex flex--center" id="answer_2" draggable="true">
                The computer predicts the class of an object based on its characteristics in an image
            </p>
            <p class="answer drop-item box white flex flex--center" id="answer_1" draggable="true">
                The computer finds instances of objects from a particular class in an image
            </p>
            <p class="answer  drop-item box white flex flex--center" id="answer_5" draggable="true">
                The computer finds a person in video footage and follows their movement
            </p>
            <p class="answer drop-item box white flex flex--center" id="answer_4" draggable="true">
                The computer determines where the person is within the image
            </p>
        </div>
      </div>
     <button
              id="trigger"
              class="
                  btn btn--yellow
                  inline-flex
                  flex--center flex--align-self-center
                  jsCheck
                  Js_drag_and_drop-check check-btn
              "
          >
              Check
      </button>

      <!-- Hassan, please hide the feedback messages and program the logic to show accordingly -->
      <div
        class="
            activity--feedback activity--feedback-success
            jsFeedbackSuccess hide
        "
         >

            <div class="speech-bubble--holder flex flex--end flex--column">
                <div
                    class="
                        speech-bubble
                        green
                        animate__animated
                        animate__fadeInUp
                        animate__delay-1s
                        animate__fast
                    "
                >
                    <p
                        class="
                            animate__animated
                            animate__fadeInLeft
                            animate__delay-1s
                            animate__fast
                        "
                    >
                        <strong class="title">That’s correct!</strong>
                    </p>

                    <p>Well done.</p>
                </div>
                <img
                    class="
                        flex flex--align-self-end
                        animate__animated
                        animate__zoomIn
                        animate__delay-1s
                        animate__faster
                    "
                    src="/badge-assets/{{
                        $url['slug']
                    }}/_global/svg/icon--feedback-success.svg"
                />
                <a
                    class="
                        btn btn--white
                        inline-flex
                        flex--center
                        animate__animated
                        animate__zoomIn
                        animate__delay-1s
                        animate__faster
                    "
                    onclick="oBadges.stepCompleted();"
                    href="{{ $links['next'] }}"
                    >Continue</a
                >
            </div>

          </div>
        <div class="activity--feedback activity--feedback-fail jsFeedbackFail hide">
          <div class="speech-bubble--holder">
              <div
                  class="
                      speech-bubble
                      red
                      animate__animated
                      animate__fadeInUp
                      animate__delay-1s
                      animate__fast
                  "
              >
                  <p
                      class="
                          animate__animated
                          animate__fadeInLeft
                          animate__delay-1s
                          animate__fast
                      "
                  >
                      <strong class="title"
                          >Oops, that’s not quite right...</strong
                      >
                  </p>

                  <p>Read the task examples carefully.</p>
              </div>
              <img
                  class="
                      flex flex--align-self-start
                      animate__animated
                      animate__zoomIn
                      animate__delay-1s
                      animate__faster
                  "
                  src="/badge-assets/{{
                      $url['slug']
                  }}/_global/svg/icon--feedback-fail.svg"
              />
              <a
                  class="
                      btn btn--white
                      inline-flex
                      flex--center
                      animate__animated
                      animate__zoomIn
                      animate__delay-1s
                      animate__faster
                      jsResetDragnDrop
                  "
                  >Try again</a
              >
          </div>
      </div>

      <div class="activity--feedback activity--feedback-fail jsselectAll hide">
        <div class="speech-bubble--holder">
            <div
                class="
                    speech-bubble
                    red
                    animate__animated
                    animate__fadeInUp
                    animate__delay-1s
                    animate__fast
                "
            >
                <p
                    class="
                        animate__animated
                        animate__fadeInLeft
                        animate__delay-1s
                        animate__fast
                    "
                >
                    <strong class="title"
                        >Oops...</strong
                    >
                </p>

                <p>Please ensure you match all of the definitions provided with a CV task.</p>
            </div>
            <img
                class="
                    flex flex--align-self-start
                    animate__animated
                    animate__zoomIn
                    animate__delay-1s
                    animate__faster
                "
                src="/badge-assets/{{
                    $url['slug']
                }}/_global/svg/icon--feedback-fail.svg"
            />
            <a
                class="
                    btn btn--white
                    inline-flex
                    flex--center
                    animate__animated
                    animate__zoomIn
                    animate__delay-1s
                    animate__faster
                    jsselectAll-btn
                "
                >Try again</a
            >
        </div>
    </div>

      </div>
    </div>
</section>
