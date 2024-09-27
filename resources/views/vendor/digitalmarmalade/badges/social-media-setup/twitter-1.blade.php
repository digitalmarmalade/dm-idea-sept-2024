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
              <h1>Create An Account</h1>
              <p>To create a Twitter account go to:</p>
              <a data-aos="fade-in" class="btn btn-primary btn-lowercase" href="https://twitter.com/" target="_blank"><span>twitter.com</span></a>
              <div class="anatomy-wrapper">
                  <div class="image-wrapper image-wrapper-twitter-account">
                      <ul class="figures hide-desktop">
                          <li data-aos="fade-in" data-aos-delay="100">1</li>
                          <li data-aos="fade-in" data-aos-delay="200">2</li>
                          <li data-aos="fade-in" data-aos-delay="300">3</li>
                      </ul>
                      <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/twitter-1.png" alt="Twitter - Create An Account screen"/></a>
                  </div>
                  <div class="description-wrapper description-wrapper-twitter-account">
                      <ul>
                          <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>The name you go by in everyday life</li>
                          <li data-aos="fade-left" data-aos-delay="200"><p><span class="figure">2</span>Your email address or mobile number</li>
                          <li data-aos="fade-right" data-aos-delay="300"><p><span class="figure">3</span>A password</li>
                      </ul>
                  </div>
                  <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/twitter-1.png" alt="Twitter - Create An Account screen"/></a>
              </div>

              <div class="cols">
                <div class="col">
                  <p>Once you've clicked &ldquo;Sign up&rdquo;, you can select a <b>username</b> (usernames are unique identifiers on Twitter) — type your own or choose one Twitter suggests. Twitter will tell you if the username you want is available.</p>
                </div>
                <div class="col">
                  <p>Double-check your name, phone number  or email address, password, and username and click &ldquo;Create My Account&rdquo;. You may be asked to complete a Captcha to let Twitter know that you're human.</p>
                </div>
              </div>
              <h3>Picking a username</h3>
              <div class="cols">

                <div class="col">
                  <p>Your username is the name your followers use when sending replies, mentions, and Direct Messages. It will also form the URL of your Twitter profile page.</p>
                  <p>Twitter will provide a few available suggestions when you sign up, but you can choose your own.</p>
                </div>
                <div class="col">
                  <p>You can change your username in your account settings at any time, as long as the new username is not already in use.</p>
                  <p>Usernames must be fewer than 15 characters in length and cannot contain  &ldquo;admin&rdquo; or  &ldquo;Twitter&rdquo;, in order to avoid brand confusion.</p>
                </div>
              </div>


            </div>
          </section>


          <section class="section-2 last-section">
            <div class="holder">
              <h3>Tips about signing up</h3>
              <ul class="boxes boxes-grid">
                <li data-aos="fade-up" data-aos-delay="100"><p>An email address can only be associated with one Twitter account at a time.</p></li>
                <li data-aos="fade-up" data-aos-delay="300"><p>In order to verify your phone number, Twitter will send you an SMS text message with a code. You may also request a voice call to verify your phone number. Enter the verification code in the box provided. </p></li>
              </ul>
              <ul class="boxes boxes-grid">
                <li data-aos="fade-up" data-aos-delay="200"><p>Twitter use the email address you enter to confirm your new Twitter account. Be sure to enter an email address that you actively use and have access to. Check your inbox for a confirmation email to make sure you signed up for your account correctly.</p></li>
                <li data-aos="fade-up" data-aos-delay="400"><p>The email address you use on your Twitter account is not publicly visible to others on Twitter.</p></li>
              </ul>
                <a data-aos="fade-in" data-aos-delay="500" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
            </div>
          </section>

        </main>


    @endsection

    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    @endsection
