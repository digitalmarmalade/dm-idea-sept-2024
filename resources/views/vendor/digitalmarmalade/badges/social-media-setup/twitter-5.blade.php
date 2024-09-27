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
          <section class="section-1">
            <div class="section-title">
                <p>Twitter</p>
            </div>
            <div class="holder">
              <h1>Your Profile</h1>
                <p>Your Twitter bio is very minimal in comparison to networks like Facebook and LinkedIn. You can customise your profile by selecting unique <b>profile and header images</b>, adding a <b>name</b>, <b>bio</b>, <b>location</b> and <b>website</b>.</p>

              <div class="anatomy-wrapper">
                  <div class="image-wrapper image-wrapper-twitter-profile">
                      <ul class="figures hide-desktop">
                          <li data-aos="fade-in" data-aos-delay="100">1</li>
                          <li data-aos="fade-in" data-aos-delay="200">2</li>
                          <li data-aos="fade-in" data-aos-delay="300">3</li>
                          <li data-aos="fade-in" data-aos-delay="400">4</li>
                          <li data-aos="fade-in" data-aos-delay="400">5</li>
                      </ul>
                      <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/twitter-3.png" alt="Twitter - Your Profile"/>
                  </div>
                  <div class="description-wrapper description-wrapper-twitter-profile">
                      <ul>
                          <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>Your profile picture</li>
                          <li data-aos="fade-right" data-aos-delay="200"><p><span class="figure">2</span>Your website</li>
                          <li data-aos="fade-left" data-aos-delay="300"><p><span class="figure">3</span>Your cover photo</li>
                          <li data-aos="fade-left" data-aos-delay="400"><p><span class="figure">4</span>Your short bio</li>
                          <li data-aos="fade-left" data-aos-delay="500"><p><span class="figure">5</span>Your location</li>
                      </ul>
                    </div>
                    <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/twitter-3.png" alt="Twitter - Your Profile"/>
              </div>
            </div>
          </section>

          <section class="profile">
            <div class="holder">
              <h2>Your profile picture</h2>
              <img data-aos="fade-in" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/twitter-profile-photo.png" alt="Twitter Profile Picture recommended uploaded size is 400 pixels by 400 pixels"/>
              <div class="cols">
                <div class="col">
                  <p>Your Twitter profile photo is the circular image that appears on the top-left side your profile. Your photo should be clear and recognisable whether small or large, since the same photo you choose for your profile image will be used within other people’s streams, and in Twitter’s <b>Who to Follow</b> section on the right side of your feed. </p>


                </div>
                <div class="col">
                  <p>The recommended dimensions for your profile picture are 400x400 pixels. Photos can be in any of the following formats: JPG, GIF, or PNG. (Twitter does not support animated GIFs for profile or header images). To change your profile photo click or tap the camera icon and select &ldquo;Upload photo&rdquo; or &ldquo;Remove&rdquo;.</p>

                </div>
              </div>
            </div>
          </section>

          <section class="cover section-4">
            <div class="holder">
              <h2>Your header photo</h2>
              <img data-aos="fade-in" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/twitter-header-photo.png" alt="Twitter Profile Header Photo recommended uploaded size is 1500 pixels by 500 pixels"/>
              <div class="cols">
                <div class="col">
                  <p>Just like on Facebook, your Twitter header image is the much larger, rectangular photo that appears behind your profile photo and across the top of your profile page. To change your header photo click or tap the camera icon and select &ldquo;Upload photo&rdquo; or &ldquo;Remove&rdquo;.</p>
                </div>
                <div class="col">
                  <p>This large photo is a great asset. It’s the first thing most people will notice when they visit your profile, and should therefore serve the purpose of piquing their interest immediately.</p>
                </div>
              </div>
            </section>
            <section>
              <div class="holder">
                <h2>Your bio</h2>
                <div class="cols">
                  <div class="col">
                    <p>In true Twitter fashion, your bio is limited to 160 characters, so you can’t go into much detail. Instead, focus on sharing insight into what you’ll be talking about on Twitter. This saves visitors the trouble of scrolling through your Tweets to see what they can expect from you. If you manage the Twitter account of a bank, you might want to state in your bio &ldquo;Tweets about personal finance, insurance and investing&rdquo;. No gimmicks, but a strong incentive for people to follow who are after that information.</p>
                    <p>The bio writing process will be a test of your editing skills. If you’re having trouble, ask yourself &ldquo;does this really need to be in here?&rdquo; and work to trim the fat. Take your time to get this right. And if you’re stuck, look to the accounts of other industry leaders for inspiration.</p>
                    <p>You don’t have to fill all 160 characters and you don’t have to feel bad talking about yourself. That’s sort of the idea of a bio. Use whatever style you feel best matches your brand or the image you want to portray. You can write anything you like providing it fits the space.</p>
                  </div>
                  <div class="col">
                    <p>It may take a few tries before you feel like you’ve nailed it. That’s okay. You’re allowed to change your Twitter description as often as you like. In fact, it’s probably a good idea to do so. With every change, hopefully you’ll get closer to perfection.</p>
                    <p>Make sure your bio is connected by using <b>hashtags</b>, <b>@s</b>, or <b>links</b>. For example:</p>
                    <ul class="boxes boxes-full-width">
                        <li data-aos="fade-in" data-aos-delay="100"><p><b>Hashtags:</b> If you are a &ldquo;CEO&rdquo; for example, you can add &ldquo;#CEO&rdquo; to connect your bio to mentions of #CEO on Twitter.</p></li>
                        <li data-aos="fade-in" data-aos-delay="200"><p><b>@s: </b> If you work at a company, have started business, or are otherwise connected to some other Twitter accounts, link to them.</p></li>
                        <li data-aos="fade-in" data-aos-delay="300"><p><b>Links: </b> You can add outbound links to your Twitter profile, too.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>

            <section class="cover section-2 last-section">
              <div class="holder">
                <h2>Seven signs of a great Twitter bio</h2>
                <ul class="twitter-bio">
                  <li data-aos="fade-in" data-aos-delay="100"><p><span>1</span><b>It's accurate</b>One profesional description.</p>
                  <li data-aos="fade-in" data-aos-delay="200"><p><span>2</span><b>It’s exciting</b>One word that is not boring.</p>
                  <li data-aos="fade-in" data-aos-delay="300"><p><span>3</span><b>It’s targeted</b>
                  One niche descriptor.</p>
                  <li data-aos="fade-in" data-aos-delay="400"><p><span>4</span><b>It’s flattering</b>One accomplishment.</p>
                  <li data-aos="fade-in" data-aos-delay="500"><p><span>5</span><b>It’s humanizing</b>One hobby.</p>
                  <li data-aos="fade-in" data-aos-delay="600"><p><span>6</span><b>It’s intriguing</b>One interesting fact or feature about yourself.</p>
                  <li data-aos="fade-in" data-aos-delay="700"><p><span>7</span><b>It’s connected</b>To your company or another social profile.</p>
                </ul>
                <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
            </div>
            </section>
        </main>


    @endsection

    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    @endsection
