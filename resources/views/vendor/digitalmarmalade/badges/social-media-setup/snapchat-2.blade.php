@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-snapchat.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

        <main>
          <section class="section-1 only-section last-section section-snapchat-taking-photos">
            <div class="section-title">
                <p>Snapchat</p>
            </div>
            <div class="holder">
              <h1>Taking photos or videos</h1>
              <div class="anatomy-wrapper">
                  <div class="image-wrapper image-wrapper-snapchat-taking-photos-1">
                      <ul class="figures hide-desktop">
                          <li data-aos="fade-in" data-aos-delay="100">1</li>
                          <li data-aos="fade-in" data-aos-delay="200">2</li>
                          <li data-aos="fade-in" data-aos-delay="300">3</li>
                      </ul>
                      <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/snapchat-2.png" alt="snapchat - Taking pictures or videos"/>
                  </div>
                  <img data-aos="fade-up" class="hide-mobile border snapchat-taking-photo" src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/snapchat-2.png" alt="snapchat - Taking photos or videos"/>
                  <div class="description-wrapper description-wrapper-snapchat description-wrapper-taking-photos-2">

                      <ul>
                          <li data-aos="fade-left" data-aos-delay="100"><p><span class="figure">1</span>When you open the app, it will default to the back-facing camera. To switch to the front-facing camera (‘selfie mode’) tap the camera icon in the top right.</li>
                          <li data-aos="fade-left" data-aos-delay="200"><p><span class="figure">2</span>Tapping on the big circle will take a picture. Holding down on the circle records a video (of max length 10 seconds).</li>
                          <li data-aos="fade-left" data-aos-delay="300"><p><span class="figure">3</span>In ‘selfie-mode’, swipe left or right to scroll through and add the lenses. There are lots, and they are constantly changing. Some react to movements in your eyebrows. Some change your voice when you record a video — which you can do by holding down on the big circular button.</li>
                      </ul>
                  </div>

              </div>
              <div class="anatomy-wrapper">
                  <div class="image-wrapper image-wrapper-snapchat-taking-photos-2">
                      <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/snapchat-6.png" alt="snapchat - Taking photos or videos"/>
                  </div>
                  <img data-aos="fade-up" class="hide-mobile border snapchat-taking-photo" src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/snapchat-6.png" alt="snapchat - Taking photos or videos"/>
                  <div class="description-wrapper description-wrapper-snapchat description-wrapper-snapchat-taking-photos-2" style="margin-top: -40px;">

                      <p class="plain-paragraph">Once you've taken the picture (or recorded the video), you will be able to:</p>
                      <ul>
                          <li data-aos="fade-left" data-aos-delay="100"><p>Add a caption to your image</li>
                          <li data-aos="fade-left" data-aos-delay="200"><p>Draw over the image</li>
                          <li data-aos="fade-left" data-aos-delay="300"><p>Add a geofilter</li>
                          <li data-aos="fade-left" data-aos-delay="100"><p>Make a sticker out of a specific area of your image</li>
                          <li data-aos="fade-left" data-aos-delay="200"><p>Add a backdrop</li>
                          <li data-aos="fade-left" data-aos-delay="300"><p>Add a link</li>
                      </ul>
                      <p class="plain-paragraph">Before you send your snap, you can choose how many seconds it appears for when the receiver opens it by tapping on the chronometer icon (you can select up to 10 seconds).</p>
                      <p class="plain-paragraph">Tap the blue arrow to send your snap to your Stories or to your friends.</p>
                  </div>

              </div>

              <a data-aos="fade-in" data-aos-delay="100" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
            </div>
          </section>

        </main>


    @endsection

@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
@endsection
