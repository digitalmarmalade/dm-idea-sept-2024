@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="introduction"
@endsection

@section('page')
<main>
    <section class="section-1 section-success">
      <div class="section-title">
          <p>Facebook</p>
      </div>
      <div class="holder">
        <img class="well-done" data-aos="fade-up" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/well-done.svg" alt="Well done!"/>
        <h2>You’ve completed the facebook set up section of this badge!</h2>
        <p>Where would you like to go next?</p>
        <ul class="success-options">
          <li data-aos="fade-in" data-aos-delay="100"><a href="intro" title="Choose another Social Network"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Choose another Social Network"/><span>Choose another Social Network</span></span></a></li>
          <li data-aos="fade-in" data-aos-delay="200"><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-facebook.pdf" title="Download Set Up Guide" ><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Download Set Up Guide" download="setup-guide-facebook.pdf" target="_blank" type="application/octet-stream"/><span>Download Set Up Guide</span></a></li>
          <li data-aos="fade-in" data-aos-delay="300"><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/><span>Take Quiz</span></a></li>
        </ul>
      </div>
    </section>

  </main>

    @endsection
