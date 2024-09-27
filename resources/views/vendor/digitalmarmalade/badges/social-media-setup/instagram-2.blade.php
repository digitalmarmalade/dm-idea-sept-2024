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
        <main>
          <section class="section-1">
            <div class="section-title">
                <p>Instagram</p>
            </div>
            <div class="holder">
              <h1>Your Profile</h1>
              <p>To add or update any of your profile information, tap the profile icon.</p>
              <div class="anatomy-wrapper">
                  <div class="image-wrapper image-wrapper-instagram-profile">
                      <ul class="figures hide-desktop">
                          <li data-aos="fade-in" data-aos-delay="100">1</li>
                          <li data-aos="fade-in" data-aos-delay="200">2</li>
                          <li data-aos="fade-in" data-aos-delay="300">3</li>
                          <li data-aos="fade-in" data-aos-delay="400">4</li>
                          <li data-aos="fade-in" data-aos-delay="500">5</li>
                          <li data-aos="fade-in" data-aos-delay="600">6</li>
                      </ul>
                      <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/instagram/instagram-1.png" alt="instagram - Your Profile screen"/>
                  </div>
                  <div class="description-wrapper description-wrapper-instagram-profile">
                      <ul>
                          <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>Your profile picture</li>
                          <li data-aos="fade-right" data-aos-delay="200"><p><span class="figure">2</span>Your name</li>
                          <li data-aos="fade-right" data-aos-delay="300"><p><span class="figure">3</span>Your website</li>
                          <li data-aos="fade-left" data-aos-delay="400"><p><span class="figure">4</span>Profile icon</li>
                          <li data-aos="fade-left" data-aos-delay="500"><p><span class="figure">5</span>Your username</li>
                          <li data-aos="fade-left" data-aos-delay="600"><p><span class="figure">6</span>Your bio</li>
                      </ul>
                  </div>
                  <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/instagram/instagram-1.png" alt="instagram - Your Profile screen"/>
              </div>

            </div>
          </section>

          <section class="profile">
            <div class="holder">
              <h2>Your profile picture</h2>
              <img data-aos="fade-in" src="/badge-assets/{{$url['slug']}}/_global/img/instagram/instagram-profile-picture.png" alt="instagram Profile Picture recommended uploaded size is 180 pixels by 180 pixels"/>
              <div class="cols">
                <div class="col">
                  <h3>Add or change your profile picture</h3>
                  <ol>
                      <li data-aos="fade-in" data-aos-delay="100"><p>Go to your profile by tapping the profile icon.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>Tap &ldquo;Edit Profile&rdquo; and then &ldquo;Change Profile Photo&rdquo;.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>Select where you'd like to import your picture from. When using the app you can take a new photo or add a photo from your phone's photo library, Facebook or Twitter. If you choose to import from Facebook or Twitter, Instagram will use the same picture you're already using for that Social Network.</p></li>
                      <li data-aos="fade-in" data-aos-delay="500"><p>Click &ldquo;Done&rdquo;.</p></li>
                  </ol>
                  <h3>Your website</h3>
                  <p>This is the only place within Instagram where you can post a clickable link to something outside of Instagram. You can change it as often as you like, so you can link to your newest or most important content (like your latest blog post or video), a special campaign, or a landing page that specifically speaks to visitors coming from Instagram. Try using a URL shortener with a tracking code to get real-time statistics on visitors from Instagram.</p>
                </div>
                <div class="col">
                  <h3>Your username</h3>
                  <p>This is your identity on Instagram, and it forms part of your profile URL, so choose carefully! </p>
                  <p>Make your username consistent with your handle on other Social Networks so it’s easy for users to tag you on multiple networks at once.</p>

                  <h3>Your name</h3>
                  <p>The text you enter in this field appears in bold above your Instagram bio. You should include your brand name, of course, but don’t stop there. This field gives you 30 characters to work with, allowing you to include a variation on your name, or a keyword or two to clarify what your brand is about and help users find you.</p>
                  <p>The name field is included in Instagram searches, so a strategic keyword here can help users find you… but avoid overloading with too many keywords.</p>

                  <h3>Your bio</h3>
                  <p>Your bio needs to explain who you are and what you do, convey your unique personality, and use targeted language to show your ideal audience that they have come to the right place. That’s a big ask for a small space — you only have 150 characters — so you’ll need to get creative and use a few tricks to make your bio stand out.</p>
                </div>
              </div>
            </div>
          </section>



          <section class="section-2 last-section">
            <div class="holder">
              <h2>Tips for writing your bio</h2>
              <ul class="boxes">
                <li data-aos="fade-in" data-aos-delay="100" class="aos-init"><p>Since the character count is tight, the right emoji can help tell visitors more about you.</p></li>
                <li data-aos="fade-in" data-aos-delay="200" class="aos-init"><p>Include a call to action. Like any good marketing communications, your Instagram bio should include a call to action—what do you want visitors to do after they visit your profile?</p></li>
                <li data-aos="fade-in" data-aos-delay="300" class="aos-init"><p>Keep in mind that any hashtags you include in your bio are clickable in the Instagram web interface, but not in the mobile app.</p></li>
                <li data-aos="fade-in" data-aos-delay="400" class="aos-init"><p>Line breaks and spacing allow you to break your bio into bite-sized chunks of information that are easy for visitors to scan, so you can highlight the most important things about your brand. </p></li>
                <li data-aos="fade-in" data-aos-delay="500" class="aos-init"><p>The bio is visible by all so be aware what personal information you are sharing.</p></li>
                <li data-aos="fade-in" data-aos-delay="600" class="aos-init"><p>Include your contact information. Imagine a user stumbles across your Instagram account, loves your work, and wants to connect with you in the future. But how?</p></li>
              </ul>
              <a data-aos="fade-in" data-aos-delay="100" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
            </div>
          </section>




        </main>


    @endsection

    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
    @endsection
