@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-linkedin.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
<main>
    <section class="section-1 only-section">
        <div class="section-title">
            <p>Linkedin</p>
        </div>
        <div class="holder">
            <h1>Create An Account</h1>
            <p>To create a linkedin account go to:</p>
            <a data-aos="fade-in" class="btn btn-primary btn-lowercase" href="https://www.linkedin.com/" target="_blank"><span>linkedin.com</span></a>
            <div class="anatomy-wrapper">
                <div class="image-wrapper image-wrapper-linkedin-account">
                    <ul class="figures hide-desktop">
                        <li data-aos="fade-in" data-aos-delay="100">1</li>
                        <li data-aos="fade-in" data-aos-delay="200">2</li>
                        <li data-aos="fade-in" data-aos-delay="300">3</li>
                    </ul>
                    <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-1.png" alt="linkedin - Create An Account screen"/></a>
                </div>
                <div class="description-wrapper description-wrapper-linkedin-account">
                    <ul>
                        <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>First name and last name <span class="note"><span>Note</span>You must use your real name when creating a profile. Company names and pseudonyms are not allowed.</span></li>
                        <li data-aos="fade-left" data-aos-delay="200"><p><span class="figure">2</span>Your email</li>
                        <li data-aos="fade-left" data-aos-delay="300"><p><span class="figure">3</span>A password</li>

                    </ul>
                </div>
                <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-1.png" alt="linkedin - Create An Account screen"/></a>
            </div>
            <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>
    </section>

</main>


@endsection


@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>
@endsection
