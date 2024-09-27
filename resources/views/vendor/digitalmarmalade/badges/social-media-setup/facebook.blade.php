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
<main class="features">
  <section class="section-1 last-section only-section">
    <div class="section-title">
      <p>Facebook</p>
    </div>
    <div class="holder">
      <img class="network-icon" src="/badge-assets/{{$url['slug']}}/_global/img/icon-facebook.svg" alt="Facebook"/>
      <p>Facebook is a Social Networking website and service where users can post comments, share photographs and links to news or other interesting content on the Web, play games, chat live, and stream live video. You can even order food with Facebook if that's what you want to do. Shared content can be made publicly accessible, or it can be shared only among a select group of friends or family, or with a single person.</p>
      <p>Please note you have to be 13 years old and over to create an account on Facebook. If you are not old enough, you can still complete this badge to learn for the future.</p>
      <h1>Key Features</h1>
      <div class="cols-key-features cols-key-features-facebook">
        <div class="col">
          <div data-aos="fade-up" data-aos-delay="100">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/feature-privacy.svg" alt="Privacy"/>
            <h2>Privacy</h2>
            <p>Facebook allows you to maintain a friends list and choose privacy settings to tailor who can see content on your profile.</p>
          </div>
          <div data-aos="fade-up" data-aos-delay="400">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/feature-live-video.svg" alt="live videos"/>
            <h2>Live Video</h2>
            <p>You can stream live video using Facebook Live.</p>
          </div>
          <div data-aos="fade-up" data-aos-delay="200">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/feature-interaction.svg" alt="Interaction"/>
            <h2>Interaction</h2>
            <p>Facebook supports interactive online chat and allows you to comment on your friend's profile pages (sometimes called &ldquo;walls&rdquo;) in order to keep in touch, share information or just to say &ldquo;hi&rdquo;.</p>
          </div>
        </div>
        <div class="col">


          <div data-aos="fade-up" data-aos-delay="300">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/feature-groups.svg" alt="Groups"/>
            <h2>Groups</h2>
            <p>Facebook supports group pages, fan pages and business pages that let businesses use Facebook as a vehicle for social media marketing.</p>
          </div>
          <div data-aos="fade-up" data-aos-delay="500">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/facebook/feature-photo.svg" alt="Photos"/>
            <h2>Photos</h2>
            <p>Facebook allows you to upload photos and maintain photo albums that can be shared with your friends.</p>
          </div>
        </div>
      </div>
      <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}"><span>Continue</span></a>

    </div>

    </section><!--/holder-->
</main>


@endsection


@section('javascript')
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
@endsection
