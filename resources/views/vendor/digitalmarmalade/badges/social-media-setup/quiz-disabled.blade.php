@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="introduction"
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
<main>
    <section class="section-1 section-quiz-incomplete">
        <div class="section-title">
        <p>Quiz</p>
        </div>

            <p><b>Note:</b> You need to answer at least one question for each Social Media Section before you can take the final quiz. Check the remaining sections to unlock the Final Quiz!</p>
        </div>
          <ul>
              <li data-aos="fade-in" data-aos-delay="100" class="@if($units['facebook']) complete @else incomplete @endif"><a href="facebook" title="Go to Facebook"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-facebook.svg" alt="Go to Facebook"/></a></li>
              <li data-aos="fade-in" data-aos-delay="200" class="@if($units['instagram']) complete @else incomplete @endif"><a href="instagram" title="Go to Instagram"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-instagram.svg" alt="Go to Instagram"/></a></li>
              <li data-aos="fade-in" data-aos-delay="300" class="@if($units['linkedIn']) complete @else incomplete @endif"><a href="linkedin" title="Go to LinkedIn"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-linkedin.svg" alt="Go toLinkedin"/></a></li>
              <li data-aos="fade-in" data-aos-delay="400" class="@if($units['twitter']) complete @else incomplete @endif"><a href="twitter" title="Go to Twitter"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-twitter.svg" alt="Go toTwitter"/></a></li>
              <li data-aos="fade-in" data-aos-delay="500" class="@if($units['youtube']) complete @else incomplete @endif"><a href="youtube" title="Go to YouTube"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-youtube.svg" alt="Go to YouTube"/></a></li>
              <li data-aos="fade-in" data-aos-delay="600" class="@if($units['snapchat']) complete @else incomplete @endif"><a href="snapchat" title="Go to Snapchat"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-snapchat.svg" alt="Go to Snapchat"/></a></li>
          </ul>

    </section>
    <!-- <section class="section-2">

        <div class="holder">

        </div>
    </section> -->


</main>


@endsection

@section('javascript')

@endsection
