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
    <section class="last-section only-section">
        <div class="section-title">
            <p>Facebook</p>
        </div>
        <div class="holder">
            <p>Select below only examples of names that <b>shouldn’t</b> be used on Facebook:</p>
            <ul class="task">
                <li data-aos="fade-in" data-aos-delay="100">
                    <a class="btn btn-primary" href="#"><span>Paul Goodway</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="200">
                    <a class="btn btn-primary" href="#" data-value="true"><span>Doctor Ann Marie</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="300">
                    <a class="btn btn-primary" href="#" data-value="true" ><span>Eggs Shell</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="400">
                    <a class="btn btn-primary" href="#" data-value="true"><span>LOV3RBOY 4 U</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="500">
                    <a class="btn btn-primary" href="#" data-value="true"><span>Who Am I?!*</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="600">
                    <a class="btn btn-primary" href="#"><span>Mary Smith</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="700">
                    <a class="btn btn-primary" href="#" data-value="true"><span>Got Something To Say!</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="800">
                    <a class="btn btn-primary" href="#"><span>Claire Roberts</span></a>
                </li>
            </ul>
            <a class="btn btn-primary btn-check-answers" href="#"><span>Check your answers</span></a>
        </div>
    </section>
    <section class="section-1 feedback feedback-success">
        <div class="holder">
            <img data-aos="slide-up" src="/badge-assets/{{$url['slug']}}/_global/img/icon-success.svg" alt="#"/>
            <h2>Correct!</h2>
            <p>Your Facebook name should not contain any name titles, symbols, numbers or any sort of phrase.</p><p>It goes without saying that offensive or suggestive words of any kind <b>should not</b> be used. </p>
            <a class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>
    </section>
    <section class="section-3 feedback feedback-fail">
        <div class="holder">
            <img data-aos="slide-down" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/icon-fail.svg" alt="#"/>
            <h2>That's not quite right...</h2>
            <a class="btn btn-primary btn-try-again" href="#"><span>Try Again</span></a>
        </div>
    </section>

</main>


@endsection


@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-4.js"></script>
@endsection
