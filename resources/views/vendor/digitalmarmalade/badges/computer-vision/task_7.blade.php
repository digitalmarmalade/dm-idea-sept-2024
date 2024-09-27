<section
    class="
        activity
        task-7
        flex flex--align-stretch flex--justify-center
        bg-grad--purple-dark
        hide
    "
>
    <div
        class="
            holder
            flex flex--justify-center flex--align-center flex--column
            flex-grow--1
        "
    >
        <div
            class="
                speech-bubble__holder
                flex flex--center flex--column
                hide-on-desktop
                jsTwoFilter
            "
        >
            <div
                class="
                    speech-bubble
                    blue
                    tip--bottom
                    center
                    animate__animated
                    animate__fadeInUp
                    animate__delay-1s
                    animate__fast
                    flex flex--column flex--align-end
                "
            >
                <div class="flex flex--justify-end Js-not-remove">
                    <a
                        class="
                            btn btn--sm btn--blue
                            inline-flex
                            animate__animated
                            animate__zoomIn
                            animate__delay-3s
                            animate__faster
                            two-filter-text-next
                        "
                        >Continue</a
                    >
                </div>
            </div>
            <img
                src="/badge-assets/computer-vision/_global/svg/icons/icon--instruction.svg"
                alt=""
            />
        </div>
        <div
            class="
                speech-bubble__holder
                hide-on-mobile
                flex flex--align-center
                jsTwoFilter
            "
        >
            <img
                src="/badge-assets/computer-vision/_global/svg/icons/icon--instruction.svg"
                alt=""
            />

            <div
                class="
                    speech-bubble
                    blue
                    tip--left
                    animate__animated animate__fadeInRight animate__fast
                    flex flex--column flex--align-end
                "
            >
                <div class="flex flex--justify-end Js-not-remove">
                    <a
                        class="
                            btn btn--sm btn--blue
                            inline-flex
                            animate__animated
                            animate__zoomIn
                            animate__delay-3s
                            animate__faster
                            two-filter-text-next
                        "
                        >Continue</a
                    >
                </div>
            </div>
        </div>

        <div
            class="crime-scene__holder flex flex--center"
            id="crime-scene__holder"
        >
            <figure
                data-aos="fade-in"
                data-aos-duration="3000"
                data-aos-delay="500"
                id="input-img-1"
            >
                <img
                    src="/badge-assets/computer-vision/_global/imgs/default.png"
                    alt="Blurred and dark depcition of the mistery crime scene"
                    class="border"
                />
                <figcaption
                    class="text-transform--uppercase text-align--center"
                >
                    <strong>Input Image</strong>
                </figcaption>
            </figure>

            <figure
                data-aos="fade-in"
                data-aos-duration="1500"
                data-aos-delay="300"
                class="hide"
                id="filter-index"
            >
                <img
                    src="/badge-assets/computer-vision/_global/imgs/illustration--filters-index.png"
                    alt="Pixel matrix  depcition of the mistery crime scene"
                />
                <figcaption
                    class="text-transform--uppercase text-align--center"
                >
                    <strong>Matrix</strong>
                </figcaption>
            </figure>
        </div>
        <div class="hide" id="task-7-activity">
            <div
                class="
                    multiple-filter-selector__holder
                    flex flex--column flex--align-center
                "
            >
                <div class="JS_multiple-filter-selector container flex">
                    <div class="input flex flex--center">
                        <span class="caption">Kernel</span>
                    </div>
                    <div class="output flex flex-grow--1">
                        <div
                            class="
                                output-grid
                                flex flex--column flex--align-center
                            "
                        >
                            <button
                                class="
                                    js_multiple-filter-selector-check
                                    btn btn--yellow
                                    flex flex--center
                                    text-aling--center
                                "
                                disabled
                            >
                                Check calculations
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="
                activity--feedback activity--feedback-fail
                jsIncorrectCalculations
                hide
            "
        >
            <div class="holder">
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
                            These calculations don’t look right. Please try
                            again.
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
                            jsIncorrectCalculations-btn
                        "
                        >review calculations</a
                    >
                </div>
            </div>
        </div>

        <div
            class="
                activity--feedback activity--feedback-fail
                jsUnSelectFilter
                hide
            "
        >
            <div class="holder">
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

                        <p>You must select a filter</p>
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
                            jsUnSelectFilter-btn
                        "
                        >Thanks!</a
                    >
                </div>
            </div>
        </div>

        <div
            class="
                activity--feedback activity--feedback-fail
                jsDoCalculations
                hide
            "
        >
            <div class="holder">
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
                            You forgot to do calculations. Multiply pixel value
                            with a corresponding kernel value and then add them
                            together
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
                            jsDoCalculations-btn
                        "
                        >Sure!</a
                    >
                </div>
            </div>
        </div>

        <div
            class="
                activity--feedback activity--feedback-fail
                jsAlreadySelectedFilter
                hide
            "
        >
            <div class="holder">
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
                                >Your calculations are correct!</strong
                            >
                        </p>

                        <p>
                            It looks like you have already used this filter!
                            Please try a different one.
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
                            jsReSelectFilter-btn
                        "
                        >Select a different filter</a
                    >
                </div>
            </div>
        </div>

        <div class="crime-scene__holder hide" id="crime-scene__holder-2">
            <figure
                data-aos="fade-in"
                data-aos-duration="1500"
                data-aos-delay="300"
                id="input"
                class="hide"
            >
                <img
                    src="/badge-assets/computer-vision/_global/imgs/default.png"
                    alt="Blurred and dark depcition of the mistery crime scene"
                    class="border"
                />
                <figcaption
                    class="text-transform--uppercase text-align--center"
                >
                    <strong>Input Image</strong>
                </figcaption>
            </figure>

            <figure
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="300"
                id="brighten-blur"
                class="hide"
            >
                <img
                    src="/badge-assets/computer-vision/_global/imgs/brighten-blur.png"
                    alt="Depiction of the mistery crime scene"
                    class="border"
                />
                <figcaption
                    class="text-transform--uppercase text-align--center"
                >
                    <strong>Output Image</strong>
                </figcaption>
            </figure>

            <figure
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="300"
                id="sharpen-dark"
                class="hide"
            >
                <img
                    src="/badge-assets/computer-vision/_global/imgs/sharpen-dark.png"
                    alt="Depiction of the mistery crime scene"
                    class="border"
                />
                <figcaption
                    class="text-transform--uppercase text-align--center"
                >
                    <strong>Output Image</strong>
                </figcaption>
            </figure>

            <figure
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="300"
                id="emboss-dark-blur"
                class="hide"
            >
                <img
                    src="/badge-assets/computer-vision/_global/imgs/emboss-dark-blur.png"
                    alt="Depiction of the mistery crime scenee"
                    class="border"
                />
                <figcaption
                    class="text-transform--uppercase text-align--center"
                >
                    <strong>Output Image</strong>
                </figcaption>
            </figure>

            <figure
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="300"
                id="sharpen-dark-emboss"
                class="hide"
            >
                <img
                    src="/badge-assets/computer-vision/_global/imgs/sharpen-dark-emboss.png"
                    alt="Depiction of the mistery crime scenee"
                    class="border"
                />
                <figcaption
                    class="text-transform--uppercase text-align--center"
                >
                    <strong>Output Image</strong>
                </figcaption>
            </figure>

            <figure
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="300"
                id="sobel-dark-blur"
                class="hide"
            >
                <img
                    src="/badge-assets/computer-vision/_global/imgs/sobel-dark-blur.png"
                    alt="Depiction of the mistery crime scene"
                    class="border"
                />
                <figcaption
                    class="text-transform--uppercase text-align--center"
                >
                    <strong>Output Image</strong>
                </figcaption>
            </figure>

            <figure
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="300"
                id="sharpen-brighten"
                class="hide"
            >
                <img
                    src="/badge-assets/computer-vision/_global/imgs/sharpen-brighten.png"
                    alt="Depiction of the mistery crime scene"
                    class="border"
                />
                <figcaption
                    class="text-transform--uppercase text-align--center"
                >
                    <strong>Output Image</strong>
                </figcaption>
            </figure>

            <figure
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="300"
                id="sobel-dark"
                class="hide"
            >
                <img
                    src="/badge-assets/computer-vision/_global/imgs/sobel-dark.png"
                    alt="Depiction of the mistery crime scene"
                    class="border"
                />
                <figcaption
                    class="text-transform--uppercase text-align--center"
                >
                    <strong>Output Image</strong>
                </figcaption>
            </figure>
        </div>

        <div
            class="
                activity--feedback activity--feedback-fail
                jsIncorrectFilter
                hide
            "
        >
            <div class="holder">
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
                                >Your calculations are correct!</strong
                            >
                        </p>

                        <p>
                            Unfortunately, this filter has not made the contents
                            of the image more visible. Please try another
                            filter.
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
                            jsIncorrectFilter-btn
                        "
                        >Try a different filter</a
                    >
                </div>
            </div>
        </div>

        <div
            class="
                activity--feedback activity--feedback-success
                jsFeedbackSuccessFirst
                hide
            "
        >
            <div class="holder">
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
                            <strong class="title">Well done!</strong>
                        </p>

                        <p>
                            Now, determine the second effect that you want to
                            apply and repeat this process to see if you achieve
                            an output image with acceptable results.
                        </p>
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

                    <!-- Hassan, program this button to show the next round of filters (when they have to select the second correct filter ) -->
                    <a
                        class="
                            btn btn--white
                            inline-flex
                            flex--center
                            animate__animated
                            animate__zoomIn
                            animate__delay-1s
                            animate__faster
                            jsFeedbackSuccessFirst-btn
                        "
                        >Continue</a
                    >
                </div>
            </div>
        </div>

        <div
            class="
                activity--feedback activity--feedback-success
                jsFeedbackSuccessSecond
                hide
            "
        >
            <div class="holder">
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
                            <strong class="title">Great job! </strong>
                        </p>

                        <p>
                            You have applied the two correct filters to make the
                            crime scene in this image visible.
                        </p>
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
                    <!-- Hassan, program this button to show the next activity -->
                    <a
                        class="
                            btn btn--white
                            inline-flex
                            flex--center
                            animate__animated
                            animate__zoomIn
                            animate__delay-1s
                            animate__faster
                            jsFeedbackSuccessSecond-btn
                        "
                        >Continue</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>
