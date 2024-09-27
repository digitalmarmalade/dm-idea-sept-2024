@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="home success">
    <section class="blue top">
        <img class="airplane-title" src="/badge-assets/{{$url['slug']}}/_global/img/airplane-success.svg" alt="Social Media in Business" />

        <img class="cloud cloud-1" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-1.svg" alt="" />

        <img class="cloud cloud-2" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-2.svg" alt="" />

        <img class="cloud cloud-3" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-3.svg" alt="" />

        <img class="cloud cloud-4" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-4.svg" alt="" />

        <img class="cloud cloud-5" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-5.svg" alt="" />

        <img class="cloud cloud-6" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-6.svg" alt="" />

        <div class="holder">
          <h1 class="visually-hidden">Well done!</h1>
        </div>
        <div class="home-businesses">
          <img class="buildings" data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/home-businesses.png" alt="" />
          <img class="people" data-aos="fade-up" data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/img/home-people.png" alt="" />
        </div>
        <a class="scroll-down" href="#bottom"><img src="/badge-assets/{{$url['slug']}}/_global/img/arrow-down.svg" alt="" /></a>
    </section>
    <section class="grey bottom" id="bottom">
      <div class="holder">
        <div class="panel" data-aos="zoom-in" data-aos-delay="100">

            <p>In this badge, you’ve learnt about:</p>
            <ul class="learning-outcomes">
              <li data-aos="zoom-in" data-aos-delay="100">Which platforms to use for different businesses and why</li>
              <li data-aos="zoom-in" data-aos-delay="200">What types of content businesses publish and share on social media</li>
              <li data-aos="zoom-in" data-aos-delay="300">How businesses share and publish content</li>
              <li data-aos="zoom-in" data-aos-delay="400">The basics of social media marketing</li>
              <li data-aos="zoom-in" data-aos-delay="500">How to measure success</li>
          </ul>
          <a href="{{$links['submit']}}" class="btn" >Go back to <span>i</span>dea to claim your points</a>
        </div>
      </div>
    </section>
</main>

@endsection
