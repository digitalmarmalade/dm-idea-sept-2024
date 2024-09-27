<!-- Hassan The content below is  hidden until user clicks on the continue button successfully on the activity above -->
<section
    class="activity task-6 hide"
    data-aos="fade-up"
    data-aos-duration="1500"
    data-aos-delay="300"
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
        <p><strong>It's your turn to try!</strong></p>
            <p>
                Here, a 3x3 kernel has been placed over an image.<br />Using
                what you have just learned, perform the convolution calculation
                and input the new value on the <strong>output</strong> grid.
            </p>
            <p>
                You may find it helpful to have a pencil, paper and a calculator on hand for the calculations.
            </p>
            <div
                class="box cobalt text-align--center"
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="300"
                data-scroll-anchor="jsScrollAnchor1"
            >
                <p class="box__title text-transform--uppercase">
                    <strong>Hint</strong>
                </p>
                <p>
                    Both your calculation and your placement of the pixel must be correct before you can move on!
                </p>
            </div>
        </div>

        <div class="Js_kenrnel_correct_position container flex space_between">
            <div class="flex flex--column align-items--center">
                <div class="kernel"></div>
                <p class="caption">Kernel</p>
            </div>

            <div class="flex flex--column align-items--center">
                <div class="input flex column"></div>
                <p class="caption">Input</p>
            </div>

            <div class="flex flex--column align-items--center">
                <div class="output flex column"></div>
                <p class="caption">Output</p>
            </div>
        </div>
        <button
            class="js_kenrnel_correct_position-check btn btn--yellow inline-flex flex--center flex--align-self-center"
            data-aos="zoom-in"
            data-aos-duration="1500"
            data-aos-delay="400"
            data-scroll-anchor="jsScrollAnchor1"
        >
            Check
        </button>

        <div
            class="activity--feedback activity--feedback-fail jsTask6IncorrectCalculationsBox hide"
        >
            <div class="speech-bubble--holder">
                <div
                    class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast"
                >
                    <p
                        class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"
                    >
                        <strong class="title">Oops...</strong>
                    </p>

                    <p>
                        Please check your calculation and the placement of the
                        pixel value.
                    </p>
                </div>
                <img
                    class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster"
                    src="/badge-assets/{{
                        $url['slug']
                    }}/_global/svg/icon--feedback-fail.svg"
                />
                <a
                    class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsTask6IncorrectCalculationsBox-btn"
                    >Try again</a
                >
            </div>
        </div>
        <div
            class="activity--feedback activity--feedback-fail jsEmptyCells hide"
        >
            <div class="speech-bubble--holder">
                <div
                    class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast"
                >
                    <p
                        class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"
                    >
                        <strong class="title">Oops....</strong>
                    </p>

                    <p>
                        You must perform the convolution calculation and input
                        the new value on the output grid.
                    </p>
                </div>
                <img
                    class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster"
                    src="/badge-assets/{{
                        $url['slug']
                    }}/_global/svg/icon--feedback-fail.svg"
                />
                <a
                    class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsEmptyCells-btn"
                    >Okay</a
                >
            </div>
        </div>

        <div
            class="activity--feedback activity--feedback-fail jsTask6IncorrectCalculations hide"
        >
            <div class="speech-bubble--holder">
                <div
                    class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast"
                >
                    <p
                        class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"
                    >
                        <strong class="title"
                            >Oops, that’s not quite right....</strong
                        >
                    </p>

                    <p>
                        You’ve input the pixel value in the correct box but
                        please check your calculation.
                    </p>
                </div>
                <img
                    class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster"
                    src="/badge-assets/{{
                        $url['slug']
                    }}/_global/svg/icon--feedback-fail.svg"
                />
                <a
                    class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsTask6IncorrectCalculations-btn"
                    >Try again</a
                >
            </div>
        </div>

        <div
            class="activity--feedback activity--feedback-fail jsTask6IncorrectBox hide"
        >
            <div class="speech-bubble--holder">
                <div
                    class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast"
                >
                    <p
                        class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"
                    >
                        <strong class="title"
                            >Oops, that’s not quite right...</strong
                        >
                    </p>

                    <p>
                        Your calculation is correct, well done! Please check
                        that the pixel value is in the correct box.
                    </p>
                </div>
                <img
                    class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster"
                    src="/badge-assets/{{
                        $url['slug']
                    }}/_global/svg/icon--feedback-fail.svg"
                />
                <a
                    class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsTask6IncorrectBox-btn"
                    >Try again</a
                >
            </div>
        </div>
    </div>
</section>
<section class="jsScrollAnchor1"></section>
