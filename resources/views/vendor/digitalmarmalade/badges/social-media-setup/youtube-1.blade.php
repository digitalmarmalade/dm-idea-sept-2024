@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-youtube.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

<main>
    <section class="section-1 last-section only-section">
        <div class="section-title">
            <p>YouTube</p>
        </div>
        <div class="holder">
            <h1>Create An Account</h1>
            <p>To create a YouTube account go to:</p>
            <a data-aos="fade-in" class="btn btn-primary btn-lowercase" href="https://www.youtube.com/" target="_blank"><span>youtube.com</span></a>
            <p>You'll be prompted to set up a Google Account. If you leave any fields empty or if you choose a username that’s taken already, the page will refresh with red warning notes identifying the fields that need to be corrected before you can register.</p>
            <div class="anatomy-wrapper">
                <div class="image-wrapper image-wrapper-youtube-account">
                    <ul class="figures hide-desktop">
                        <li data-aos="fade-in" data-aos-delay="100">1</li>
                        <li data-aos="fade-in" data-aos-delay="200">2</li>
                        <li data-aos="fade-in" data-aos-delay="300">3</li>
                        <li data-aos="fade-in" data-aos-delay="400">4</li>
                        <li data-aos="fade-in" data-aos-delay="500">5</li>
                        <li data-aos="fade-in" data-aos-delay="600">6</li>
                        <li data-aos="fade-in" data-aos-delay="700">7</li>
                    </ul>
                    <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/youtube/youtube-1.png" alt="youtube - Create An Account screen"/></a>
                </div>

                <div class="description-wrapper description-wrapper-youtube-account">
                    <ul>
                        <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>An email address</li>
                        <li data-aos="fade-right" data-aos-delay="200"><p><span class="figure">2</span>Your date of birth</li>
                        <li data-aos="fade-right" data-aos-delay="300"><p><span class="figure">3</span>Your mobile number</li>
                        <li data-aos="fade-left" data-aos-delay="400"><p><span class="figure">4</span>Your name</li>
                        <li data-aos="fade-left" data-aos-delay="500"><p><span class="figure">5</span>A password</li>
                        <li data-aos="fade-left" data-aos-delay="600"><p><span class="figure">6</span>Your gender</li>
                        <li data-aos="fade-left" data-aos-delay="700"><p><span class="figure">7</span>Your location</li>

                    </ul>
                </div>

                <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/youtube/youtube-1.png" alt="youtube - Create An Account screen"/></a>
            </div>

              <p>Once a Google Account is created, to access YouTube you simply sign in with your Google Account email and password.</p>


            <img data-aos="fade-up" class="border" src="/badge-assets/{{$url['slug']}}/_global/img/youtube/youtube-2.png" alt="youtube - Create An Account screen - Google Sign In" style="margin-top: 10px;"/></a>

            <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>

    </section>

</main>


@endsection


@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>
@endsection
