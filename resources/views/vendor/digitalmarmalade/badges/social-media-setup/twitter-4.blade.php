@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')


<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-twitter.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
        <main>
          <section class="last-section only-section">
            <div class="section-title">
                <p>Twitter</p>
            </div>
            <div class="holder">
              <p>Select below <b>the only way</b> you cannot find people on Twitter:</p>
              <ul class="task">
                <li data-aos="fade-in" data-aos-delay="100">
                  <a class="btn btn-primary" href="#"><span>Searching by the person’s name</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="200">
                  <a class="btn btn-primary" href="#" data-value="true"><span>Searching by the person’s phone number</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="300">
                  <a class="btn btn-primary" href="#"><span>By uploading contacts from you phone or other accounts</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="400">
                  <a class="btn btn-primary" href="#"><span>By using the &ldquo;Who To Follow&rdquo; feature</span></a>
                </li>

              </ul>
                <a class="btn btn-primary btn-check-answer" href="#"><span>Check your answer</span></a>
            </div>
          </section>
          <section class="section-1 feedback feedback-success last-section">
            <div class="holder">
              <img data-aos="slide-up" src="/badge-assets/{{$url['slug']}}/_global/img/icon-success.svg" alt="#"/>
              <h2>Correct!</h2>
              <a class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
            </div>
          </section>
          <section class="section-3 feedback feedback-fail last-section">
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
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step-15.js"></script>
    @endsection
