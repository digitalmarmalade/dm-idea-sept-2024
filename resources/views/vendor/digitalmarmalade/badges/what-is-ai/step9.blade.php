@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])


<main>

  <section class='flex flex--center flex--column'>
   <div class='holder '>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Skills for the future of work</h1>

    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
      <div class="col" >
        <p>If you are interested in a career in AI, there is a wide range of technical skills and training that you may consider (or already have) that will help get you on the right path or specialise within the AI sector.</p>
      </div>
      <div class="col">
        <p>These skills fall into the three main categories below and include many sub-fields: </p>
      </div>
    </div>

    <ul class="list--3-cols flex flex--wrap">


      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <h2 class="box__title">Maths</h2>
        <p>Statistics, probability, predictions.</p>
      </li>

      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <h2 class="box__title">Science</h2>
        <p>Physics, mechanics, cognitive learning theory, language processing</p>
      </li>

      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <h2 class="box__title">Computer science</h2>
        <p>Programming, data structures, distributed computing</p>
      </li>

    </ul>

    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
      <div class="col" >
        <p>When you have finished this badge, why don&rsquo;t you do some research online to explore the different jobs that are currently available in AI?</p>
      </div>
      <div class="col">
        <p>Pay attention to the job descriptions and think about which job descriptions sound the most exciting to you and focus on the type of skills and experiences that employers are looking for.</p>
      </div>
    </div>

  </div>

</div>


  <section class='activity flex flex--center flex--column jsSelectItems' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" data-scroll-anchor="jsScrollAnchor1">
   <div class='holder flex flex--column flex--center'>
      <p class="col-single">Let&rsquo;s imagine the year is 2030 and you&rsquo;re looking for a new team member to join your start-up.</p>
      <p class="col-single"><strong>Taking into account everything you have just learned about the future of work, which candidate should you hire?</strong></p>
      <ul class="flex flex--wrap flex--justify-center list--activity-answers list--activity-answers--cadidates list--3-cols">

        <li class='list--activity-answers__item flex flex--column list--activity-answers__item--cadidates jsAnswer'>

          <div class="flex flex--justify-space-between flex--align-center">
            <p class="candidate"><strong>Candidate 1</strong></p>
            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--candidate-1.svg" />
          </div>

          <p><strong>Bio</strong><br>An experienced and resilient worker looking for a new challenge.</p>
          <p><strong>Skillset</strong><br>Data entry, rota management, document filing, attention to detail.</p>
        </li>

        <li class='list--activity-answers__item flex flex--column list--activity-answers__item--cadidates jsAnswer jsCorrect'>

          <div class="flex flex--justify-space-between flex--align-center">
            <p class="candidate"><strong>Candidate 2</strong></p>
            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--candidate-2.svg" />
          </div>

          <p><strong>Bio</strong><br>A talented and adaptable worker looking to help a small team make a big difference.</p>
          <p><strong>Skillset</strong><br>Creativity, social influencing, initiative, attention to detail, learning.</p>
        </li>

        <li class='list--activity-answers__item flex flex--column list--activity-answers__item--cadidates jsAnswer'>

          <div class="flex flex--justify-space-between flex--align-center">
            <p class="candidate"><strong>Candidate 3</strong></p>
            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--candidate-3.svg" />
          </div>

          <p><strong>Bio</strong><br>A hard worker looking for a new opportunity.</p>
          <p><strong>Skillset</strong><br>Data analysis, critical thinking, self-motivated, numeracy.</p>
        </li>

      </ul>
      <a class="btn btn--blue inline-flex flex--center jsCheck"  href="{{$links['next']}}">Check</a>
    </div>

    <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
      <div class="holder ">
        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Nice choice!</strong> They would make a great addition to your team.</p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Continue</a>
          </div>

      </div>
    </div>


    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
      <div class="holder ">
        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"> <strong>Perhaps not.</strong> Take a good look at the skill sets listed for each candidate.</p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
        </div>
      </div>
    </div>

  </section>

  <section class="jsScrollAnchor1"></section>


</main>



@endsection
@section('javascript')


<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 9);
</script>

@endsection
