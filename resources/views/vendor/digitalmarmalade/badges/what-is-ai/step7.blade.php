@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<main>

  <section class='flex flex--center flex--column'>
   <div class='holder '>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">AI and The Future
of work</h1>

    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
      <div class="col" >
        <p>AI is likely to have a big impact on work and productivity over the next ten years. It will have an effect on the future of work across all industries, changing the way we work and the skills that we<br>will require.</p>
      </div>
      <div class="col">
        <p>Tasks that are seen as repetitive and consistent are eventually going to be automated. This means that a machine will be doing them instead of a<br>human being.</p>
      </div>
    </div>
  </div>

  <picture class="flex flex--start illustration--the-future-of-work" >
    <source media="(min-width: 568px)" srcset="/badge-assets/{{$url['slug']}}/_global/svg/illustration--the-future-of-work-desktop.svg" data-aos-duration="1500" data-aos-delay="300">
    <img class="illustration--the-future-of-work" data-aos="fade-up"  src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--the-future-of-work.svg" data-aos-duration="1500" data-aos-delay="300" />
  </picture>

  <div class="holder">

    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <div class="col" >
        <p>There are many tasks that machines will do better than humans, just as there are many tasks that humans will do better than machines.</p>
      </div>
      <div class="col">
        <p>Humans will require some of the following skills and talents:</p>
      </div>
    </div>

    <ul class="flex flex--wrap list--2-cols" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
      <li class='box flex flex--center'><strong>Creativity</strong></li>
      <li class='box flex flex--center'><strong>Originality</strong></li>
      <li class='box flex flex--center'><strong>Initiative</strong></li>
      <li class='box flex flex--center'><strong>Critical thinking</strong></li>
      <li class='box flex flex--center'><strong>Persuasion</strong></li>
      <li class='box flex flex--center'><strong>Negotiation</strong></li>
      <li class='box flex flex--center'><strong>Attention to detail</strong></li>
      <li class='box flex flex--center'><strong>Resilience</strong></li>
      <li class='box flex flex--center'><strong>Flexibility</strong></li>
      <li class='box flex flex--center'><strong>Complex problem-solving</strong></li>
      <li class='box flex flex--center'><strong>Emotional intelligence</strong></li>
      <li class='box flex flex--center'><strong>Learning</strong></li>
      <li class='box flex flex--center'><strong>Leadership</strong></li>
      <li class='box flex flex--center'><strong>Social influence</strong></li>
    </ul>

   </div>
  </section>

  <section class='activity flex flex--center flex--column jsSelectItems' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600" data-scroll-anchor="jsScrollAnchor1">
   <div class='holder flex flex--column flex--center'>
      <p><strong>Choose the right word to fill the gap:</strong></p>
      <p>Human work will shift from repetitive tasks to more _________tasks.</p>
      <ul class="flex flex--wrap flex--justify-center list--activity-answers list--activity-future-work ">
        <li class='list--activity-answers__item flex flex--center jsAnswer'>boring</li>
        <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>creative</li>

      </ul>
      <a class="btn btn--blue inline-flex flex--center jsCheck"  href="{{$links['next']}}">Check</a>
    </div>

    <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
      <div class="holder ">
        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Correct!</strong></p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsShowNextActivity">Continue</button>
        </div>

      </div>
    </div>


    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
      <div class="holder ">
        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"> Oops, that&rsquo;s not the right answer.</p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
        </div>
      </div>
    </div>
  </section>

  <section class="jsScrollAnchor1"></section>

  <section class='activity flex flex--center flex--column hide jsSelectItems' data-keep-answers="true" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" data-scroll-anchor="jsScrollAnchor2">
   <div class='holder flex flex--column flex--center'>
      <p class="col-single"><strong>Can you identify which jobs are likely to be automated?</strong></p>
      <ul class="flex flex--wrap list--activity-answers list--activity-future-work">
        <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Basic data entry</li>
        <li class='list--activity-answers__item flex flex--center jsAnswer'>Social work</li>
        <li class='list--activity-answers__item flex flex--center jsAnswer'>Physiotherapy</li>
        <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Telemarketing</li>
        <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Machine operation</li>
        <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Basic administration</li>
        <li class='list--activity-answers__item flex flex--center jsAnswer'>Interior design</li>
        <li class='list--activity-answers__item flex flex--center jsAnswer'>Professional sportsperson</li>
      </ul>
      <a class="btn btn--blue inline-flex flex--center jsCheck"  href="{{$links['next']}}">Check</a>
    </div>
    <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
      <div class="holder ">
        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Well done!</strong> It&rsquo;s important to remember that whilst many jobs will be displaced, more jobs will also be created.</p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
          </div>

      </div>
    </div>


    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
      <div class="holder ">
        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">  <strong>That&rsquo;s not quite right.</strong> Here&rsquo;s a clue: you should select four out of eight.</p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsTryAgain">Try again</a>
        </div>
      </div>
    </div>

  </section>

  <section class="jsScrollAnchor2"></section>


</main>



@endsection
@section('javascript')


<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 7);
</script>

@endsection
