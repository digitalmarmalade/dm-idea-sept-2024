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
          <section class="section-1 last-section only-section">
            <div class="section-title">
                <p>Twitter</p>
            </div>
            <div class="holder">
              <h1>Finding People</h1>
              <ul class="boxes boxes-grid">
                <li data-aos="fade-up" data-aos-delay="100">
                  <p><b>By Name</b></p>
                  <p>Type the person's name or username into the search box at the top of your twitter.com Home timeline, or tap the Explore tab  through your Twitter for iOS or Android app to access the search box. Your results will be filtered by Top, Latest, People, Photos, Videos, News, and Broadcasts (Periscopes on iOS and Android). Click or tap People to view search results by username.</p></li>
                <li data-aos="fade-up" data-aos-delay="300">
                  <p><b>Phone address book</b></p>
                  <p>If you wish, you can find people you know on Twitter by uploading contacts from your device’s address book. Please note this is completely optional.</p></li>
              </ul>
              <ul class="boxes boxes-grid">
                <li data-aos="fade-up" data-aos-delay="200">
                  <p><b>Suggestions by email</b></p>
                  <p>Twitter will suggest accounts as &ldquo;follow suggestions&rdquo; via email notification. You can control when and how often Twitter sends you emails in your notifications settings.</p></li>
                <li data-aos="fade-up" data-aos-delay="400">
                  <p><b>Twitter's suggestions</b></p>
                  <p>Personalised account recommendations connect you with accounts Twitter thinks you'll want to follow. When you log in to twitter.com,  &ldquo;Who to follow&rdquo; suggestions will appear next to your Home timeline, the Notifications tab, profile and search results pages, as well as other places on Twitter. When you dismiss a suggestion (by clicking the X next to it) a new suggestion will automatically appear.</p></li>
              </ul>

              <div class="anatomy-wrapper">
                  <div class="image-wrapper image-wrapper-twitter-finding-people">
                      <ul class="figures hide-desktop">
                          <li data-aos="fade-in" data-aos-delay="100">1</li>
                          <li data-aos="fade-in" data-aos-delay="200">2</li>
                      </ul>
                      <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/twitter-2.png" alt="Twitter - Finding People"/></a>
                  </div>
                  <div class="description-wrapper description-wrapper-twitter-finding-people">
                      <ul>
                          <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>Search for people by name</li>
                          <li data-aos="fade-left" data-aos-delay="200"><p><span class="figure">2</span>Suggestions of who to follow</li>

                      </ul>
                  </div>
                  <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/twitter-2.png" alt="Twitter - Finding People"/></a>
                  <a data-aos="fade-in" data-aos-delay="500" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
              </div>

            </div>
          </section>

        </main>


    @endsection

    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    @endsection
