@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
@endsection @section('page')

    <main>
        <section>
            @include('vendor.digitalmarmalade.badges.digital-ethics.header',
            ['title' => 'Header'])

            <ol class="step-counter flex gap--sm flex--align-center" data-aos="flip-up" data-aos-duration="1500"
                data-aos-delay="500">
                <li class="step completed">1</li>
                <li class="step active">2</li>
                <li class="step">3</li>
                <li class="step">4</li>
                <li class="step">5</li>
                <li class="step">6</li>
                <li class="step">7</li>
                <li class="step">8</li>
            </ol>
            <div class="container">
                <div class='box box--step-header bg--yellow flex flex--column' data-aos="fade-up"
                     data-aos-duration="1500" data-aos-delay="800">
                    <div class="flex flex--column gap box__copy">
                        <h1>The Ethical Impact of Digital Innovation</h1>
                        <p>The creation and use of digital products, tools and services can bring about many ethical
                            dilemmas that can potentially impact individuals, whole communities, and the world.</p>
                    </div>
                    <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--ethical-impact.svg"
                         alt=""/>
                </div>
                <div class="col flex flex--column gap--sm text-align--center" data-aos="fade-up"
                     data-aos-duration="1500" data-aos-delay="1000">
                    <p>While digital innovation offers many benefits, there are also pitfalls that we must be aware of
                        and try to avoid. As you learn about digital ethics and look at situations through an ethical
                        lens, you will realise that there is also a big grey area where there may not be a clear right
                        or wrong answer.</p>
                    <p>Next, you will explore six different examples of digital innovation.</p>
                    <p>Your task is to carefully consider the impact (both positive and negative) of each one, and how
                        it could affect individuals, society, or the world.</p>
                </div>
                <div id="continueToTask" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200"
                     data-aos-anchor-placement="bottom-bottom">
                    <a href="#" class="btn" onclick="continueToTask()">
    
                        Let&rsquo;s go!
                    </a>

                </div>
            </div>
        </section>

        <section id="sectionTask" class="hide task flex flex--column">
            <div class="container animate__animated animate__fadeInUp animate__slow">

                <div class="questions flex flex--column">
                    <ol class="flex flex--center gap--sm flex--align-self-start">
                        <li class="step dot-1 active">1</li>
                        <li class="step dot-2">2</li>
                        <li class="step dot-3">3</li>
                        <li class="step dot-4">4</li>
                        <li class="step dot-5">5</li>
                        <li class="step dot-6">6</li>
                    </ol>

                    @foreach($case as $i => $data)
                        <div id="case-study-panel-{{$i}}" class="hide case case-study-{{$i}}">
                            @if($i === 1)
                                @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-1')
                            @endif
                            @if($i === 2)
                                @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-2')
                            @endif
                            @if($i === 3)
                                @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-3')
                            @endif
                            @if($i === 4)
                                @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-4')
                            @endif
                            @if($i === 5)
                                @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-5')
                            @endif
                            @if($i === 6)
                                @include('vendor.digitalmarmalade.badges.digital-ethics.partials.header--case-study-6')
                            @endif

                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.case-study-activity-1', ['data' => $data['dataActivity1'], 'case' => $i])
                            @include('vendor.digitalmarmalade.badges.digital-ethics.partials.case-study-activity-2', ['data' => $data['dataActivity2'], 'case' => $i])
                        </div>
                    @endforeach

                </div>
            </div>
        </section>


    </main>

@endsection @section('javascript')

    <script src="/badge-assets/{{$url['slug']}}/_global/js/tasks/step2.js"></script>
    <script>
        $(document).ready(function () {
            var triggerMode = "hover";

            if ($("body").hasClass("touch")) {
                triggerMode = "click";
            }

            $(".jsTooltip").tooltipster({
                trigger: triggerMode,
                maxWidth: 350,
            });
        });
    </script>
    <script>
        oBadges.setSlugAndStep("{{$url['slug']}}", 2);
    </script>

@endsection
