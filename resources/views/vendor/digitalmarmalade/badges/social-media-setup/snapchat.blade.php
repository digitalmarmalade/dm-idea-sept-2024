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
        <main class="features">
          <section class="section-1 last-section only-section">
            <div class="section-title">
              <p>Snapchat</p>
            </div>
            <div class="holder">
              <img class="network-icon" src="/badge-assets/{{$url['slug']}}/_global/img/icon-snapchat.svg" alt="snapchat"/></a>
              <p>Snapchat is an image messaging and multimedia mobile application. One of the principal concepts of Snapchat is that pictures and messages are only available for a short time before they become inaccessible. The app has evolved from originally focusing on person-to-person photo sharing to presently featuring "Stories" of 24-hour chronological content, along with "Discover" to let brands show ad-supported short-form entertainment. Snapchat has become notable for representing a new, mobile-first direction for social media, and places significant emphasis on users interacting with virtual stickers and augmented reality objects.</p>
              <p>Please note you have to be 13 years old and over to create an account on Snapchat. If you are not old enough, you can still complete this badge to learn for the future.</p>
              <h1>Key Features</h1>
              <div class="cols-key-features cols-key-features-snapchat">
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="100">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/feature-snaps.svg" alt="Snaps"/>
                    <h2>Snaps</h2>
                    <p>Snaps can consist of a photo or a short video, and can be edited to include filters and effects, text captions, and drawings.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="400">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/feature-memories.svg" alt="Memories"/>
                    <h2>Memories</h2>
                    <p> Allows snaps and story posts to be saved into a private storage area, where they can be viewed alongside other photos stored on the device, as well as edited and published as snaps, story posts, or messages. When shared to a user's current story, the memory would have a white frame and timestamp to indicate its age. Content in the Memories storage area can be searched by date or using a local object recognition system.</p>
                  </div>
                </div>
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="200">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/feature-geofilters.svg" alt="Geofilters"/>
                    <h2>Geofilters</h2>
                    <p>Allows special graphical overlays to be available if the user is within a certain geographical location, such as a city, event, or destination. Snapchat users can design and submit their own Geofilters to be used on the app.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="600">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/feature-snapcash.svg" alt="Snapcash"/>
                    <h2>Snapcash</h2>
                    <p>Lets users send and receive money from each other through private messaging.</p>
                  </div>
                </div>
                <div class="col">

                  <div data-aos="fade-up" data-aos-delay="300">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/feature-lens.svg" alt="Lens"/>
                    <h2>Lens</h2>
                    <p>Allows users to add real-time effects into their snaps by using face detection technology. This is activated by long-pressing on a face within the viewfinder.</p>

                    <p>World Lenses use augmented reality technology to integrate 3D rendered elements (such as objects and animated characters) into scenes; these elements are placed and anchored in 3D space.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="500">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/feature-snapmap.svg" alt="Snap Map"/>
                    <h2>Snap Map</h2>
                    <p>Optional way to allow users to share their location with friends.</p>
                  </div>
                </div>
              </div>
              <a data-aos="fade-in" data-aos-delay="400" class="btn btn-primary" href="{{$links['next']}}"><span>Continue</span></a>

            </div>

            </section><!--/holder-->
        </main>


    @endsection


    @section('javascript')
      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
    @endsection
