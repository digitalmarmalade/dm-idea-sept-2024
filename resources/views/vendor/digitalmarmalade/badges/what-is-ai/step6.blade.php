@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])


<main>

  <section class='flex flex--center flex--column'>
   <div class='holder '>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">3 Domains of AI</h1>
    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">There are three common domains of AI:</p>

    <ul class="list--1-col flex flex--wrap">
      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
        <h2 class="box__title">Natural Language Processing</h2>
        <p>Commonly abbreviated as NLP,  is a branch of AI that helps computers understand, interpret and manipulate human language.</p>
      </li>

      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <h2 class="box__title">Computer Vision</h2>
        <p>Is a form of AI where computers can &ldquo;see&rdquo; the world, analyze visual data and then make decisions from it or gain understanding about the environment and situation.</p>
        <p>Imagine all the things human sight allows and you can start to realize the nearly endless applications for computer vision.</p>

      </li>

      <li class='box flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <h2 class="box__title">Statistical Data for AI</h2>
        <p>Involves programming the computer to recognise patterns in a set of data to try to predict future behaviour.</p>
        <p>This process is a form of machine learning and the more data the computer has to learn from, the more &ldquo;intelligent&rdquo; or accurate its predictions become.</p>

      </li>


    </ul>


   </div>
  </section>

  <section class='activity activity--ai-domains flex jsFlipCard' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
   <div class='holder flex flex--center flex--column'>

      <p class="col-single">Now that you can identify three domains of AI and have become familiar with how AI is used in everyday life, let&rsquo;s see if you can match the AI technologies below and the AI domain that they use.</p>
      <p class="col-single"><strong>Match the technology with the AI domain it uses.</strong><br>Click on a card to reveal what it is and see if you can find either the technology or the domain of AI to match. </p>

      <ul class="list--6-cols flex flex--wrap flex--row jsCardsList">

        <li class="flip-card jsAnswer" data-id="1">
          <div class="flip-card-inner">
            <div class="box box--front flex flex--center flip-card-front">
              <p><strong>AI</strong></p>
            </div>

            <div class="box box--back box--back-domain flex flex--center flex--column flip-card-back">
              <p><strong>Face ID</strong></p>
              <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--face-id.svg" />
            </div>
          </div>

        </li>

        <li class="flip-card jsAnswer" data-id="2">
          <div class="flip-card-inner">
            <div class="box box--front flex flex--center flip-card-front">
              <p><strong>AI</strong></p>
            </div>

            <div class="box box--back box--back-domain blue-medium flex flex--center flex--column flip-card-back">
              <p><strong>Alexa</strong></p>
              <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--digital-voice-assistant.svg" />
            </div>
          </div>

        </li>

        <li class="flip-card jsAnswer" data-id="1">
          <div class="flip-card-inner">
            <div class="box box--front flex flex--center flip-card-front">
              <p><strong>AI</strong></p>
            </div>

            <div class="box box--back flex flex--center flip-card-back">
              <p><strong>Computer Vision</strong></p>
            </div>
          </div>
        </li>

        <li class="flip-card jsAnswer" data-id="3">
          <div class="flip-card-inner">
            <div class="box box--front flex flex--center flip-card-front">
              <p><strong>AI</strong></p>
            </div>

            <div class="box box--back box--back-domain yellow flex flex--center flex--column flip-card-back">
              <p><strong>Netflix</strong></p>
              <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--netflix.svg" />
            </div>
          </div>
        </li>

        <li class="flip-card jsAnswer" data-id="3">
          <div class="flip-card-inner">
            <div class="box box--front flex flex--center flip-card-front">
              <p><strong>AI</strong></p>
            </div>

            <div class="box box--back yellow flex flex--center flip-card-back">
              <p><strong>Statistical Data</strong></p>
            </div>
          </div>

        </li>

        <li class="flip-card jsAnswer" data-id="2">
          <div class="flip-card-inner">
            <div class="box box--front flex flex--center flip-card-front">
              <p><strong>AI</strong></p>
            </div>

            <div class="box box--back blue-medium flex flex--center flip-card-back">
              <p><strong>Natural Language Processing</strong></p>
            </div>
          </div>
        </li>

      </ul>

    <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
      <div class="holder ">
        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Well done!</strong> Let&rsquo;s move on.</p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
          <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
          </div>

      </div>
    </div>

  </section>

  <section class="jsScrollAnchor"></section>


</main>



@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 6);
</script>

@endsection
