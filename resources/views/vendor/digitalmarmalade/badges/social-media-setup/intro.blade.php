@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="introduction"
@endsection

@section('page')
        <main>
            <section class="section-1">
                <div class="section-title">
                    <p>Introduction</p>
                </div>
                <div class="holder">
                  <p>What are you looking to achieve with your social media profile? Learn about each of the Social Networks by selecting their icons below.</p>
                </div>
                  <ul>
                      <li data-aos="fade-in" data-aos-delay="100"><a href="facebook" title="Go to Facebook"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-facebook.svg" alt="Go to Facebook"/></a></li>
                      <li data-aos="fade-in" data-aos-delay="200"><a href="instagram" title="Go to Instagram"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-instagram.svg" alt="Go to Instagram"/></a></li>
                      <li data-aos="fade-in" data-aos-delay="300"><a href="linkedin" title="Go to LinkedIn"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-linkedin.svg" alt="Go to Linkedin"/></a></li>
                      <li data-aos="fade-in" data-aos-delay="400"><a href="twitter" title="Go to Twitter"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-twitter.svg" alt="Go to Twitter"/></a></li>
                      <li data-aos="fade-in" data-aos-delay="500"><a href="youtube" title="Go to YouTube"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-youtube.svg" alt="Go to YouTube"/></a></li>
                      <li data-aos="fade-in" data-aos-delay="600"><a href="snapchat" title="Go to Snapchat"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-snapchat.svg" alt="Go to Snapchat"/></a></li>
                  </ul>

            </section>
            <section class="section-2">

                <div class="holder">
                  <p>When you are ready, take the quiz to win your iDEA points. You can also download and print snappy <b>How to Guides</b> to help you set up your profile in each of them.</p>
                  <ul>
                    <li data-aos="fade-in" data-aos-delay="100"><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/>Take Quiz</a></li>
                  </ul>
                </div>
            </section>
        </main>

            @endsection
            @section('javascript')
            <!-- <script>
                oBadges.setSlugAndStep('{{$url['slug']}}', 1);
            </script> -->
              <!-- <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script> -->
            @endsection
