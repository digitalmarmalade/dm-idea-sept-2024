@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
@endsection @section('page')

<main>
    <section class="bg--empty-office">
        @include('vendor.digitalmarmalade.badges.computer-vision.header',
        ['title' => 'Header'])
        @include('vendor.digitalmarmalade.badges.computer-vision.steps',
        ['title' => 'Steps'])

        <div class="holder flex flex--justify-center">
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
                        yellow
                        tip--bottom
                        center
                        animate__animated
                        animate__fadeInDown
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
                                animate__delay-2s
                                animate__faster
                                step-1-intro-text-next
                            "
                            >Continue</a
                        >
                    </div>
                </div>
                <img
                    class="animation--alert"
                    src="/badge-assets/computer-vision/_global/svg/animations/animation--alert.svg"
                    alt=""
                />
            </div>

            <div
                class="
                    speech-bubble__holder
                    hide-on-mobile
                    flex flex--align-start
                "
            >
                <img
                    class="animation--alert"
                    src="/badge-assets/computer-vision/_global/svg/animations/animation--alert.svg"
                    alt=""
                />

                <div
                    class="
                        speech-bubble
                        yellow
                        tip--left
                        animate__animated
                        animate__fadeInRight
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
                                step-1-intro-text-next
                            "
                            >Continue</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hassan The content below is  hidden until user clicks on the last continue of the speech bubble above -->
    <section class="hide jsScrollAnchor1">
        <div class="holder">
            <h1
                class="section__title"
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="100"
            >
                What is Computer Vision?
            </h1>

            <div
                class="cols flex flex--column flex--justify-space-between"
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="200"
            >
                <div class="col">
                    <p>
                        Computer vision, often abbreviated as CV, is a field of
                        study that tries to teach computers how to “see” and
                        interpret the world around them.
                    </p>
                    <p>
                        By using AI in computer vision, we can train computers to assess
                        visual data such as photos, images, and videos, enabling
                        us humans to gather and process huge amounts of
                        information, much more quickly than we could do on our
                        own.
                    </p>
                </div>
                <div class="col">
                    <p>
                        Computer vision has infinite applications across many different
                        industries, from retail to banking, automotive to
                        entertainment, and agriculture to healthcare, just to
                        name a few.
                    </p>
                    <p>
                        Computer vision technology powers innovation including Touch ID on
                        iPhones, Facebook auto-tagging, image search engines,
                        Instagram filters, QR codes, bar codes, autonomous
                        vehicles, medical imaging and speed cameras.
                    </p>
                </div>
            </div>
        </div>
        @include('vendor.digitalmarmalade.badges.computer-vision.task_1')
    </section>

    <section class="jsScrollAnchor1"></section>
</main>
@endsection @section('javascript')
<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/task_1.js"></script>

<script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/text-box/step_1_intro.js"></script>

<script>
    $(document).ready(function () {
        var triggerMode = "hover";

        if ($("body").hasClass("touch")) {
            triggerMode = "click";
        }
    });
</script>

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>

@endsection
