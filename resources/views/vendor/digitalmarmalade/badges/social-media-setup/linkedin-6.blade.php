@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-linkedin.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

        <main>
          <section class="section-1">
            <div class="section-title">
                <p>Linkedin</p>
            </div>
            <div class="holder">
              <h1>Your public profile visibility</h1>
              <p>Your public profile appears:</p>
              <ul class="boxes">
                <li>When people search for you using a public search engine</li>
                <li>On public profile badges</li>
                <li>On affiliate and approved third-party services </li>
              </ul>
              <div class="cols">
                <div class="col">
                  <p>You can customise your public profile settings to set limits on how much of your profile information can be displayed, by turning on or off the profile sections that you want to be visible on public search engines.<p>
                  <p>Viewers who aren't signed in to LinkedIn will see all or some portions of the profile display selections you make on this page. If you'd like to change the wording or text in a specific section for your public profile, first edit your profile and then enable that section's public visibility.<p>
                </div>
                <div class="col">
                  <p>Your public profile will be visible to non-members and logged out members - subject to your off-LinkedIn visibility settings. <p>
                  <p>You can access off-LinkedIn visibility preferences on the profile visibility settings page.<p>
                </div>
              </div>
              <h2>Hiding or showing your profile</h2>
              <div class="cols cols-1-col">
                  <ol class="full-list">
                      <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>Click the &ldquo;Me&rdquo; icon at top of your LinkedIn homepage.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><p>Click &ldquo;View&rdquo; Profile.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300" class="aos-init aos-animate"><p>On your profile page, click &ldquo;Edit public profile&rdquo; & URL on the right.</p></li>
                      <li data-aos="fade-in" data-aos-delay="400" class="aos-init aos-animate"><p>Under the <b>Edit Visibility</b> section in the right rail, toggle your profile's public visibility to &ldquo;Off&rdquo;. Your LinkedIn profile won't appear in search engines and won't be visible to non-LinkedIn members.</p></li>

                  </ol>
            </div>
          </section>
          <section class="section-2 last-section">
            <div class="holder">
            <h2>A few things to consider:</h2>
            <ul class="boxes boxes-grid">
                <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                  <p>After you change or disable your public profile, it may take several weeks for it to be added to or removed from search engine results.</p></li>
                <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                  <p>Not all sections of your profile can be displayed publicly. On the Public profile settings page, you'll be able to see and adjust the sections of your profile that can be displayed publicly. Viewers who aren't signed in to LinkedIn will see all or some portions of the profile display selections you make on this page.</p></li>
              </ul>
              <ul class="boxes boxes-grid">
                <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                  <p>The default photo setting is Public.</p></li>
                <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                  <p>If you edit the settings of your profile photo from your profile page, then your public profile page will be updated with the new setting. For example: if you change your profile photo visibility setting from Public to Your Connections, that change will be applied to your public profile as well, and your photo will no longer appear as part of your public profile. Likewise, you can update your photo visibility settings while you're editing your public profile page (or by disabling your public profile). </p></li>
              </ul>
              <a data-aos="fade-in" data-aos-delay="100" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>

            </div>
          </section>






        </main>


    @endsection

@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
@endsection
