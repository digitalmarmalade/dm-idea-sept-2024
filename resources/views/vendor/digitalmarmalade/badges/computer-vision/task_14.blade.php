<section
    id="task-14"
    class="activity task-14 hide"
    data-aos="fade-up"
    data-aos-duration="1500"
    data-aos-delay="300"
    data-scroll-anchor="jsScrollAnchor1"
>
    <div class="
            holder
            flex flex--column flex--align-center
            width--full
            Js_training-questions-sort
        "
      >
      <h2> 3 of 3</h3>
      <p class="col-single">
            What is the correct order of the following steps when training a
            CNN?
      </p>
      <div class="sortable-wrapper">
        <ul class="sortable quiz-reorder answers">
            <li class="jsSortableAnswer draggable" id="sortAnswer-1">
                <div class="drag-handle"></div>
                <div class="drag-text">
                    The machine compares the prediction from the CNN to the
                    training data. There will be a mismatch and a magnitude
                    of error is assigned.
                </div>
            </li>
            <li class="jsSortableAnswer draggable" id="sortAnswer-2">
                <div class="drag-handle"></div>
                <div class="drag-text">
                    Provide input data for the CNN to process. A certain
                    prediction is obtained.
                </div>
            </li>
            <li class="jsSortableAnswer draggable" id="sortAnswer-3">
                <div class="drag-handle"></div>
                <div class="drag-text">
                    The machine adjusts the functions within the CNN to
                    reduce the error until the probabilities given are
                </div>
            </li>
            <li class="jsSortableAnswer draggable" id="sortAnswer-4">
                <div class="drag-handle"></div>
                <div class="drag-text">
                    Provide the machine with labelled training data.
                </div>
            </li>
          </ul>
      </div>

      <a id="task-15-btn" class="btn btn--yellow inline-flex flex--center jsCheckDrag">Check</a>



    <div class="activity--feedback activity--feedback-fail jsSortableFail hide">
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
                <strong class="title">That's not quite right...</strong>
            </p>

            <p>Read the steps carefully and try again.</p>
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
                    jsSortableReCheck
                "
                >Try again</a
            >
        </div>
    </div>

    <div
        class="
            activity--feedback activity--feedback-success
            jsSortableSuccess
            hide
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
                <strong class="title">That's Correct!</strong>
            </p>

            <p>Well done!</p>
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
                    jsSortableSuccess-btn
                "
                >Continue</a
            >
        </div>
    </div>
  </div>
</section>
