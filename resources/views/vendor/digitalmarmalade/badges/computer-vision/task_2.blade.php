<section
    class="activity task-2"
    data-aos="fade-up"
    data-aos-duration="1500"
    data-scroll-anchor="jsScrollAnchor1"
>
    <div class="holder flex flex--column flex--align-center">
        <div
            class="col-single"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="200"
            data-scroll-anchor="jsScrollAnchor1"
        >
          <p><strong>Let's try this out ourselves!</strong></p>
          <p>Try editing the pixel values in the grid and watch what happens to the corresponding pixels in the image.
          </p>
          <p>Have some fun! Edit the image or recreate your own image and take a screenshot to save it. The pixels in the image will autmatically start changing as you change the pixel values.</p>
        </div>

        <!-- Hassan, make sure the input range goes from 0 to 255 -->
        <div class="Js_gray-image container" data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-delay="300"
        data-scroll-anchor="jsScrollAnchor1">
            <div class="input_container"></div>
            <div class="output_container"></div>
        </div>

        <p
            class="col-single"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="400"
            data-scroll-anchor="jsScrollAnchor1"
        >
        When you are finished, click Continue to move on to the next section.</p>
        <button
            id="grayImageCheck"
            class="
                btn btn--yellow
                inline-flex
                flex--center flex--align-self-center
            "
        >
            Continue
        </button>

        <!-- Hassan, please hide the feedback messages and program the logic to show accordingly -->

        <div
            class="
                activity--feedback activity--feedback-fail
                jsGrayFeedbackFail
                hide
            "
        >
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
                        <strong class="title">Oops...</strong>
                    </p>

                    <p>
                        Have you tried to change at least one of the numbers to
                        check what happens?
                    </p>
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
                        jsGrayReset
                    "
                    >Try again</a
                >
            </div>
        </div>

        <!-- Between 0 to 255 message -->
        <div
            class="
                activity--feedback activity--feedback-fail
                jsFeedbackLimit
                hide
            "
            id="gray-color-limit"
        >
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
                        <strong class="title">Oops...</strong>
                    </p>

                    <p>Limit your input within 0 to 255</p>
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
                        jsGrayOK
                    "
                    >OK</a
                >
            </div>
        </div>
    </div>
</section>

<section class="jsScrollAnchor1"></section>
