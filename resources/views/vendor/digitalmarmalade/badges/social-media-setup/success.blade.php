@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="introduction"
@endsection

@section('page')
<main>
    <section class="section-1">
      <div class="holder">
        <img class="well-done well-done-success" data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/well-done.svg" alt="Well done!"/>
        <p>In this badge you’ve learnt how to set up your profile in six of the biggest social networks:</p>
        <ul>
            <li data-aos="fade-in" data-aos-delay="100"><a href="https://www.facebook.com/" title="Go to Facebook" target="_blank"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-facebook.svg" alt="Go to Facebook"/></a></li>
            <li data-aos="fade-in" data-aos-delay="200"><a href="https://www.instagram.com/" title="Go to Instagram" target="_blank"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-instagram.svg" alt="Go to Instagram"/></a></li>
            <li data-aos="fade-in" data-aos-delay="300"><a href="https://www.linkedin.com/" title="Go to LinkedIn" target="_blank"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-linkedin.svg" alt="Go to Linkedin" /></a></li>
            <li data-aos="fade-in" data-aos-delay="400"><a href="https://twitter.com/" title="Go to Twitter"  target="_blank"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-twitter.svg" alt="Go to Twitter"/></a></li>
            <li data-aos="fade-in" data-aos-delay="500"><a href="https://www.youtube.com/" title="Go to YouTube"  target="_blank"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-youtube.svg" alt="Go to YouTube"/></a></li>
            <li data-aos="fade-in" data-aos-delay="600"><a href="https://www.snapchat.com/" title="Go to Snapchat"  target="_blank"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-snapchat.svg" alt="Go to Snapchat"/></a></li>
        </ul>

      </div>
    </section>
    <section class="section-2 last-section">
      <p>Before you go, don't forget to download your complete Social Media Set Up Guide:</p>
      <ul class="success-options">
          <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><a href="/badge-assets/social-media-setup/_global/pdf/setup-guide.pdf" title="Download Set Up Guide"><img src="/badge-assets/social-media-setup/_global/img/icon-download.svg" alt="Download Set Up Guide" download=""><span>Download Set Up Guide</span></a></li>
        </ul>
      <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary btn-success" href="{{$links['submit']}}"><span>Claim your points and go back to <b>i</b>dea</span></a>
    </section>

  </main>
        @endsection
