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
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">You have successfully completed the <strong>Problem solving with AI</strong> badge and you have been awarded 12 Bronze points.</p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
        </div>

    </div>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><strong>In this badge you have learned:</strong></p>

    <ul class="list--2-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <li class='box flex flex--center'><strong>About how AI is used in our daily lives and can now identify the 3 domains of AI.</strong></li>
      <li class='box flex flex--center'><strong>About the Kimchi Crisis in South Korea and Project Vegita, where a 16-year-old boy created his own AI solution using methods like systems mapping, statistical data and machine learning to predict the price of cabbage and help stabilise the prices.</strong></li>
      <li class='box flex flex--center'><strong>How you can identify where AI solutions would be appropriate and how AI can be applied to help everyone involved, such as the consumers, supermarkets and farmers in the Kimchi Crisis.</strong></li>
      <li class='box flex flex--center'><strong>Where to find problems for social impact that you may be able to solve with AI and the UN&rsquo;s 17 Social Development Goals.</strong></li>
    </ul>

    <ul class="list--buttons flex flex--wrap flex--center " data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
      <li class='box flex flex--end'>
        <a class="btn btn--yellow inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['submit']}}">Return to <span>i</span>Dea</a>
      </li>
      <li class='box flex flex--start'>
        <a class="btn btn--yellow inline-flex flex--center" href="https://idea.org.uk/badge/what-is-ai" target="_blank">Try another Intel AI4Y <span> i</span>Dea Badge</a>
      </li>
    </ul>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">If you are interested in learning more, please have a look at the following resources:</p>

    <div class='cols cols--resources' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" >
      <div class="col flex flex--column">

        <span class="uppercase "><strong>Try these online AI games that use the 3 domains of AI</strong></span>

        <ul class="list--resources" >
          <li class='inline-flex flex--center'>
            <a href="http://bit.ly/iai4yma" target="_blank"> NLP Game &ndash; Identify the mystery animal</a>
          </li>
          <li class='inline-flex flex--center'>
            <a href="http://bit.ly/iai4yqd" target="_blank"> Computer vision game &ndash; Draw the items </a>
          </li>
          <li class='inline-flex flex--center'>
            <a href="http://bit.ly/iai4yrps" target="_blank"> Statistical data game &ndash; Rock paper scissors </a>
          </li>
        </ul>

        <span class="uppercase "><strong>Great videos about the Kimchi Crisis</strong></span>

        <ul class="list--resources" >
          <li class='inline-flex flex--center'>
            <a href="http://www.youtube.com/watch?v=RlBxerNfzzI" target="_blank"> About Kimchi by UNESCO</a>
          </li>
          <li class='inline-flex flex--center'>
            <a href="http://www.youtube.com/watch?v=s-XWkWiUJ28" target="_blank"> &ldquo;Rising Prices of Kimchi&rdquo; from Arirang News</a>
          </li>
        </ul>

      </div>

      <div class="col flex flex--column">
        <span class="uppercase "><strong>UN&rsquo;s Sustainable Development Goals</strong></span>

        <ul class="list--resources"  >
          <li class='inline-flex flex--center'>
            <a href="https://sustainabledevelopment.un.org/sdgs" target="_blank">Find out more about the 17 SDGs</a>
          </li>
          <li class='inline-flex flex--center'>
            <a href="https://idea.org.uk/badge/GlobalGoals" target="_blank">iDEA Global Goals badge</a>
          </li>
        </ul>

        <span class="uppercase "><strong>Intel</strong></span>

        <ul class="list--resources" >
          <li>
            <a href="https://www.intel.ai/ai4socialgood/" target="_blank">Intel<sup>&#174;</sup>&nbsp;&nbsp;&nbsp;AI For Good</a>
          </li>
          <li >
            <a href="https://www.intel.ai/" target="_blank">Intel<sup>&#174;</sup>&nbsp;&nbsp;&nbsp;AI</a>
          </li>
        </ul>

      </div>

    </div>

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
    oBadges.setSlugAndStep('{{$url['slug']}}', 6);
    oBadges.redirectIfPreviousStepNotCompleted(5, '{{$links['last']}}');
</script>

@endsection
