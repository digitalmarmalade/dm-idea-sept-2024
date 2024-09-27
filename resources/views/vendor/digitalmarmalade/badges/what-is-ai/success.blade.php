@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')


<main>

  <section class='flex flex--center flex--column'>
   <div class='holder '>

    <h1 class="animate__animated animate__tada congratulations">Congratulations!</h1>

    <div class='activity--feedback activity--feedback-success' data-aos="fade-up" data-aos-duration="1500">

        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">You have successfully completed the <strong>What is AI?</strong> badge and you have been awarded 10 Bronze points.</p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
        </div>

    </div>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><strong>In this badge we covered:</strong></p>

    <ul class="list--2-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <li class='box flex flex--center'><strong>What AI is</strong></li>
      <li class='box flex flex--center'><strong>The history of computer chips</strong></li>
      <li class='box flex flex--center'><strong>How AI is used in our daily lives</strong></li>
      <li class='box flex flex--center'><strong>The impact of AI on the future of work</strong></li>
      <li class='box flex flex--center'><strong>Some of the ethical issues related to just one example of AI</strong></li>
      <li class='box flex flex--center'><strong>You also built your own Smart Home and explored a Smart City</strong></li>
    </ul>

    <ul class="list--buttons flex flex--wrap flex--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
      <li class='box flex flex--end'>
        <a class="btn btn--yellow inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['submit']}}">Return to <span>i</span>Dea</a>
      </li>
      <li class='box flex flex--start'>
        <a class="btn btn--yellow inline-flex flex--center" href="https://idea.org.uk/badge/problem-solving-with-ai" target="_blank">Try another Intel AI4Y <span> i</span>Dea Badge</a>
      </li>
    </ul>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">If you are interested in learning more, please have a look at the following resources:</p>

    <ul class="list--resources" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" data-aos-anchor-placement="bottom-bottom">
      <li>
        <a href="https://www.intel.ai/ai4socialgood/" target="_blank">Intel<sup>&#174;</sup>&nbsp;&nbsp;&nbsp;AI For Good</a>
      </li>
      <li >
        <a href="https://www.intel.ai/" target="_blank">Intel<sup>&#174;</sup>&nbsp;&nbsp;&nbsp;AI</a>
      </li>
      <li class='inline-flex flex--center'>
        <a href="https://www.youtube.com/watch?v=vgUWKXVvO9Q" target="_blank">Video: AI for Good - Ethics in AI by XPRIZE</a>
      </li>
      <li class='inline-flex flex--center'>
        <a href="https://vimeo.com/442346147" target="_blank">Video: Beyond the Trolley Problem - Ethics in AI at AIDC 2018</a>
      </li>
    </ul>

    </div>
  </section>
  <section>
    <div class="holder">

      @include('vendor.digitalmarmalade.badges.what-is-ai.disclaimer')

    </div>
  </section>
</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 12);
    oBadges.redirectIfPreviousStepNotCompleted(11, '{{$links['last']}}');
</script>

@endsection
