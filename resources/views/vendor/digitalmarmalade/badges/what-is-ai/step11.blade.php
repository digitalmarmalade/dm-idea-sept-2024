@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])


<main>

  <section class='flex flex--center flex--column'>
   <div class='holder '>

      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Facial recognition</h1>

      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <div class="col" >
          <p>The ability to recognise faces has long been a benchmark for artificial intelligence.</p>
          <p>Facial recognition is a way of recognising a human face using technology. It works by analysing patterns based on the person's unique facial textures and shape.</p>
          <img class="illustration--face-recognition flex flex--justify-center" src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--face-recognition.svg" />
        </div>
        <div class="col">
          <p>Facial recognition systems can identify people in photos, video, or in real-time.</p>
          <p>Your facial features are measured by facial recognition technology. Some of these measurements include:</p>
          <ul class="flex flex--wrap list--face--recoginition">
            <li class='box flex flex--center'><strong>The length of your jawline</strong></li>
            <li class='box flex flex--center'><strong>The shape of your cheekbones</strong></li>
            <li class='box flex flex--center'><strong>The distance between your eyes </strong></li>
            <li class='box flex flex--center'><strong>The depth of your eye sockets</strong></li>
            <li class='box flex flex--center'><strong>The width of your nose</strong></li>
          </ul>
        </div>
      </div>

      <div class="cols flex flex--column flex--justify-space-between " data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <div class="col" >
          <p>The measurements gathered by the system are then put in a database and can be compared to other detected faces.</p>
        </div>
        <div class="col" >
          <p>Think for a moment about how this could be used&#8230; </p>
        </div>
      </div>

    </div>

  </section>

  <section class='activity activity--face-recognition flex flex--center flex--column jsQuiz' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400" data-scroll-anchor="jsScrollAnchor">
     <div class='holder flex flex--column flex--center'>
        <p class="col-single">There are many benefits to using facial recognition technology but there are also many issues to consider as well.</p>
        <p class="col-single"><strong>Can you identify some benefits and issues? </strong><br>You will start this game with three lives, if you run out of lives before you finish the game you&rsquo;ll have to start over.</p>

        <div class="box box--activity--face-recognition__remaining-lives flex flex--center jsRemainingLives">
          <div class="flex flex--center">
            <p>Remaining lives</p>
            <ul class="flex jsLives">
              <li class="flex flex--center"><img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" /></li>
              <li class="flex flex--center"><img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" /></li>
              <li class="flex flex--center"><img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" /></li>
            </ul>
          </div>
        </div>

        <div class="holder--questions jsQuestions flex flex--center">

          <div class='box box--activity--face-recognition__questions active jsQuestion'>
            <p class='box--activity__questions-index'>1 of 8</p>
            <p class='box--activity__feature'>Security</p>
            <p>Retailers could be alerted if a known shoplifter has entered their shop.</p>
            <ul class="flex flex--wrap flex--justify-center list--activity-answers list--activity-future-work ">
              <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Benefit</li>
              <li class='list--activity-answers__item flex flex--center jsAnswer'>Issue</li>
            </ul>
          </div>

          <div class='box box--activity--face-recognition__questions hide jsQuestion'>
            <p class='box--activity__questions-index'>2 of 8</p>
            <p class='box--activity__feature'>Privacy</p>
            <p>People have rights to conduct their lives without being monitored and scrutinized.</p>
            <ul class="flex flex--wrap flex--justify-center list--activity-answers list--activity-future-work ">
              <li class='list--activity-answers__item flex flex--center jsAnswer'>Benefit</li>
              <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Issue</li>
            </ul>
          </div>



          <div class='box box--activity--face-recognition__questions hide jsQuestion'>
            <p class='box--activity__questions-index'>3 of 8</p>
            <p class='box--activity__feature'>Criminal Suspects</p>
            <p>An alert can be triggered when CCTV identifies particular individuals who might be wanted by the police.</p>
            <ul class="flex flex--wrap flex--justify-center list--activity-answers list--activity-future-work ">
              <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Benefit</li>
              <li class='list--activity-answers__item flex flex--center jsAnswer'>Issue</li>
            </ul>
          </div>

          <div class='box box--activity--face-recognition__questions hide jsQuestion'>
            <p class='box--activity__questions-index'>4 of 8</p>
            <p class='box--activity__feature'>Accuracy</p>
            <p>The system is not fool-proof and might make a mistake.</p>
            <ul class="flex flex--wrap flex--justify-center list--activity-answers list--activity-future-work ">
              <li class='list--activity-answers__item flex flex--center jsAnswer'>Benefit</li>
              <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Issue</li>
            </ul>
          </div>

          <div class='box box--activity--face-recognition__questions hide jsQuestion'>
            <p class='box--activity__questions-index'>5 of 8</p>
            <p class='box--activity__feature'>Transparency</p>
            <p>Subjects are often unaware of the process taking place or what the technology is being used for.</p>
            <ul class="flex flex--wrap flex--justify-center list--activity-answers list--activity-future-work ">
              <li class='list--activity-answers__item flex flex--center jsAnswer'>Benefit</li>
              <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Issue</li>
            </ul>
          </div>

          <div class='box box--activity--face-recognition__questions hide jsQuestion'>
            <p class='box--activity__questions-index'>6 of 8</p>
            <p class='box--activity__feature'>Medical uses</p>
            <p>Some facial recognition software providers claim that their products can help monitor blood pressure or pain levels by identifying key facial markers.</p>
            <ul class="flex flex--wrap flex--justify-center list--activity-answers list--activity-future-work ">
              <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Benefit</li>
              <li class='list--activity-answers__item flex flex--center jsAnswer'>Issue</li>
            </ul>
          </div>

          <div class='box box--activity--face-recognition__questions hide jsQuestion'>
            <p class='box--activity__questions-index'>7 of 8</p>
            <p class='box--activity__feature'>Bias</p>
            <p>There is potential for biased outputs and biased decision-making on the part of system operators.</p>
            <ul class="flex flex--wrap flex--justify-center list--activity-answers list--activity-future-work ">
              <li class='list--activity-answers__item flex flex--center jsAnswer'>Benefit</li>
              <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Issue</li>
            </ul>
          </div>

          <div class='box box--activity--face-recognition__questions hide jsQuestion'>
            <p class='box--activity__questions-index'>8 of 8</p>
            <p class='box--activity__feature'>People Search</p>
            <p>Photographs of missing people can be submitted to a database and an alert can be triggered when a missing person is picked up by CCTV.</p>
            <ul class="flex flex--wrap flex--justify-center list--activity-answers list--activity-future-work ">
              <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Benefit</li>
              <li class='list--activity-answers__item flex flex--center jsAnswer'>Issue</li>
            </ul>
          </div>

        </div>
      </div>

      <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
      <div class="holder ">
        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Excellent work!</strong></p>
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">You have correctly identified some of the ways that facial recognition technology will improve our lives as well as some of the issues that should be considered.</p>

            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">Artificial intelligence can and will improve many aspects of our lives.</p>

            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">But as you have just established, there is also reason for caution and its responsible implementation is up to us!</p>

          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
          <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster">Continue</a>

          </div>

      </div>
    </div>


  </section>

  <section class="jsScrollAnchor"></section>

</main>



@endsection
@section('javascript')


<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 11);
</script>

@endsection
