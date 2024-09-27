@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-facebook.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

<main>
    <section class="only-section">
        <div class="section-title">
            <p>Facebook</p>
        </div>
        <div class="holder">
            <p>Select below <b>the most appropriate </b> Facebook profile picture:</p>
            <ul class="task-profile task-profile-facebook">
                <li data-aos="fade-in" data-aos-delay="100">
                    <a href="#" data-value="1"><img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-profile-1.png" alt="" /></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="200">
                    <a href="#" data-value="2"><img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-profile-2.png" alt="" /></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="300">
                    <a href="#" data-value="3"><img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-profile-3.png" alt="" /></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="400">
                    <a href="#" data-value="4"><img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-profile-4.png" alt="" /></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="500">
                    <a href="#" data-value="5"><img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-profile-5.png" alt="" /></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="600">
                    <a href="#" data-value="5"><img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-profile-6.png" alt="" /></a>
                </li>

            </ul>
        </div>
    </section>
    <section class="section-1 feedback feedback-success">
        <div class="holder">
            <img data-aos="slide-up" src="/badge-assets/{{$url['slug']}}/_global/img/icon-success.svg" alt="#"/>
            <h2>Correct!</h2> <!-- data value=2 -->
            <a class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>
    </section>
    <section class="section-3 feedback feedback-fail">
        <div class="holder">
            <img data-aos="slide-down" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/icon-fail.svg" alt="#"/>
            <h2>That's not quite right...</h2>
            <p class="feedback feedback-1 feedback-6">By hiding your face, it is more difficult for prospective friends to find your profile.</p> <!-- data value=1 --> <!-- data value=6 -->
            <p class="feedback feedback-5">Don't use inanimate objects instead of your face or you will make more difficult for prospective friends to find your profile.</p> <!-- data value=5 -->
            <p class="feedback feedback-4">Don't upload a picture where you are with another person.</p> <!-- data value=4 -->
            <p class="feedback feedback-3">If you use your pet's picture you will make more difficult for prospective friends to find your profile.</p> <!-- data value=3 -->

            <a class="btn btn-primary btn-feedback btn-try-again" href="#"><span>Try Again</span></a>
        </div>
    </section>

</main>


@endsection


@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-9.js"></script>
@endsection
