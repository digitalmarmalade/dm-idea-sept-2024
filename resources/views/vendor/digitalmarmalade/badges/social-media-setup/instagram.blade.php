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
          <section class="section-1 last-section only-section">
            <div class="section-title">
              <p>Instagram</p>
            </div>
            <div class="holder">
              <img class="network-icon" src="/badge-assets/{{$url['slug']}}/_global/img/icon-instagram.svg" alt="instagram"/></a>
              <p>Instagram is a mobile, desktop, and Internet-based photo-sharing application and service that allows users to share pictures and videos either publicly, or privately to pre-approved followers. It was launched in October 2010.</p>
              <p>Please note you have to be 13 years old and over to create an account on Instagram. If you are not old enough, you can still complete this badge to learn for the future.</p>
              <h1>Key Features</h1>
              <div class="cols-key-features">
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="100">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram/feature-filters.svg" alt="Photo Filters"/>
                    <h2>Photo filters</h2>
                    <p>Instagram offers a number of photographic filters that users can apply to their images.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="400">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram/feature-video.svg" alt="Video"/>
                    <h2>Video</h2>
                    <p>You can post videos that are up to 60 seconds long.</p>
                  </div>

                </div>
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="200">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram/feature-explore.svg" alt="Explore"/>
                    <h2>Explore</h2>
                    <p>Displays popular photos, photos taken at nearby locations, and allows you to search for other users or hashtags.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="500">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram/feature-photo.svg" alt="Instagram Stories"/>
                    <h2>Instagram Stories</h2>
                    <p>Allows users to take photos, add effects and layers, and add them to their Instagram story. Images uploaded to a user's story expire after 24 hours.</p>
                  </div>
                </div>
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="300">
                    <img class="messages" src="/badge-assets/{{$url['slug']}}/_global/img/instagram/feature-direct.svg" alt="Intagram Direct"/>
                    <h2>Instagram Direct</h2>
                    <p>Lets users interact through private messaging. Users who follow each other can send private messages with photos and videos, in contrast to the public-only requirement that was previously in place. When users receive a private message from someone they don't follow, the message is marked as pending and the user must accept to see it.  Users can send a photo to a maximum of 15 people at a time.</p>
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
