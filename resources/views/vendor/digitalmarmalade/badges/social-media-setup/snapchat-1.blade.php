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
          <section class="section-1">
            <div class="section-title">
                <p>Snapchat</p>
            </div>
            <div class="holder">
              <h1>Create an Account</h1>
              <div class="cols cols-1-col">
                  <ol class="full-list">
                      <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>Download the <b>Snapchat</b> app for iOS from the App Store, Android from Google Play Store or Windows Phone from the Windows Phone Store.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><p>Launch Snapchat from your Home screen.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300" class="aos-init aos-animate"><p>Tap &ldquo;Sign Up&rdquo;.</p></li>
                      <li data-aos="fade-in" data-aos-delay="400" class="aos-init aos-animate"><p>Enter your name and tap &ldquo;Sign Up&rdquo;.</p></li>
                      <li data-aos="fade-in" data-aos-delay="500" class="aos-init aos-animate"><p>Enter your birthday.</p></li>
                      <li data-aos="fade-in" data-aos-delay="600" class="aos-init aos-animate"><p>Enter a secure password.</p></li>
                      <li data-aos="fade-in" data-aos-delay="700" class="aos-init aos-animate"><p>Enter your email address.</p></li>
                      <li data-aos="fade-in" data-aos-delay="800" class="aos-init aos-animate"><p>Snapchat will also give you the option to add in your phone number or find your friends, and both steps can be skipped by tapping the &ldquo;Skip&rdquo; button in the upper right corner.</p></li>
                  </ol>
            </div>
          </section>
          <section class="section-2 last-section">
            <div class="holder">
            <h2>Things to consider before creating your account:</h2>
            <ul class="boxes">
                <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                  <p>Snapchat will not let you change your username after you select it initially. The only way to change it is to delete your current account and sign up again for an account.</p>
                </li>
                <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                  <p>If you are under the age of 13, you are not allowed to use Snapchat.</p>
                </li>
                <li data-aos="fade-up" data-aos-delay="600" class="aos-init aos-animate">
                  <p>If you are from the ages of 13 to 17 you must receive parental permission to use the app as stated in the terms of service.</p>
                </li>
              </ul>

              <a data-aos="fade-in" data-aos-delay="100" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>

            </div>
          </section>






        </main>


    @endsection

@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
@endsection
