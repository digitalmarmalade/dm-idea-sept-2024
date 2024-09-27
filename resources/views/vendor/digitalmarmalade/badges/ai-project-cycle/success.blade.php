@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')


<main>
  <section class='flex flex--center flex--column'>
   <div class='holder'>

    <h1 class="animate__animated animate__tada congratulations">Congratulations!</h1>
    
    <div class="col-single">

      <div class='activity--feedback activity--feedback-success congratulations' data-aos="fade-up" data-aos-duration="1500">

          <div class="speech-bubble--holder flex flex--end flex--column">
            <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
              <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">You have successfully completed <strong>AI Project Cycle</strong> badge and you have been awarded 10 Bronze points.  </p>
            </div>
            <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
          </div>

      </div>

      <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><strong>In this badge you have:</strong></p>
    </div>
    <ul class="list--2-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <li class='box flex flex--center'><strong>Learnt about the 6 stages of the AI project cycle
</strong></li>
      <li class='box flex flex--center'><strong>Discovered the 4Ws and how to apply them
</strong></li>
      <li class='box flex flex--center'><strong>Learnt various ways to acquire the data needed to solve a problem 
</strong></li>
      <li class='box flex flex--center'><strong>Learnt about the importance of data visualisation to identify trends, relationships and patterns present</strong></li>
    </ul>

    <div class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
    	<p>Don’t forget to <strong>download the 4Ws Problem Canvas worksheet</strong> so that you can keep it and fill it in for your own projects!</p>
		  <a class="btn btn--white inline-flex flex--center" href="/badge-assets/{{$url['slug']}}/_global/pdf/4ws-canvas-worksheet.pdf" target="_blank">Download</a>
    </div>
    
    <div class="col-single flex flex--center flex--column" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
    <p>If you are interested in learning more, please have a look at the following resources:</p>
    <ul class="list--resources flex flex--center" >
      <li class="flex flex--center width-full" >
        <a href="https://idea.org.uk/badge/data-visualisation" target="_blank">Data Visualisation badge</a>
      </li>
    </ul>
  </div>
    <div class='col-single flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800" >
        <span class="uppercase "><strong>Try another Intel AI4Y iDEA badge</strong></span>
	   </div>

    <ul class="flex flex--wrap flex--center list--badge-icons" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900">
      <li>
        <a href="https://idea.org.uk/badge/what-is-ai" target="_blank" title="Try iDEA Badge What Is AI ">
          <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/badge--what-is-ai.png" alt="DEA Badge What Is AI" />
        </a>
      </li>
      <li>
        <a href="https://idea.org.uk/badge/problem-solving-with-ai" target="_blank" title="Try iDEA Badge Problem Solving With AI">
          <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/badge--problem-solving-with-ai.png" alt="DEA Badge Problem Solving With AI" />
        </a>
      </li>
      <li>
        <a href="https://idea.org.uk/badge/math-tools-for-ai" target="_blank" title="Try iDEA Badge Maths Tools for AI">
          <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/badge--maths-tools-for-ai.png" alt="iDEA Badge Maths Tools for AI"/>
        </a>
      </li>
    </ul>
    
    
    <a class="btn btn--yellow inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['submit']}}" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1000" data-aos-anchor-placement="bottom-bottom">Return to <span>i</span>Dea</a>
    
    
  </div>

</section>

</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 10);
    oBadges.redirectIfPreviousStepNotCompleted(9, '{{$links['last']}}');
</script>

@endsection
