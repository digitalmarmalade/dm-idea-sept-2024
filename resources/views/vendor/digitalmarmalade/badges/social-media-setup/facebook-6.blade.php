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
              <h1>Your Profile - About Tab</h1>
              <p>Use the <b>About</b> tab on your Facebook profile or page to share information about either yourself or your company, depending on the type of account you set up. For personal profiles, the <b>About</b> tab contains a selection of topics from which you can update the following fields:</p>
              <div class="cols">
                <div class="col">
                  <ul class="boxes boxes-full-width">
                      <li data-aos="fade-right" data-aos-delay="100"><p>Work and education</p></li>
                      <li data-aos="fade-right" data-aos-delay="200"><p>Contact and basic info</p></li>
                      <li data-aos="fade-right" data-aos-delay="300"><p>Details about you</p></li>
                  </ul>
                </div>
                <div class="col">
                  <ul class="boxes boxes-full-width">
                      <li data-aos="fade-left" data-aos-delay="100"><p>Places</p></li>
                      <li data-aos="fade-left" data-aos-delay="200"><p>Family and relationships</p></li>
                      <li data-aos="fade-left" data-aos-delay="300"><p>Life events</p></li>
                  </ul>
                </div>

              </div>
              <p>Each of these sections can be further expanded in additional tabs within the <b>About</b> tab. You can change who is able to view each piece of information in your bio by editing the audience setting so certain information can only be viewed by friends or by yourself.</p>
              <img data-aos="fade-up" data-aos-delay="100" class="border" src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-4.png" alt="Facebook - Your Homepage screen"/>
            </div>
          </section>

          <section class="section-2 last-section">
            <div class="holder">
              <h1>Your Profile  - Photos tab</h1>
              <p>Facebook photos you’ve added or have been tagged in will also figure prominently on your profile. Make sure you keep a close eye on photos you’re being tagged in so you can untag anything you don’t want others seeing on your page. To avoid this process you can also turn on the <b>Timeline Review</b> feature, which allows you to approve tags before they appear on your profile.</p>
              <img data-aos="fade-up" data-aos-delay="100" class="border" src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-5.png" alt="Facebook - Your Homepage screen"/>
              <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
            </div>
          </section>
        </main>


    @endsection

    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    @endsection
