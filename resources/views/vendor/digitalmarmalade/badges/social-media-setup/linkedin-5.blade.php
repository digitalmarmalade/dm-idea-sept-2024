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
    <section class="last-section only-section">
        <div class="section-title">
            <p>LinkedIn</p>
        </div>
        <div class="holder">
            <p>Select below <b>all the images that are not accepted </b> as a LinkedIn profile photo:</p>
            <ul class="task task-profile task-profile-linkedin">
                <li data-aos="fade-in" data-aos-delay="100">
                    <a href="#" data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-profile-task-1.png" alt="" /></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="200">
                    <a href="#" data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-profile-task-2.png" alt="" /></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="300">
                    <a href="#" ><img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-profile-task-3.png" alt="" /></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="400">
                    <a href="#"><img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-profile-task-4.png" alt="" /></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="500">
                    <a href="#"  data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-profile-task-5.png" alt="" /></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="600">
                    <a href="#"  data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-profile-task-6.png" alt="" /></a>
                </li>

            </ul>
            <a class="btn btn-primary btn-check-answers" href="#"><span>Check your answers</span></a>
        </div>
    </section>
    <section class="section-1 feedback feedback-success">
        <div class="holder">
            <img data-aos="slide-up" src="/badge-assets/{{$url['slug']}}/_global/img/icon-success.svg" alt="#"/>
            <h2>Correct!</h2>
            <p>LinkedIn does not allow company logos, words or phrases, animals or landscape pictures as a profile image.</p>
            <a class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>
    </section>
    <section class="section-3 feedback feedback-fail">
        <div class="holder">
            <img data-aos="slide-down" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/icon-fail.svg" alt="#"/>
            <h2>That's not quite right...</h2>
            <a class="btn btn-primary btn-feedback btn-try-again" href="#"><span>Try Again</span></a>
        </div>
    </section>

</main>


@endsection


@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-34.js"></script>
@endsection
