<section id="task9Anchor" class="task-9 disabled">
    <div class="holder flex flex--column flex--align-center">
        <div class="labeling__holder">
            <ul class="keywords inline-flex flex--wrap width--full">
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Vehicle
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Cyclist
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Motorcycle helmet
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Motocross helmet
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Car
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Pedestrian
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Cat
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Hat
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Bus
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Motorcycle
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Dog
                </li>
                <li class="keyword sm cobalt-light inline-flex flex--center">
                    Moped
                </li>
            </ul>
        </div>

        <div class="Js_image-name flex flex--center flex--wrap"></div>
        <button
            class="
                Js_image-name-check
                btn btn--yellow
                inline-flex
                flex--center flex--align-self-center
            "
        >
            Check
        </button>

        <div
            class="
                activity--feedback activity--feedback-fail
                jsAnnotationFeedbackFail
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
                        It looks like you haven’t labelled all images correctly.
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
                        jsAnnotationReset
                    "
                    >Try again</a
                >
            </div>
        </div>
        <div
            class="
                activity--feedback activity--feedback-success
                jsAnnotationFeedbackSuccess
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
                        <strong class="title">Great job!</strong>
                    </p>

                    <p>Let’s move on.</p>
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
                    id="task-9"
                    >Continue</a
                >
            </div>
        </div>
    </div>
</section>
