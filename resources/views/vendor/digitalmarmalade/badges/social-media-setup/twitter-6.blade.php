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
          <section class="section-1 only-section">
            <div class="section-title">
                <p>Twitter</p>
            </div>
            <div class="holder">
              <h1>Your Profile</h1>
              <img data-aos="fade-in" class="verified-accounts" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/verified-accounts.svg" alt="Twitter Verified Accounts"/>
              <h3>About Verified Accounts</h3>

                <div class="cols">
                  <div class="col">
                    <p>The blue verified badge  on Twitter lets people know that an account of public interest is authentic.</p>
                    <p>The badge appears next to the name on an account’s profile and next to the account name in search results. It is always the same colour and placed in the same location, regardless of profile or theme colour customizations.</p>
                    <p>Accounts that don’t have the badge next to their name but that display it somewhere else, for example in the profile photo, header photo, or bio, are not verified accounts.</p>
                  </div>
                  <div class="col">
                    <p>Verified badges must be applied by Twitter, and accounts that use a badge as a part of profile photos, background photos, or in any other way that implies verified status, are subject to permanent account suspension.</p>
                    <p>An account may be verified if it is determined to be an account of public interest. Typically this includes accounts maintained by users in music, acting, fashion, government, politics, religion, journalism, media, sports, business, and other key interest areas. A verified badge does not imply an endorsement by Twitter.</p>

                  </div>

              </div>
                  <a class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
            </div>
          </section>


        </main>


    @endsection

    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    @endsection
