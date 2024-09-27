@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="home">
            <div class="top">
                <div class="step">
                    <p>How To Set Up</p>
                </div>
                <div class="holder">
                  <h1>Websites<br/><span>or</span> Blogs</h1>
                  <p class="intro">Have you ever wondered what you need to do to make websites and blogs? In this badge you will learn what needs to be done to get your website or blog up and running:</p>
                  <ul>
                      <li data-aos="zoom-in" data-aos-delay="100"><h2>Content<span>How to create it</span></h2></h2></li>
                      <li data-aos="zoom-in" data-aos-delay="200"><h2>Platforms<span>How they work</span></h2></li>
                      <li data-aos="zoom-in" data-aos-delay="300"><h2>Domain Names<span>How to set them up</span></h2></li>
                      <li data-aos="zoom-in" data-aos-delay="400"><h2>Hosting<span>The different options</span></h2></li>
                      <li data-aos="zoom-in" data-aos-delay="500"><h2>Design<span>Some of the theory</span></h2></li>
                      <li data-aos="zoom-in" data-aos-delay="600"><h2>Publishing<span>Going live!</span></h2></li>
                  </ul>
                  <img class="computer" src="/badge-assets/{{$url['slug']}}/_global/img/computer.gif" alt="" />
                </div>
            </div>
            <div class="bottom">
                <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Start Badge</a>
            </div>
        </main>

        @endsection
        @section('javascript')
          <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
        @endsection
