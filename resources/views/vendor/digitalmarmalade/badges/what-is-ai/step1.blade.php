@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<main>

  <section class='flex flex--center flex--column'>
   <div class='holder '>

    <div class="box cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500">
      <div class="col">
        <p>Artificial Intelligence, or AI for short, is technology that enables computers to learn from experience, respond to new inputs and to think and act in a &ldquo;human&rdquo; way.</p>
      </div>
      <div class="col">
        <p>In this badge, we will explore how AI works and what it could mean for the future but first, let&rsquo;s start with a bit of history&#8230; </p>
      </div>
    </div>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">The history of computer chips</h1>

    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
      <div class="col" >
        <p>The history of AI is heavily dependent on the history of

        <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">computer chips</span>.

         Computer chips are the core of all electronic products that we interact with.</p>
        <p>Without computer chips there could be no AI but AI itself is now being used to speed up the process of chip design!</p>
      </div>
      <div class="col">
        <p>There are far more chips on earth than people!</p>
        <p>Around the world, billions of chips are at work &mdash; in computers, phones, smartwatches, televisions, printers, speakers, games consoles, cars, trains, aeroplanes &mdash; in almost all electronics.</p>
      </div>

      <div class="tooltip_templates">
          <span id="tooltip1_content">
              <p>A dense cluster of semiconductor material embedded on a small wafer plate.</p>
          </span>
      </div>

    </div>

   </div>
  </section>

  <section class='activity activity--chips jsSelectItems ' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300" data-scroll-anchor="jsScrollAnchor1">
   <div class='holder flex flex--column'>
      <p><strong>Select only the items that have chips in them.</strong></p>

      <ul class="list--activity-answers list--5-cols flex flex--wrap">

        <li class="box list--activity-answers__item flex flex--align-center jsAnswer jsCorrect">

            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--smart-phone.svg" />

          <p class="uppercase bold">Smart phone</p>
        </li>


        <li class="box list--activity-answers__item flex flex--align-center jsAnswer jsCorrect">

            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--car.svg" />

          <p class="uppercase bold">Car</p>
        </li>

        <li class="box list--activity-answers__item flex flex--align-center jsAnswer jsCorrect">

            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--fan.svg" />

          <p class="uppercase bold">Fan</p>
        </li>

        <li class="box list--activity-answers__item flex flex--align-center jsAnswer">

            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--hairbrush.svg" />

          <p class="uppercase bold">Hairbrush</p>
        </li>


        <li class="box list--activity-answers__item flex flex--align-center jsAnswer jsCorrect">

            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--electric-guitar.svg" />

          <p class="uppercase bold">Electric guitar</p>
        </li>

        <li class="box list--activity-answers__item flex flex--align-center jsAnswer">

            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--flute.svg" />

          <p class="uppercase bold">Flute</p>
        </li>


        <li class="box list--activity-answers__item flex flex--align-center jsAnswer jsCorrect">

            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--automatic-pet-feeder.svg" />

          <p class="uppercase bold">Automatic pet feeder</p>
        </li>

        <li class="box list--activity-answers__item flex flex--align-center jsAnswer">

            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--banana-bread.svg" />

          <p class="uppercase bold">Banana bread</p>
        </li>


        <li class="box list--activity-answers__item flex flex--align-center jsAnswer">

            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--bowl.svg" />

          <p class="uppercase bold">Bowl</p>
        </li>

        <li class="box list--activity-answers__item flex flex--align-center jsAnswer">

            <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--lampshade.svg" />

          <p class="uppercase bold">Lampshade</p>
        </li>

      </ul>

      <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>


    </div>


    <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
      <div class="holder ">
        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Nice work, well done!</strong> It might be easy to take them for granted now but computer chips haven&rsquo;t always existed. Let&rsquo;s take a quick look at how they came to be.</p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn  animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
        </div>

      </div>
    </div>

    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
      <div class="holder ">
        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong> Chips are in almost all electronics.</p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</a>
        </div>
      </div>
    </div>

    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFailMaxAttempts'>
      <div class="holder ">
        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Hint:</strong> You should select 5 answers!</p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</a>
        </div>
      </div>
    </div>


  </section>

  <section class="jsScrollAnchor1"></section>

</main>
@endsection
@section('javascript')
<script>
    $(document).ready(function() {
	  var triggerMode = 'hover';

	  if($('body').hasClass('touch')){
		  triggerMode = 'click';
	  }

      $('.jsTooltip').tooltipster({
           trigger: triggerMode,
           maxWidth: 350
      });
    });
</script>
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>

@endsection
