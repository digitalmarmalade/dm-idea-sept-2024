@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-youtube.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

<main>
    <section class="section-1 last-section only-section">
        <div class="section-title">
            <p>YouTube</p>
        </div>
        <div class="holder">
            <h1>Your personal Channel</h1>
            <img data-aos="fade-up" class="border" src="/badge-assets/{{$url['slug']}}/_global/img/youtube/youtube-4.png" alt="youtube - Upload a video"/>
            <div class="cols">
                <div class="col">
                    <p>A personal YouTube channel is available to everyone who joins YouTube as a member. The channel serves as the home page for the user's account.</p>

                    <p>After the user enters and approves the information, the channel shows the account name, the account type, a personal description, the public videos the member uploads, a list of members who are friends and any user information the member enters. The channel also includes a section where other members can comment (you can disable comments if you wish).</p>
                </div>
                <div class="col">
                    <p>If you are a YouTube member, you can customize the background and colour scheme of your personal channel and control some of the information that appears on it.</p>
                    <p>Businesses can also have channels. These channels are different from personal channels because they can have more than one owner or manager. A YouTube member can open a new business channel using a Brand Account.</p>
                </div>
          </div>
        </section>
        <section class="last-section">
          <div class="holder">
            <h2>How to create your personal channel</h2>
            <div class="cols cols-1-col">
              <ol class="full-list" >
                  <li data-aos="fade-in" data-aos-delay="100"><p>Near the upper-right corner of the screen, you'll see your <b>account profile picture</b>. Click on it to reveal the <b>Google Account Menu</b>, which will also be displayed near the top-right corner of the screen.</p></li>
                  <li data-aos="fade-in" data-aos-delay="200"><p>Click on the ‘My Channel’ link in the upper-right portion of the screen. The <b>Create your YouTube channel</b> screen will be displayed. From this initial screen, you'll see your profile photo, as well as your username and/or first and last name displayed. Click on the &ldquo;Edit&rdquo; link that's associated with the <b>From your Google profile</b> option in order to customise your Google profile, which will be your identity containing public information about you that people will see online.</p></li>
                  <li data-aos="fade-in" data-aos-delay="300"><p>Under the <b>Activities you'll share on your channel</b> heading, you'll see four options, labelled <b>Like a video</b>, <b>Comment on a video</b>, <b>Favourite a video</b>, and <b>Subscribe to a channel</b>. Add a checkmark to the checkbox that's associated with each activity you want people who visit your YouTube channel's page to be able to do.</p></li>
                  <li data-aos="fade-in" data-aos-delay="400"><p>Click on the "OK, I'm ready to continue&rdquo; button. Your YouTube channel has now been created. The next step is to start populating your channel by uploading videos to it.</p></li>
              </ol>


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
