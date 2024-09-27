@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-instagram.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
<main>
    <section class="last-section only-section">
        <div class="section-title">
            <p>Instagram</p>
        </div>
        <div class="holder">
            <p>To obtain the best quality for your uploaded images, <b>the ideal image width</b> should be:</p>
            <ul class="task task-instagram-2">
                <li data-aos="fade-in" data-aos-delay="100">
                    <a class="btn btn-primary" href="#"><span>180 pixels</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="200">
                    <a class="btn btn-primary" href="#"><span>250 pixels</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="300">
                    <a class="btn btn-primary" href="#" data-value="true" ><span>1080 pixels</span></a> <!-- correct answer -->
                </li>
                <li data-aos="fade-in" data-aos-delay="400">
                    <a class="btn btn-primary" href="#"><span>1360 pixels</span></a>
                </li>
            </ul>
            <a class="btn btn-primary btn-check-answers" href="#"><span>Check your answer</span></a>
        </div>
    </section>
    <section class="section-1 feedback feedback-success">
        <div class="holder">
            <img data-aos="slide-up" src="/badge-assets/{{$url['slug']}}/_global/img/icon-success.svg" alt="#"/>
            <h2>Correct!</h2>
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
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-26.js"></script>
@endsection
