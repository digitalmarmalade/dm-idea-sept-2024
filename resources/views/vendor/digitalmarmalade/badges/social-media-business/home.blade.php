@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="home">
    <section class="blue top">
        <img class="airplane-title" src="/badge-assets/{{$url['slug']}}/_global/img/airplane-title.svg" alt="Social Media in Business" />

        <img class="cloud cloud-1" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-1.svg" alt="" />

        <img class="cloud cloud-2" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-2.svg" alt="" />

        <img class="cloud cloud-3" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-3.svg" alt="" />

        <img class="cloud cloud-4" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-4.svg" alt="" />

        <img class="cloud cloud-5" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-5.svg" alt="" />

        <img class="cloud cloud-6" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-6.svg" alt="" />

        <div class="holder">
          <h1 class="visually-hidden">Social Media in Business</h1>

          <p class="intro" data-aos="zoom-in" data-aos-delay="100">Social Media has a huge impact on how a company’s brand is perceived by its customers, and therefore can affect revenue and sales.</p>
        </div>
        <div class="home-businesses">
          <img class="buildings" data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/home-businesses.png" alt="" />
          <img class="people" data-aos="fade-up" data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/img/home-people.png" alt="" />
        </div>
        <a class="scroll-down" href="#bottom"><img src="/badge-assets/{{$url['slug']}}/_global/img/arrow-down.svg" alt="" /></a>
    </section>
    <section class="grey bottom" id="bottom">
      <div class="holder">
        <div class="panel" data-aos="zoom-in" data-aos-delay="100" >

              <p>As with many new technologies, Social Media is rapidly growing and changing all the time, which can make it daunting to know where to start.</p>
              <p>It's also important to think carefully about the content you share. Trust and confidence take a long time to build, but can be shattered in minutes in the context of Social Media. Reputations can be lost - sometimes irreparably – because of over-hasty or misguided postings on Social Media.</p>

              <p>In this badge, you will learn:</p>
            <ul class="learning-outcomes">
              <li data-aos="zoom-in" data-aos-delay="100">Which platforms to use for different businesses and why</li>
              <li data-aos="zoom-in" data-aos-delay="200">What types of content businesses publish and share on Social Media</li>
              <li data-aos="zoom-in" data-aos-delay="300">How businesses share and publish content</li>
              <li data-aos="zoom-in" data-aos-delay="400">The basics of Social Media marketing</li>
              <li data-aos="zoom-in" data-aos-delay="500">How to measure success</li>
          </ul>
          <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn" >Start Badge</a>
        </div>
      </div>
    </section>
</main>

@endsection
