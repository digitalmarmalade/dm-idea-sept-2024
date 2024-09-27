@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="step-5">
            <div class="top">
                <div class="step">
                    <p>Step 5 of 7<span>Design</span></p>
                </div>
                <h1>Design</h1>
                <div class="holder">
                    <div class="cols">

                        <div class="col">
                            <p>Now it’s time to put your content together into a nice-looking website.</p>
                            <p>If you are going to use a website building company or CMS platform you will get access to a good selection of design templates to choose from.</p>
                        </div>
                        <div class="col">
                            <p>Whether you are using a template or you are designing and/or coding the website or blog yourself, it’s been shown that it takes someone less than 3 seconds to decide whether to stay or leave once they hit your website, so it is imperative that you make a good first impression.</p>
                        </div>
                    </div>


                    <h2>Top tips to ensure your website will keep people engaged:</h2>
                    <ul class="tips">
                        <li>
                            <span class="figure"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-navigation.svg" alt="" /></span>
                            <p><span>Have clear navigation</span>You want people who visit your site to instantly know what your business is about and where to go to learn about your products or services, find out pricing and have a point of contact. If your site is not clear, people will get frustrated and exit out.</p>
                        </li>
                        <li>
                            <span class="figure"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-cta.svg" alt="" /></span>
                            <p><span>Use call to action buttons</span>Implementing buttons with clear actions will immediately attract the user’s eye. This helps you to lead the person to take your desired action.</p>
                        </li>
                        <li>
                            <span class="figure"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-loading.svg" alt="" /></span>
                            <p><span>Make sure your site is loading quickly</span>People are impatient, and if your site takes even a fraction of a second too long to load, people will give up and look elsewhere. Make sure your web host provider has fast load times.</p>
                        </li>
                        <li>
                            <span class="figure"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-minimal.svg" alt="" /></span>
                            <p><span>Keep it minimal</span>Don’t overdo it with the design and definitely don’t feel like you need to cover every square inch with information or a design. White space is your friend. By keeping the look minimal, you can focus attention on the things that you want people to really pay attention to.</p>
                        </li>
                        <li>
                            <span class="figure"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-branding.svg" alt="" /></span>
                            <p><span>Keep the same look and feel throughout</span>Use a clever and well thought out logo and an appropriate colour palette that reflects your brand and translates visually your services or business to your customers.</p>
                        </li>
                    </ul>
                    <div class="quiz-6">
                        <p>Take a look at the layouts below. Which one has the best design to convey the needs of your business?</p>
                        <ul>
                            <li>
                                <a href="#" data-value="1">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/design-2.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" data-value="2">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/design-3.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" data-value="3">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/design-1.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="#" data-value="4">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/design-4.svg" alt="" />
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

        </main>
        <div class="feedback hide feedback-step-5">
            <img src="" alt="" />
            <p></p>
            <a class="btn btn-white" href="#"></a>
        </div>

        @endsection


        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 9);
        </script>

          <script src="/badge-assets/{{$url['slug']}}/_global/js/step-5.js"></script>
        @endsection
