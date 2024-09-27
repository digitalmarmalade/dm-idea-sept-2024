@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-facebook.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

        <main>
          <section class="section-1">
            <div class="section-title">
                <p>Facebook</p>
            </div>
            <div class="holder">
              <h1>Your Homepage</h1>
              <p>Your home page is what you see when you log into Facebook. It includes your News Feed, the constantly updating list of posts from friends, Groups and other connections you've made. You can react to things you see or search for people and topics that matter to you.</p>
              <div class="anatomy-wrapper">
                  <div class="image-wrapper image-wrapper-facebook-homepage">
                      <ul class="figures hide-desktop">
                          <li data-aos="fade-in" data-aos-delay="100">1</li>
                          <li data-aos="fade-in" data-aos-delay="200">2</li>
                          <li data-aos="fade-in" data-aos-delay="300">3</li>
                          <li data-aos="fade-in" data-aos-delay="400">4</li>
                      </ul>
                      <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-2.png" alt="Facebook - Your Homepage screen"/></a>
                  </div>
                  <div class="description-wrapper description-wrapper-facebook-homepage">
                      <ul>
                          <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>News Feed</li>
                          <li data-aos="fade-left" data-aos-delay="200"><p><span class="figure">2</span>Find Friends</li>
                          <li data-aos="fade-right" data-aos-delay="300"><p><span class="figure">3</span>Add Friends</li>
                          <li data-aos="fade-left" data-aos-delay="400"><p><span class="figure">4</span>Groups</li>
                      </ul>
                  </div>
                  <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-2.png" alt="Facebook - Your Homepage screen"/></a>
              </div>

            </div>
          </section>

          <section class="section-2 last-section">
            <div class="holder">
              <h2>Adding friends to Facebook</h2>
              <div class="cols">
                <div class="col">
                  <h3>Add a friend</h3>
                  <ol>
                      <li data-aos="fade-in" data-aos-delay="100"><p>Tap  and enter your friend's name, email or mobile phone number.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>Select their name, or tap &ldquo;See more results&rdquo; if you don't see your friend.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>To send someone a friend request, click on the &ldquo;Add Friend&rdquo; button next to their name. Some people might not have the button &ldquo;Add Friend&rdquo; next to their name, depending on their privacy settings.</p></li>
                  </ol>
                  <h3>Upload your existing contacts</h3>
                  <p>Many people think it is useful to upload their contacts into Facebook. If you want to do this, Facebook make it very easy to do so. All you have to do is upload them from your mobile phone or email account, for example. However, don’t feel pressurised to upload your contacts if you don’t want to. If you choose to do so, you can add friends who already have a Facebook account, or invite people who don't have an account to create one.</p>
                </div>
                <div class="col">
                  <h3>Using the  People You May Know feature</h3>
                  <p>To add someone as a friend from &ldquo;People You May Know&rdquo;, you can send them a friend request. &ldquo;People You May Know&rdquo; suggestions come from things like:</p>
                  <ul class="boxes boxes-full-width">
                      <li data-aos="fade-in" data-aos-delay="100"><p>Having friends in common, or mutual friends</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>Being in the same Facebook group or being tagged in the same photo</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>Your networks (For example: your school, university  or work)</p></li>
                      <li data-aos="fade-in" data-aos-delay="400"><p>Contacts you've uploaded</p></li>
                  </ul>
                </div>
              </div>
              <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
            </div>

          </section>

        </main>


    @endsection

    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    @endsection
