@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])


<main>

  <section class='flex flex--center flex--column'>
   <div class='holder '>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Examples of AI in everyday life </h1>

    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
      <div class="col" >
        <p>You might think that artificial intelligence is something that is only used by the world&rsquo;s biggest technology companies who are creating robots, futuristic cars and computers.</p>
      </div>
      <div class="col">
        <p>In reality, most people encounter AI every day and it may even be the first thing you use when you wake up and the last thing you use before going to bed. Have you heard of the following? </p>
      </div>
    </div>

    <ul class="list--2-cols list--examples-everyday-life flex flex--wrap">
      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <h2 class="box__title">Face ID</h2>
        <p>Apple has introduced a feature called FaceID that allows the user to unlock their phone with a

        <span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip1_content">biometric</span>

        scan of their face.</p>
        <p>FaceID uses

        <span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip2_content">machine learning</span>

           algorithms to match the scan of your face with the original face scan that has been stored to determine if you are the same person.</p>
        <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--face-id.svg" />
      </li>

      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <h2 class="box__title">Netflix</h2>
        <p>Have you ever wondered how Netflix makes recommendations for TV shows and movies that appear on your home screen?</p>
        <p>This recommendation function uses AI to collect data from your viewing history as well as the history of other users who have similar tastes to recommend what you might want to watch next.</p>
        <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--netflix.svg" />
      </li>

      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <h2 class="box__title">Digital Voice Assistant</h2>
        <p>Virtual digital assistants like Siri by Apple and Alexa by Amazon respond to voice commands by answering questions or fulfilling requests such as playing music or making calls.</p>
        <p>Virtual Digital Assistants use an AI function called

        <span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip3_content">Natural Language Processing</span>

        to process, analyse and respond to the speech data that it has been given.</p>
        <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--digital-voice-assistant.svg" />
      </li>


      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
        <h2 class="box__title">Nest Thermostat</h2>
        <p>The Nest is a thermostat designed by Google that uses machine learning to learn your schedule, habits and preferences so it turns on when you&rsquo;re at home and turns itself down when you&rsquo;re away. This way, it only uses the energy it needs and saves both energy and money on utility bills!</p>

        <img class="illustration--nest-thermostat" src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--nest-thermostat.svg" />
      </li>

    </ul>
    <p class="col-single">Have you used any of the AI technologies listed above? Can you think of what you use every day that is powered by AI?</p>
    <a class="btn btn--white inline-flex flex--center" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="700" data-aos-anchor-placement="bottom-bottom" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>

   </div>

  <div class="tooltip_templates">
      <span id="tooltip1_content">
        <p>Human characteristics that can be used digitally to identify a person.</p>
      </span>

      <span id="tooltip2_content">
        <p>Using example data or experience to refine how computers make predictions or perform a task.</p>
      </span>

      <span id="tooltip3_content">
        <p>A branch of AI that helps computers understand, interpret and manipulate human language.</p>
      </span>

    </div>

  </section>

</main>

@endsection
@section('javascript')

<script>
  $(document).ready(function(  ) {

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
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>

@endsection
