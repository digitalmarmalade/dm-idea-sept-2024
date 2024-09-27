<section
    id="task-13"
    class="activity task-13"
    data-aos="fade-up"
    data-aos-duration="1500"
    data-aos-delay="300"
    data-scroll-anchor="jsScrollAnchor1"
>
    <div
        class="
            Js_training-questions
            holder
            flex flex--column flex--align-center
            width--full
        "
    >
        <div class="jsPagignation flex"></div>
        <div class="question flex"></div>
        <div class="answers flex"></div>
        <button
            id="task-14-btn"
            class="
                btn btn--yellow
                inline-flex
                flex--center flex--align-self-center
                Js_training-questions-check
            "
        >
            Check
        </button>

        <div
            class="
                activity--feedback activity--feedback-fail
                jsQuestionAnswerFail
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
                ></div>
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
                        jsQuestionAnswerFail-btn
                    "
                    >Try again</a
                >
            </div>
        </div>

        <div
            class="
                activity--feedback activity--feedback-fail
                jsSelectOption
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

                    <p>You must select an option.</p>
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
                        jsSelectOption-btn
                    "
                    >Sure</a
                >
            </div>
        </div>

        <div
            class="
                activity--feedback activity--feedback-success
                jsQuestionAnswerSuccess
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
                ></div>
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
                <!-- Hassan, program this button to show the next activity section -->
                <a
                    class="
                        btn btn--white
                        inline-flex
                        flex--center
                        animate__animated
                        animate__zoomIn
                        animate__delay-1s
                        animate__faster
                        jsQuestionAnswerSuccess-btn
                    "
                    >Continue</a
                >
            </div>
        </div>
    </div>
</section>
