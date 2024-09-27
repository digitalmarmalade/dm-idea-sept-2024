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
    <section class="section-task">
        <div class="section-title">
            <p>Twitter</p>
        </div>
        <div class="holder">
            <p>Thinking about Twitter, are the statements below true <b>or</b> false?</p>
            <ul class="task-true-false">
                <li>
                    <p>Your Twitter username is the name your followers use when sending replies, mentions, and Direct Messages.</p>
                    <span class="true-false-box">
                        <span data-value="1"><a href="#" >True</a></span> <!-- correct answer -->
                        <span data-value="2"><a href="#" >False</a></span>
                    </span>
                </li>
                <li>
                    <p>You can’t change your Twitter username.</p>
                    <span class="true-false-box">
                        <span data-value="3"><a href="#" >True</a></span>
                        <span data-value="4"><a href="#" >False</a></span><!-- correct answer -->
                    </span>
                </li>
                <li>
                    <p>Your Twitter username can have an unlimited number of characters.</p>
                    <span class="true-false-box">
                        <span
                        data-value="5"><a href="#" >True</a></span>
                        <span data-value="6"><a href="#" >False</a></span><!-- correct answer -->
                    </span>

                </li>
                <li>
                    <p>An email address can only be associated with one Twitter account at a time.</p>
                    <span class="true-false-box">
                        <span data-value="7"><a href="#" >True</a></span> <!-- correct answer -->
                        <span data-value="8"><a href="#" >False</a></span>
                    </span>

                </li>
            </ul>

            <a class="btn btn-primary btn-check-answers"><span>Check your answers</span></a>
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
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-13.js"></script>
@endsection
