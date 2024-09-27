<section
    class="
        activity
        task-8
        flex flex--align-start flex--justify-center
        bg-grad--purple-dark
        hide
    "
>
    <div class="holder flex flex--align-center flex--column">
        <div
            class="
                speech-bubble__holder
                flex flex--center flex--column
                hide-on-desktop
            "
        >
            <div
                class="
                    speech-bubble
                    blue
                    tip--bottom
                    center
                    animate__animated
                    animate__fadeInDown
                    animate__delay-1s
                    animate__fast
                    flex flex--column flex--align-end
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
                    Look carefully at the image of the crime scene. Select the
                    object(s) that look out of place or could be suspicious.
                </p>
            </div>
            <img
                src="/badge-assets/computer-vision/_global/svg/icons/icon--instruction.svg"
                alt=""
                class="fade"
            />
        </div>
        <div
            class="speech-bubble__holder hide-on-mobile flex flex--align-center"
        >
            <img
                src="/badge-assets/computer-vision/_global/svg/icons/icon--instruction.svg"
                alt=""
                class="fade"
            />
            <div
                class="
                    speech-bubble
                    blue
                    tip--left
                    animate__animated
                    animate__fadeInRight
                    animate__delay-1s
                    animate__fast
                    flex flex--column flex--align-end
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
                    Look carefully at the image of the crime scene.<strong> Select the object(s) that look out of place or could be suspicious</strong>.
                </p>
            </div>
        </div>
        <div class="image_container Js_select-object-image">
            <div class="selection-items__holder">
                <div id="helmet" class="item"></div>
                <div id="image-frame" class="item"></div>
                <div id="screen" class="item"></div>
                <div id="keyboard" class="item"></div>
                <div id="cup" class="item"></div>
                <div id="pen-holder" class="item"></div>
                <div id="lamp" class="item"></div>
            </div>
            <img
                src="/badge-assets/computer-vision/_global/imgs/sharpen-brighten.png"
                alt=""
                alt="select_object_image "
                class="border crime-scene"
            />
            <span
                class="
                    caption
                    text-align--center
                    flex
                    width--full
                    flex--justify-center
                "
                >Crime scene</span
            >
        </div>

        <div
            class="
                activity--feedback activity--feedback-fail
                flex
                jsSelectObjectFeedbackFail
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
                        What can you find in the photo that will help us
                        identify the secret agent?
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
                        jsSelectObjectReset
                    "
                    >Try a different object</a
                >
            </div>
        </div>
        <div
            class="
                activity--feedback activity--feedback-success
                jsSelectObjectFeedbackSuccess
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

                    <p>
                        You have successfully identified the evidence from the
                        crime scene!
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
                <a
                    onclick="oBadges.stepCompleted();"
                    href="{{ $links['next'] }}"
                    class="
                        btn btn--white
                        inline-flex
                        flex--center
                        animate__animated
                        animate__zoomIn
                        animate__delay-1s
                        animate__faster
                    "
                    >Continue</a
                >
            </div>
        </div>
    </div>
</section>
