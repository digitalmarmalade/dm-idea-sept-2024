@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-instagram.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
        <main class="features features-instagram">
          <section class="section-1 only-section">
            <div class="section-title">
              <p>Instagram</p>
            </div>
            <div class="holder">

              <div class="cols">
                <div class="col">
                  <p class="list-title list-title-phone"> From the app </p>
                  <ol>
                      <li data-aos="fade-in" data-aos-delay="100"><p>Download the <b>Instagram app</b> for iOS from the App Store, Android from Google Play Store or Windows Phone from the Windows Phone Store.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>Once the app is installed, tap  to open it.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>Tap &ldquo;Sign Up With Email or Phone Number&rdquo;, then enter your email address or phone number (which will require a confirmation code) and tap &ldquo;Next&rdquo;. You can also tap &ldquo;Log in with Facebook&rdquo; to sign up with your Facebook account. If you register with your email or phone number, create a username and password, fill out your profile info and then tap &ldquo;Done&rdquo;. If you register with Facebook, you'll be prompted to log into your Facebook account if you're currently logged out.</p></li>
                  </ol>

                </div>
                <div class="col">
                  <p class="list-title list-title-computer"> From a computer </p>
                  <ol>
                      <li data-aos="fade-in" data-aos-delay="100"><p>Go to:</p> <a data-aos="fade-in" class="btn btn-primary btn-lowercase" href="https://www.instagram.com/" target="_blank"><span>instagram.com</span></a></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>Enter your email address, create a username and password or click &ldquo;Log in with Facebook&rdquo; to sign up with your Facebook account.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>If you register with an email, click &ldquo;Sign up&rdquo;. If you register with Facebook, you'll be prompted to log into your Facebook account if you're currently logged out. If you sign up with email, make sure you enter your email address correctly and choose an email address that only you can access. If you log out and forget your password, you'll need to be able to access your email to get back into your Instagram account.</p></li>
                  </ol>
                </div>
              </div>
              <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>

            </div>

            </section><!--/holder-->
        </main>


    @endsection


    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
    @endsection
