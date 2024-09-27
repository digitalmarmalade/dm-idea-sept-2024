<section class="activity task-5 hide">
    <div class="holder flex flex--column flex--align-center">
        <div
            class="col-single"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="200"
            data-scroll-anchor="jsScrollAnchor1"
        >
            <p><strong>Let's see the filtered image!</strong></p>
            <p>
                Use the slider on the image below to see what the image will
                look like after the filter has been applied.
            </p>
        </div>
        <div
            class="Js_filter-applied flex"
            data-aos="fade-up"
            data-aos-duration="1500"
            data-aos-delay="300"
            data-scroll-anchor="jsScrollAnchor1"
        >
            <div class="filter-container">
                <div class="resizer flex">
                    <img
                        class="width--auto"
                        src="/badge-assets/computer-vision/_global/svg/icons/icon--slide.svg"
                    />
                </div>

                <div class="filtered-image-container">
                    <div class="filter-layer position--absolute"></div>

                    <img
                        src="/badge-assets/computer-vision/_global/svg/tasks/task-5--illustration.svg"
                        alt=""
                        id="resizable"
                    />
                </div>
            </div>
        </div>
        <button
            id="task-5-btn"
            class="
                btn btn--yellow
                inline-flex
                flex--center flex--align-self-center
            "
            data-aos="zoom-in"
            data-aos-duration="1500"
            data-aos-delay="400"
            data-scroll-anchor="jsScrollAnchor1"
        >
            Continue
        </button>

        <div
            class="
                activity--feedback activity--feedback-fail
                jsSlideFilterFeedbackFail
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
                        You must slide the filter all the way to reveal the
                        filtered Image
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
                        jsSlideFilterFeedbackFail-btn
                    "
                    >Try again</a
                >
            </div>
        </div>
    </div>
</section>
