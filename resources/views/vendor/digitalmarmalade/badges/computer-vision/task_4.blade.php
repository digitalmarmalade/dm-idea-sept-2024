<section
    class="activity task-4"
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
            <p><strong>Let’s see this in action!</strong></p>
            <p>
                Slide the kernel across each pixel of the image and observe how
                the new pixel value on the output image is calculated. Keep
                going until every pixel has been calculated.
            </p>
        </div>

        <div
            class="
                Js_slide-kernel-across
                flex
                space-between
                container
                flex--align-center
            "
        >
            <div class="flex flex--column flex--align-center">
                <div class="inputs">
                    <div class="kernel flex"></div>
                    <div class="input flex flex--column"></div>
                </div>
                <p class="caption">Input</p>
            </div>

            <div
                class="
                    flex flex--column flex--align-center
                    filter-in-action__holder
                "
            >
                <div class="filter-in-action flex flex--row"></div>
                <p class="caption">Filter in action</p>
            </div>

            <div class="flex flex--column flex--align-center">
                <div class="output flex flex--column"></div>
                <p class="caption">Output</p>
            </div>
        </div>

        <!-- Hassan The content below is  hidden until user clicks on the continue button successfully on the activity above -->

        <button
            class="
                Js_slide-kernel-across-check
                btn btn--yellow
                inline-flex
                flex--center flex--align-self-center
            "
        >
            Continue
        </button>
        <section class="jsScrollAnchor1"></section>
        <!-- Hassan, please hide the feedback messages and program the logic to show accordingly -->

        <div
            class="
                activity--feedback activity--feedback-fail
                jsSlideKernelFeedbackFail
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
                        It looks like you haven’t finished applying the
                        filter... Make sure to hover the kernel over all the
                        pixels of the input image.
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
                        jsSlideKernelReset
                    "
                    >Try again</a
                >
            </div>
        </div>
    </div>
</section>

<section class="jsScrollAnchor1"></section>
