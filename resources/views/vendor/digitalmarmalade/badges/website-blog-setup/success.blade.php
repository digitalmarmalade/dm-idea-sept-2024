@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="home success">
            <div class="top">
                <h1>Well done!</h1>
                <p>You are now ready to set up your own website or blog. In this badge, you’ve learned about what is needed to get your website or blog up and running:</p>
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
            <div class="bottom">
                <a href="{{$links['submit']}}" class="btn">Claim your points and go back to <span>i</span>dea</a>
            </div>
        </main>
        @endsection
