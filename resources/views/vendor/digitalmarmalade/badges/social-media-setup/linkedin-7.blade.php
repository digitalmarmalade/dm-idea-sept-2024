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
              <h1>Your public profile URL</h1>

              <div class="cols">
                <div class="col">
                  <p>If your LinkedIn profile is set to public, it will have a web address (URL) you can use to share with others. This link won't appear if you don't have a public profile.<p>
                  <p>Members who live in certain countries have a public profile URL that begins with a 2-letter code based on the country listed on their profile. <p>
                </div>
                <div class="col">
                  <p>For example, if you live in Canada, your public profile URL could be:<p>
                  <p><b>http://ca.linkedin.com/in/yourname</b><p>
                  <p>If you change the country listed on your profile, your public profile URL automatically changes. The old URLs will still work.<p>
                </div>
              </div>
              <h2>Hiding or showing your profile</h2>
              <div class="cols cols-1-col">
                  <ol class="full-list">
                      <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>Click the &ldquo;Me&rdquo; icon at top of your LinkedIn homepage.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><p>Click &ldquo;View&rdquo; Profile.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300" class="aos-init aos-animate"><p>On your profile page, click &ldquo;Edit public profile&rdquo; & URL on the right.</p></li>
                      <li data-aos="fade-in" data-aos-delay="400" class="aos-init aos-animate"><p>Under Edit URL in the right rail, click the &ldquo;Edit&rdquo; icon next to your public profile URL.</p></li>
                      <li data-aos="fade-in" data-aos-delay="500" class="aos-init aos-animate"><p>It'll be an address that looks like <b>www.linkedin.com/in/yourname</b>.</p></li>
                      <li data-aos="fade-in" data-aos-delay="600" class="aos-init aos-animate"><p>Type the last part of your new custom URL in the text box.</p></li>
                      <li data-aos="fade-in" data-aos-delay="700" class="aos-init aos-animate"><p>Click &ldquo;Save&rdquo;.</p></li>

                  </ol>
            </div>
          </section>
          <section class="section-2 last-section">
            <div class="holder">
            <h2>A few things to consider:</h2>
            <ul class="boxes boxes-grid">
                <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                  <p>Your custom URL can have 5-30 letters or numbers. Don't use spaces, symbols, or special characters.</p>
                </li>
                <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                  <p>Use a variation of your name and/or your professional brand since you'll share this URL with people so they can find your LinkedIn profile. Some job applications may also ask you for your LinkedIn profile URL.</p>
                </li>
                  <li data-aos="fade-up" data-aos-delay="600" class="aos-init aos-animate">
                    <p>If a member uses a URL and then changes it, that URL will be unavailable for use by yourself and other members for six months.</p>
                  </li>
                  <li data-aos="fade-up" data-aos-delay="800" class="aos-init aos-animate">
                      <p>If you navigate to a previously claimed URL, you may see a page that reads Profile Not Found.</p>
                    </li>
              </ul>
              <ul class="boxes boxes-grid">
                <li data-aos="fade-up" data-aos-delay="200" class="aos-init aos-animate">
                  <p>The customisable part of the URL is not case sensitive. This means using JohnSmith, johnsmith, or johnSmith will all point to the same profile.</p>
                </li>
                <li data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                  <p>If the URL you want isn't available,  select a different one. LinkedIn can't make custom URLs available to members upon request. </p>
                </li>
                <li data-aos="fade-up" data-aos-delay="600" class="aos-init aos-animate">
                    <p>You can change your URL up to five times within six months. Once you have changed your URL for the fifth time, you won't be able to change it for another six months. Changing your URL several times may make it hard for people to find you.</p>
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
