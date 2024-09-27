@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')



<main>
    <section class="last-section only-section">
        <div class="section-title">
            <p>Instagram</p>
        </div>
        <div class="holder">
          <p>Select which of the following actions you can apply or add to an image or video before posting:</p>
            <ul class="task task-instagram-1">
                <li data-aos="fade-in" data-aos-delay="100">
                    <a class="btn btn-primary" href="#" data-value="true"><span>Effects or filters</span></a> <!-- correct answer -->
                </li>
                <li data-aos="fade-in" data-aos-delay="200">
                    <a class="btn btn-primary" href="#" data-value="true"><span>Your location</span></a> <!-- correct answer -->
                </li>
                <li data-aos="fade-in" data-aos-delay="300">
                    <a class="btn btn-primary" href="#"  ><span>Stamps</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="400">
                    <a class="btn btn-primary" href="#"><span>Stickers</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="500">
                    <a class="btn btn-primary" href="#" ><span>Text over the image</span></a>
                </li>
                <li data-aos="fade-in" data-aos-delay="500">
                    <a class="btn btn-primary" href="#" data-value="true"><span>A caption</span></a>
                </li><!-- correct answer -->

            </ul>
            <a class="btn btn-primary btn-check-answers" href="#"><span>Check your answers</span></a>
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
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-25.js"></script>
@endsection
