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

        <main class="features">
          <section class="section-1 only-section">
            <div class="section-title">
              <p>YouTube</p>
            </div>
            <div class="holder">
              <img class="network-icon" src="/badge-assets/{{$url['slug']}}/_global/img/icon-youtube.svg" alt="youtube"/></a>
              <div class="cols">
                <div class="col">
                  <p>YouTube is a <b>video-sharing website</b>. It offers a wide variety of user-generated and corporate media videos. Available content includes video clips, TV show clips, music videos, short and documentary films, audio recordings, movie trailers, live streams, and other content such as video blogging, short original videos, and educational videos.</p>
                  <p>Unregistered users can only watch videos on the site, while registered users are permitted to upload an unlimited number of videos and add comments to videos.</p>
                </div>
                <div class="col">

                  <p>Videos deemed potentially inappropriate are available only to registered users who confirm themselves to be at least 18 years old.</p>
                  <p>Please note, YouTube requires account holders to be 18, if you’re 13 you can set up a YouTube account but you will need permission from a parent or guardian. If you are not old enough you can still do the badge to learn for the future.</p>
                </div>
              </div>

              <h1>Key Features</h1>
              <div class="cols-key-features cols-key-features-youtube">
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="100">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/youtube/feature-upload.svg" alt="Upload"/>
                    <h2>Upload</h2>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="500">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/youtube/feature-report.svg" alt="Report"/>
                    <h2>Report</h2>
                  </div>
                </div>

                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="200">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/youtube/feature-watch.svg" alt="Watch"/>
                    <h2>Watch</h2>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="600">
                    <img class="favourites" src="/badge-assets/{{$url['slug']}}/_global/img/youtube/feature-favourites.svg" alt="Add to favourites"/>
                    <h2>Add to favourites</h2>
                  </div>
                </div>

                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="300">
                    <img class="rate" src="/badge-assets/{{$url['slug']}}/_global/img/youtube/feature-rate.svg" alt="Rate"/>
                    <h2>Rate</h2>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="700">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/youtube/feature-comment.svg" alt="Comment"/>
                    <h2>Comment</h2>
                  </div>
                </div>

                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="400">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/youtube/feature-share.svg" alt="Share"/>
                    <h2>Share</h2>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="800">
                    <img class="subscribe" src="/badge-assets/{{$url['slug']}}/_global/img/youtube/feature-subscribe.svg" alt="Subscribe to other users"/>
                    <h2>Subscribe to other users</h2>
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
